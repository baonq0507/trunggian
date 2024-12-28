const Channel = require('../repository/channel');

module.exports = {
    saveMessage: async function (socket, data, user) {
        
        const channelId = socket.handshake.auth.channelId;

        // Kiểm tra dữ liệu đầu vào
        if (!data || !user || !channelId) {
            socket.emit('error', {
                message: 'Truy cập bị từ chối', 
                code: 400
            });
            return;
        }

        try {
            // Kiểm tra kênh có tồn tại không
            const channel = await Channel.showChannel(channelId, user.id);
            if (!channel) {
                socket.emit('error', {
                    message: 'Không tìm thấy kênh.',
                    code: 404
                });
                return;
            }

            // Lưu tin nhắn và gửi cho các client khác
            const message = await Channel.sendMessage(channelId, data, user.id);
            
            // Chỉ emit cho các client khác, không emit lại cho người gửi
            socket.broadcast.to(channelId).emit('message', {
                message: message,
                user: user,
                channel: channel,
            });

        } catch (err) {
            console.error('Error in saving message:', err);
            socket.emit('error', {
                message: 'Không thể lưu tin nhắn.',
                code: 500
            });
        }
    }
};
