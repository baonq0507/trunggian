module.exports = {
    typing: async (socket, data, user) => {
        const channelId = socket.handshake.auth.channelId;
        socket.to(channelId).emit('typing', { user: user, is_typing: true });
    }
}