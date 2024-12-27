<div class="modal fade" id="modal-invite" tabindex="-1" aria-labelledby="modal-invite" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-xl-down">
        <div class="modal-content">

            <div class="modal-body py-0">
                <div class="profile modal-gx-n">
                    <div class="profile-img text-primary rounded-top-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 400 140.74">
                            <defs>
                                <style>
                                    .cls-2 {
                                        fill: #fff;
                                        opacity: 0.1;
                                    }
                                </style>
                            </defs>
                            <g>
                                <g>
                                    <path d="M400,125A1278.49,1278.49,0,0,1,0,125V0H400Z" />
                                    <path class="cls-2" d="M361.13,128c.07.83.15,1.65.27,2.46h0Q380.73,128,400,125V87l-1,0a38,38,0,0,0-38,38c0,.86,0,1.71.09,2.55C361.11,127.72,361.12,127.88,361.13,128Z" />
                                    <path class="cls-2" d="M12.14,119.53c.07.79.15,1.57.26,2.34v0c.13.84.28,1.66.46,2.48l.07.3c.18.8.39,1.59.62,2.37h0q33.09,4.88,66.36,8,.58-1,1.09-2l.09-.18a36.35,36.35,0,0,0,1.81-4.24l.08-.24q.33-.94.6-1.9l.12-.41a36.26,36.26,0,0,0,.91-4.42c0-.19,0-.37.07-.56q.11-.86.18-1.73c0-.21,0-.42,0-.63,0-.75.08-1.51.08-2.28a36.5,36.5,0,0,0-73,0c0,.83,0,1.64.09,2.45C12.1,119.15,12.12,119.34,12.14,119.53Z" />
                                    <circle class="cls-2" cx="94.5" cy="57.5" r="22.5" />
                                    <path class="cls-2" d="M276,0a43,43,0,0,0,43,43A43,43,0,0,0,362,0Z" />
                                </g>
                            </g>
                        </svg>

                        <div class="position-absolute top-0 start-0 p-5">
                            <button type="button" class="btn-close btn-close-white btn-close-arrow opacity-100" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>

                    <div class="profile-body">
                        <div class="avatar avatar-lg">
                            <span class="avatar-text bg-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="8.5" cy="7" r="4"></circle>
                                    <line x1="20" y1="8" x2="20" y2="14"></line>
                                    <line x1="23" y1="11" x2="17" y2="11"></line>
                                </svg>
                            </span>
                        </div>

                        <h4 class="fw-bold mb-1">Tạo nhóm giao dịch</h4>
                        <p style="font-size: 16px;">Tạo nhóm giao dịch để bắt đầu giao dịch</p>
                    </div>
                </div>

                <hr class="hr-bold modal-gx-n my-0">

                <div class="modal-py">
                    <form class="row gy-6" method="post" id="create-group-form" action="{{route('channel.store')}}">
                        @csrf
                        <div class="col-12">
                            <label for="name" class="form-label text-muted">Tên nhóm</label>
                            <input type="text" class="form-control form-control-lg" id="name" placeholder="Tên nhóm" name="name" required>
                        </div>
                        

                        <!-- <div class="col-12">
                                <label for="description" class="form-label text-muted">Mô tả</label>
                                <textarea class="form-control form-control-lg" id="description" rows="3" placeholder="Mô tả" name="description"></textarea>
                            </div> -->

                        <div class="col-12">
                            <label for="amount" class="form-label text-muted">Số tiền</label>
                            <input type="number" class="form-control form-control-lg" id="amount" placeholder="Số tiền" name="amount" required>
                        </div>
                        <!-- email -->
                        <div class="col-12">
                            <label for="email" class="form-label text-muted">Thêm người vào nhóm</label>
                            <input type="email" class="form-control form-control-lg" id="email" placeholder="Email" name="email">
                        </div>
                        <div class="col-12">
                            <label for="type" class="form-label text-muted">Loại</label>
                            <select class="form-control form-control-lg" id="type" name="type" required>
                                <option value="buy">Mua</option>
                                <option value="sell">Bán</option>
                            </select>
                        </div>
                    </form>
                </div>

                <hr class="hr-bold modal-gx-n my-0">

                <div class="modal-py">
                    <a href="#" class="btn btn-lg btn-primary w-100 d-flex align-items-center" id="create-group">
                        Tạo nhóm

                        <span class="icon ms-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </span>
                    </a>
                </div>
                <a href="#" class="btn btn-lg btn-link w-100 d-flex align-items-center" id="url_invite">

                </a>
            </div>
        </div>
    </div>
</div>