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
        const { message, type } = data;
        return new Promise((resolve, reject) => {
            db.query(`SELECT * FROM channels WHERE slug = ?`, [channel_id], (err, rows) => {
                if (err) {
                    return reject(err);
                }
                if (rows.length === 0) {
                    return reject(new Error('Channel not found'));
                }

                const channel = rows[0];

                db.query(`INSERT INTO messgaes (channel_id, message, user_id, type, is_read, created_at, updated_at) VALUES (?, ?, ?, ?, ?, NOW(), NOW())`, [channel.id, message, user_id, type, false], (err, messageInserted) => {
                    if (err) {
                        return reject(err);
                    }
                    console.log(messageInserted);
                    db.query(`SELECT * FROM users WHERE id = ?`, [user_id], (err, user) => {
                        if (err) {
                            return reject(err);
                        }
                        resolve({
                            message: message,
                            type: type,
                            user: user[0],
                            channel: channel,
                        });
                    });
                });
            });
            
        });
    }
};
