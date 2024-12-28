
const Channel = require('../repository/channel');

module.exports = {
    joinGroup: async function(socket, data, user) {
        console.log('joinGroup');
        
        const channelId = socket.handshake.auth.channelId;
        console.log(channelId);
        
        if (!channelId || !user) {
            socket.emit('error', {
                message: 'Truy cập bị từ chối',
                code: 400
            });
            return;
        }

        const channel = await Channel.showChannel(channelId, user.id);
        
        if (!channel) {
            socket.emit('error', {
                message: 'Không tìm thấy kênh.',
                code: 404
            });
            return;
        }

        socket.join(channelId);

        socket.to(channelId).emit('channel', {
            channel: channel,
            type: 'join',
            message: `${user.username} joined group ${channelId}`
        });
    }
}
