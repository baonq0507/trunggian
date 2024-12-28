$(document).ready(function () {
    //emit join channel
    const formatDate = (date) => {
        return new Date(date).toLocaleTimeString('vi-VN', {
            hour: '2-digit',
            minute: '2-digit',
        });
    };
    socket.emit('joinGroup', {
        group_id: channelId
    });

    socket.on('error', function (data) {
        alert(data.message);
    });

    // Thêm biến để lưu file đã upload
    let uploadedFiles = [];
    //preview element 

    let previewFiles = [];
    // Thêm cấu hình Dropzone
    const dropzone = new Dropzone("#dzz-btn", {
        url: URL_UPLOAD, // Thay bằng endpoint upload của bạn
        previewsContainer: "#dz-preview-row",
        clickable: "#dzz-btn",
        previewTemplate: `
            <div class="theme-file-preview position-relative mx-2 dz-processing dz-error dz-complete dz-image-preview">
                <div class="theme-file-preview position-relative mx-2 dz-processing dz-error dz-complete dz-image-preview">
                    <div class="avatar avatar-lg dropzone-file-preview">
                        <span class="avatar-text rounded bg-secondary text-body file-title" title="">
                            <i class="fa fa-file-pdf fa-lg" data-type="application/pdf"></i>
                            <i class="fa fa-file-word fa-lg" data-type="application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"></i>
                            <i class="fa fa-file-excel fa-lg" data-type="application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"></i>
                            <i class="fa fa-file-powerpoint fa-lg" data-type="application/vnd.ms-powerpoint,application/vnd.openxmlformats-officedocument.presentationml.presentation"></i>
                            <i class="fa fa-file-text fa-lg" data-type="text/"></i>
                            <i class="fa fa-file-video fa-lg" data-type="video/"></i>
                            <i class="fa fa-file-audio fa-lg" data-type="audio/"></i>
                            <i class="fa fa-file-archive fa-lg" data-type="application/zip,application/x-rar-compressed"></i>
                            <i class="fa fa-file-code fa-lg" data-type="application/json"></i>
                            <i class="fa fa-file fa-lg" data-type="default"></i>
                        </span>
                    </div>
                    <div class="avatar avatar-lg dropzone-image-preview">
                        <img data-dz-thumbnail class="avatar-img rounded file-title" />
                    </div>
                    <a class="badge badge-circle bg-body text-white position-absolute top-0 end-0 m-2" href="#" data-dz-remove="">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </a>
                </div>
            </div>
        `,
        success: function (file, response) {
            // Lưu thông tin file đã upload
            console.log(response);

            uploadedFiles.push({
                name: file.name,
                type: file.type,
                url: response.url
            });
        }
    });

    socket.on('message', function (data) {
        console.log(data);

        let message = data.message.message.message;
        let files = data.message.message.files || [];
        let user = data.message.user;
        let channel = data.message.message.channel;
        console.log(message, files, user, channel);
        const classUser = userId == user.id ? 'message-out' : 'message-in';

        let messageContent = '';
        if (files.length > 0) {
            files.forEach(file => {
                if (file.type.startsWith('image/')) {
                    messageContent += `<img src="${file.url}" class="img-fluid mb-2" alt="${file.name}" /><br>`;
                } else {
                    messageContent += `<a href="${file.url}" target="_blank" class="file-attachment text-white">
                        ${file.type.startsWith('application/pdf') ? '<i class="fa fa-file-pdf"></i>' :
                            file.type.startsWith('application/msword') || file.type.includes('wordprocessingml') ? '<i class="fa fa-file-word"></i>' :
                                file.type.startsWith('application/vnd.ms-excel') || file.type.includes('spreadsheetml') ? '<i class="fa fa-file-excel"></i>' :
                                    file.type.startsWith('application/vnd.ms-powerpoint') || file.type.includes('presentationml') ? '<i class="fa fa-file-powerpoint"></i>' :
                                        file.type.startsWith('text/') ? '<i class="fa fa-file-text"></i>' :
                                            file.type.startsWith('video/') ? '<i class="fa fa-file-video"></i>' :
                                                file.type.startsWith('audio/') ? '<i class="fa fa-file-audio"></i>' :
                                                    file.type.startsWith('application/zip') || file.type.startsWith('application/x-rar') ? '<i class="fa fa-file-archive"></i>' :
                                                        file.type.startsWith('application/json') ? '<i class="fa fa-file-code"></i>' :
                                                            '<i class="fa fa-file"></i>'} ${file.name}
                    </a><br>`;
                }
            });
        }

        // Convert URLs in message to clickable links
        if (message && typeof message === 'string') {
            const urlRegex = /(https?:\/\/[^\s]+)/g;
            message = message.replace(urlRegex, url => `<a href="${url}" class="text-white" target="_blank">${url}</a>`);
            messageContent += message;
        }

        let html = `<div class="message ${classUser}">
            <a href="#" data-bs-toggle="modal" data-bs-target="#modal-user-profile" class="avatar avatar-responsive">
                <img class="avatar-img" src="/assets/img/avatars/2.jpg" alt="">
            </a>
            <div class="message-inner">
                <div class="message-body">
                    <div class="message-content">
                        <div class="message-text">
                            ${messageContent}
                        </div>
                    </div>
                </div>

                <div class="message-footer">
                    <span class="extra-small text-muted">${formatDate(new Date())}</span>
                </div>
            </div>
        </div>`;
        $('#chat-body-inner').append(html);
        $('.hide-scrollbar').scrollTop($('#chat-body-inner')[0].scrollHeight);
    });

    socket.on('channel', function (data) {
        let message = data.message;
        console.log(message)
    });

    $('#chat-form').submit(function (e) {
        e.preventDefault();
        let message = $('#message').val();

        // Tạo payload với message và files
        const payload = {
            message: message,
            type: uploadedFiles.length > 0 ? 'file' : 'text',
            files: uploadedFiles
        };

        console.log(payload);


        // Emit message với files
        console.log();

        socket.emit('saveMessage', payload);

        // Tạo HTML cho message
        let messageContent = '';
        if (uploadedFiles.length > 0) {
            uploadedFiles.forEach(file => {
                if (file.type.startsWith('image/')) {
                    messageContent += `<img src="${file.url}" class="img-fluid mb-2" /><br>`;
                } else {
                    messageContent += `<a href="${file.url}" target="_blank" class="file-attachment text-white">
                        ${file.type.startsWith('application/pdf') ? '<i class="fa fa-file-pdf"></i>' :
                            file.type.startsWith('application/msword') || file.type.includes('wordprocessingml') ? '<i class="fa fa-file-word"></i>' :
                                file.type.startsWith('application/vnd.ms-excel') || file.type.includes('spreadsheetml') ? '<i class="fa fa-file-excel"></i>' :
                                    file.type.startsWith('application/vnd.ms-powerpoint') || file.type.includes('presentationml') ? '<i class="fa fa-file-powerpoint"></i>' :
                                        file.type.startsWith('text/') ? '<i class="fa fa-file-text"></i>' :
                                            file.type.startsWith('video/') ? '<i class="fa fa-file-video"></i>' :
                                                file.type.startsWith('audio/') ? '<i class="fa fa-file-audio"></i>' :
                                                    file.type.startsWith('application/zip') || file.type.startsWith('application/x-rar') ? '<i class="fa fa-file-archive"></i>' :
                                                        file.type.startsWith('application/json') ? '<i class="fa fa-file-code"></i>' :
                                                            '<i class="fa fa-file"></i>'} ${file.name}
                    </a><br>`;
                }
            });
        }

        if (message && typeof message === 'string') {
            const urlRegex = /(https?:\/\/[^\s]+)/g;
            message = message.replace(urlRegex, url => `<a href="${url}"  target="_blank">${url}</a>`);
            messageContent += message;
        }

        let html = `<div class="message message-out">
            <a href="#" data-bs-toggle="modal" data-bs-target="#modal-user-profile" class="avatar avatar-responsive">
                <img class="avatar-img" src="/assets/img/avatars/2.jpg" alt="">
            </a>
            <div class="message-inner">
                <div class="message-body">
                    <div class="message-content">
                        <div class="message-text">
                            ${messageContent}
                        </div>
                    </div>
                </div>
                <div class="message-footer">
                    <span class="extra-small text-muted">${formatDate(new Date())}</span>
                </div>
            </div>
        </div>`;

        $('#chat-body-inner').append(html);
        $('#message').val('');

        // Reset files sau khi gửi
        uploadedFiles = [];
        dropzone.removeAllFiles();

        // Scroll to bottom
        $('.hide-scrollbar').scrollTop($('#chat-body-inner')[0].scrollHeight);
    });

    $('#message').on('keydown', function (e) {
        if (e.keyCode == 13) {
            $('#chat-form').submit();
        } else {
            socket.emit('typing', {
                message: $('#message').val(),
                channel_id: channelId
            });
        }
    });

    socket.on('typing', function (data) {
        console.log(data);
        $('#typing-message').removeClass('d-none');

        setTimeout(function () {
            $('#typing-message').addClass('d-none');
        }, 3000);
    });

    //scroll
    // $('.hide-scrollbar').on('scroll', function () {
    //     // nếu scroll lên đến đầu thì load more
    //     if ($(this).scrollTop() == 0) {
    //         // lấy tin nhắn đầu tiên
    //         let message = $('#chat-body-inner').find('.message').first();
    //         let time = message.find('.time-message').data('time');
    //         if (time) {
    //             get(messageRoute, {
    //                 time: time
    //             }).then(function (response) {
    //                 console.log(response.messages);
    //                 let html = '';
    //                 for (let message of response.messages) {
    //                     html += `<div class="message ${message.user_id == userId ? 'message-out' : 'message-in'}">
    //                 <a href="#" data-bs-toggle="modal" data-bs-target="#modal-user-profile" class="avatar avatar-responsive">
    //                     <img class="avatar-img" src="{{asset('assets/img/avatars/2.jpg')}}" alt="">
    //                 </a>
    //                 <div class="message-inner">
    //                     <div class="message-body">
    //                         <div class="message-content">
    //                             <div class="message-text">
    //                                 <p>${message.message}</p>
    //                             </div>
    //                             <div class="message-action">
    //                                 <div class="dropdown">
    //                                     <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    //                                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
    //                                             <circle cx="12" cy="12" r="1"></circle>
    //                                             <circle cx="12" cy="5" r="1"></circle>
    //                                             <circle cx="12" cy="19" r="1"></circle>
    //                                         </svg>
    //                                     </a>

    //                                     <ul class="dropdown-menu">
    //                                         <li>
    //                                             <a class="dropdown-item d-flex align-items-center" href="#">
    //                                                 <span class="me-auto">Edit</span>
    //                                                 <div class="icon">
    //                                                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
    //                                                         <path d="M12 20h9"></path>
    //                                                         <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
    //                                                     </svg>
    //                                                 </div>
    //                                             </a>
    //                                         </li>
    //                                         <li>
    //                                             <a class="dropdown-item d-flex align-items-center" href="#">
    //                                                 <span class="me-auto">Reply</span>
    //                                                 <div class="icon">
    //                                                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left">
    //                                                         <polyline points="9 14 4 9 9 4"></polyline>
    //                                                         <path d="M20 20v-7a4 4 0 0 0-4-4H4"></path>
    //                                                     </svg>
    //                                                 </div>
    //                                             </a>
    //                                         </li>
    //                                         <li>
    //                                             <hr class="dropdown-divider">
    //                                         </li>
    //                                         <li>
    //                                             <a class="dropdown-item d-flex align-items-center text-danger" href="#">
    //                                                 <span class="me-auto">Delete</span>
    //                                                 <div class="icon">
    //                                                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
    //                                                         <polyline points="3 6 5 6 21 6"></polyline>
    //                                                         <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
    //                                                         <line x1="10" y1="11" x2="10" y2="17"></line>
    //                                                         <line x1="14" y1="11" x2="14" y2="17"></line>
    //                                                     </svg>
    //                                                 </div>
    //                                             </a>
    //                                         </li>
    //                                     </ul>
    //                                 </div>
    //                             </div>
    //                         </div>
    //                     </div>

    //                     <div class="message-footer">
    //                         <span class="extra-small text-muted" data-time="${message.created_at}">${formatDate(message.created_at)}</span>
    //                     </div>
    //                 </div>
    //             </div>`;
    //                 }

    //                 $('#chat-body-inner').prepend(html);
    //             });
    //         }
    //     }
    // });

    function copyLink(link) {
        // Tạo một textarea tạm thời
        const tempTextarea = document.createElement('textarea');
        tempTextarea.value = link;
        document.body.appendChild(tempTextarea);

        // Chọn nội dung và sao chép
        tempTextarea.select();
        document.execCommand('copy'); // Sao chép văn bản
        document.body.removeChild(tempTextarea); // Xóa textarea tạm thời

        alert('Đã sao chép: ' + link);
    }

    $('.copy-link').click(function () {
        copyLink($(this).data('link'));
    });


    // change jquery
    $('#reject-btn').click(function () {
        $('#status-input').val('rejected');
    });
    $('#agree-btn').click(function () {
        $('#status-input').val('completed');
    });


    $('#status-form').submit(function (e) {
        e.preventDefault();
        const status = $('#status-input').val();
        const action = $(this).data('action');
        const token = $('meta[name="csrf-token"]').attr('content');
        put(action, {
            status: status,
            _token: token
        }).then(function (response) {
            console.log(response);
            if (response.status == 200) {
                Swal.fire({
                    title: 'Thành công',
                    text: response.message,
                    icon: 'success',
                });
                setTimeout(function () {
                    window.location.reload();
                }, 1500);
            }
        }).catch(function (error) {
            Swal.fire({
                title: 'Thất bại',
                text: error.responseJSON.message,
                icon: 'error',
            });
        });
    });
    //scroll xuống cùng
    $('.hide-scrollbar').scrollTop($('#chat-body-inner')[0].scrollHeight);

});