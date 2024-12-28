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

    socket.on('message', function (data) {
        console.log(data);
        
        let message = data.message.message;
        let user = data.user;
        let channel = data.channel;
        const classUser = userId == user.id ? 'message-out' : 'message-in';
        let html = `<div class="message ${classUser}">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-user-profile" class="avatar avatar-responsive">
                        <img class="avatar-img" src="/assets/img/avatars/2.jpg" alt="">
                    </a>
                    <div class="message-inner">
                        <div class="message-body">
                            <div class="message-content">
                                <div class="message-text">
                                    <p>${message.message}</p>
                                </div>
                                <div class="message-action">
                                    <div class="dropdown">
                                        <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <span class="me-auto">Edit</span>
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                                            <path d="M12 20h9"></path>
                                                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                        </svg>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center" href="#">
                                                    <span class="me-auto">Reply</span>
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left">
                                                            <polyline points="9 14 4 9 9 4"></polyline>
                                                            <path d="M20 20v-7a4 4 0 0 0-4-4H4"></path>
                                                        </svg>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                    <span class="me-auto">Delete</span>
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                                        </svg>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="message-footer">
                            <span class="extra-small text-muted">${formatDate(message.created_at)}</span>
                        </div>
                    </div>
                </div>`;
        $('#chat-body-inner').append(html);
        // tự động scroll xuống dưới cùng
        $('.hide-scrollbar').scrollTop($('#chat-body-inner')[0].scrollHeight);
    });

    socket.on('channel', function (data) {
        let message = data.message;
        console.log(message)
    });


    // $('#send-message').click(function () {
    //     let message = $('#message').val();
    //     let file = $('#dz-btn').data('file');
    //     console.log(file);
    //     socket.emit('saveMessage', {
    //         message: message,
    //         type: 'text'
    //     });
    //     let html = `<div class="message message-out">
    //                 <a href="#" data-bs-toggle="modal" data-bs-target="#modal-user-profile" class="avatar avatar-responsive">
    //                     <img class="avatar-img" src="/assets/img/avatars/2.jpg" alt="">
    //                 </a>
    //                 <div class="message-inner">
    //                     <div class="message-body">
    //                         <div class="message-content">
    //                             <div class="message-text">
    //                                 <p>${message}</p>
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
    //                         <span class="extra-small text-muted">${formatDate(new Date())}</span>
    //                     </div>
    //                 </div>
    //             </div>`;
    //     $('#chat-body-inner').append(html);
    //     $('#message').val('');
    //     // tự động scroll xuống dưới cùng
    //     $('.hide-scrollbar').scrollTop($('#chat-body-inner')[0].scrollHeight);
    // });
    // const dropzone = new Dropzone("#dz-btn", {
    //     url: "/upload/message",
    //     maxFiles: 1,
    //     acceptedFiles: ".png,.jpg,.jpeg",
    //     addRemoveLinks: true,
    //     autoProcessQueue: false,
    // });

    $('#chat-form').submit(function (e) {
        e.preventDefault();
        const message = $('#message').val();
        console.log(message);
        if(!message) return

        socket.emit('saveMessage', {
            message: message,
            type: 'text'
        });

        let html = `<div class="message message-out">
            <a href="#" data-bs-toggle="modal" data-bs-target="#modal-user-profile" class="avatar avatar-responsive">
                <img class="avatar-img" src="/assets/img/avatars/2.jpg" alt="">
            </a>
            <div class="message-inner">
                <div class="message-body">
                    <div class="message-content">
                        <div class="message-text">
                            <p>${message}</p>
                        </div>
                        <div class="message-action">
                            <div class="dropdown">
                                <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="12" cy="5" r="1"></circle>
                                        <circle cx="12" cy="19" r="1"></circle>
                                    </svg>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <span class="me-auto">Edit</span>
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                                    <path d="M12 20h9"></path>
                                                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                </svg>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <span class="me-auto">Reply</span>
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left">
                                                    <polyline points="9 14 4 9 9 4"></polyline>
                                                    <path d="M20 20v-7a4 4 0 0 0-4-4H4"></path>
                                                </svg>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                            <span class="me-auto">Delete</span>
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                </svg>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
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
        // tự động scroll xuống dưới cùng
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


});