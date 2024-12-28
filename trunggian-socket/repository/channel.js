const db = require('../database/connection');

module.exports = {
    showChannel: async (slug, user_id) => {
        return new Promise((resolve, reject) => {
            // Truy vấn kết hợp (join) giữa bảng channels và use_channel
            const query = `SELECT c.* FROM channels c JOIN user_channels uc ON c.id = uc.channel_id WHERE c.slug = ? AND uc.user_id = ?`;

            db.query(query, [slug, user_id], (err, rows) => {
                if (err) {
                    console.error(err);
                    return reject(err);
                }

                // Kiểm tra xem có kết quả không
                if (rows.length > 0) {
                    resolve(rows[0]); // Trả về kênh nếu tìm thấy
                } else {
                    resolve(null); // Trả về null nếu không tìm thấy kênh hoặc người dùng không tham gia
                }
            });
        });
    },
    sendMessage: async (channel_id, data, user_id) => {
        const { message, type, files } = data;
        return new Promise((resolve, reject) => {
            db.query(`SELECT * FROM channels WHERE slug = ?`, [channel_id], (err, rows) => {
                if (err) {
                    return reject(err);
                }
                if (rows.length === 0) {
                    return reject(new Error('Channel not found'));
                }

                const channel = rows[0];

                // Kiểm tra xem tin nhắn đã tồn tại chưa để tránh duplicate
                db.query(
                    `SELECT * FROM messgaes WHERE channel_id = ? AND message = ? AND user_id = ? AND created_at >= NOW() - INTERVAL 5 SECOND`,
                    [channel.id, message, user_id],
                    (err, existingMessages) => {
                        if (err) {
                            return reject(err);
                        }

                        // Nếu tin nhắn đã tồn tại trong 5 giây gần đây, không insert nữa
                        if (existingMessages.length > 0) {
                            return resolve({
                                message: {
                                    ...existingMessages[0],
                                    files: files || []
                                },
                                type: type,
                                user: { id: user_id },
                                channel: channel
                            });
                        }

                        // Nếu là tin nhắn mới, thực hiện insert
                        db.query(
                            `INSERT INTO messgaes (channel_id, message, user_id, type, created_at, updated_at) 
                             VALUES (?, ?, ?, ?, NOW(), NOW())`,
                            [channel.id, message, user_id, type],
                            (err, result) => {
                                if (err) {
                                    return reject(err);
                                }
                        
                                const insertedMessageId = result.insertId;

                                // Handle file attachments if present
                                const handleFiles = new Promise((resolveFiles, rejectFiles) => {
                                    if (!files || files.length === 0) {
                                        resolveFiles([]);
                                        return;
                                    }

                                    const fileValues = files.map(file => [
                                        insertedMessageId,
                                        file.name,
                                        file.type, 
                                        file.url,
                                        new Date(),
                                        new Date()
                                    ]);

                                    db.query(
                                        `INSERT INTO message_files (messgae_id, file_name, file_type, file_url, created_at, updated_at) 
                                         VALUES ?`,
                                        [fileValues],
                                        (err) => {
                                            if (err) {
                                                rejectFiles(err);
                                                return;
                                            }
                                            resolveFiles(files);
                                        }
                                    );
                                });

                                handleFiles.then(savedFiles => {
                                    db.query(`SELECT * FROM messgaes WHERE id = ?`, [insertedMessageId], (err, messageInserted) => {
                                        if (err) {
                                            return reject(err);
                                        }
                            
                                        db.query(`SELECT * FROM users WHERE id = ?`, [user_id], (err, user) => {
                                            if (err) {
                                                return reject(err);
                                            }
                                            resolve({
                                                message: {
                                                    ...messageInserted[0],
                                                    files: savedFiles
                                                },
                                                type: type,
                                                user: user[0],
                                                channel: channel,
                                            });
                                        });
                                    });
                                }).catch(err => {
                                    reject(err);
                                });
                            }
                        );
                    }
                );
            });
        });
    }
};
