$(document).ready(function () {
    $('#create-group').click(function (e) {
        e.preventDefault();
        const form = $('#create-group-form');
        form.submit();
    });

    const formatDate = (date) => {
        return new Date(date).toLocaleDateString('vi-VN', {
            day: '2-digit',
            month: '2-digit',
            year: 'numeric',
            hour: '2-digit',
            minute: '2-digit',
        });
    }
    const formatStatus = (status) => {
        switch (status) {
            case 'pending':
                return 'Đang chờ xác nhận';
            case 'accepted':
                return 'Đã được chấp nhận';
            case 'rejected':
                return 'Đã bị từ chối';
        }
    }
    $('#create-group-form').submit(function (e) {
        e.preventDefault();
        //data form
        const data = $(this).serialize();
        console.log(data);
        post('/channel', data).then(function (response) {
            console.log(response);
            Swal.fire({
                title: 'Thành công',
                text: response.message,
                icon: 'success',
            });
            // $('#modal-invite').modal('hide');
            $('#url_invite').text(response.url_invite);
            $('#create-group-form')[0].reset();

            $('#channels-list').prepend(`
                <a href="/message/${response.data.slug}" class="card border-0 text-reset">
                    <div class="card-body">
                        <div class="row gx-5">
                            <div class="col-auto">
                                <div class="avatar">
                                    <img src="assets/img/avatars/4.jpg" alt="#" class="avatar-img">
                                </div>
                            </div>

                            <div class="col">
                                <div class="d-flex align-items-center mb-3">
                                    <h5 class="me-auto mb-0">${response.data.name}</h5>
                                    <span class="text-muted extra-small ms-2">${formatDate(response.data.created_at)}</span>
                                </div>

                                <div class="d-flex align-items-center text-warning">
                                    <div class="line-clamp me-auto">
                                        ${formatStatus(response.data.status)}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            `);
        }).catch(function (error) {
            console.log(error);
            Swal.fire({
                title: 'Thất bại',
                text: error.responseJSON.message,
                icon: 'error',
            });
        });
    });
    //copy url_invite
    $('#url_invite').click(function (e) {
        e.preventDefault(); // Ngăn chặn hành động mặc định
        const textToCopy = this.textContent; // Lấy nội dung văn bản từ phần tử

        // Tạo một textarea tạm thời
        const tempTextarea = document.createElement('textarea');
        tempTextarea.value = textToCopy;
        document.body.appendChild(tempTextarea);

        // Chọn nội dung và sao chép
        tempTextarea.select();
        document.execCommand('copy'); // Sao chép văn bản
        document.body.removeChild(tempTextarea); // Xóa textarea tạm thời

        alert('Đã sao chép: ' + textToCopy);
    });

    let page = parseInt($('#channels-scroll').data('page')) ?? 2;
    let isLoading = false;
    let isEnd = false;
    $('#channels-scroll').on('scroll', function () {
        if ($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight - 100 && !isEnd) {
            // thêm loading
            if (!isLoading) {
                $('#channels-list').append(`
                    <div class="d-flex justify-content-center">
                        <div class="spinner-border" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
                `);
                isLoading = true;
                get(chanelRoute, {
                    page: page
                }).then(function (response) {
                    if (response.data.data.length > 0) {
                        // xóa loading
                        $('#channels-list').find('.spinner-border').remove();
                        for (let channel of response.data.data) {
                            $('#channels-list').append(`
                        <a href="/message/${channel.slug}" class="card border-0 text-reset">
                                <div class="card-body">
                                    <div class="row gx-5">
                                        <div class="col-auto">
                                            <div class="avatar">
                                                <img src="/assets/img/avatars/4.jpg" alt="#" class="avatar-img">
                                            </div>
                                        </div>  

                                        <div class="col">
                                            <div class="d-flex align-items-center mb-3">
                                                <h5 class="me-auto mb-0">${channel.name}</h5>
                                                <span class="text-muted extra-small ms-2">${formatDate(channel.created_at)}</span>
                                            </div>

                                            <div class="d-flex align-items-center text-warning">
                                                <div class="line-clamp me-auto">
                                                    ${formatStatus(channel.status)}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                    `);
                        }
                        page++;
                        $('#channels-scroll').data('page', page);
                        $('#channels-list').scrollTop(0);
                    } else {
                        isEnd = true;
                        $('#channels-list').find('.spinner-border').remove();
                    }

                }).catch(function (error) {
                    console.log(error);
                }).finally(function () {
                    isLoading = false;
                });
            }
        }
    });
});
