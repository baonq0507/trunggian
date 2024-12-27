<div class="d-flex flex-column h-100">
    <div class="hide-scrollbar">
        <div class="container py-8">

            <!-- Title -->
            <div class="mb-8">
                <h2 class="fw-bold m-0">@@title</h2>
            </div>

            <!-- Search -->
            <div class="mb-6">
                @include('partials.components.search')
            </div>

            <!-- Today -->
            <div class="card-list">
                <!-- Title -->
                <div class="d-flex align-items-center my-4 px-6">
                    <small class="text-muted me-auto">Today</small>

                    <a href="#" class="text-muted small">Clear all</a>
                </div>
                <!-- Title -->

                <!-- Card -->
                <div class="card border-0 mb-5">
                    <div class="card-body">

                        <div class="row gx-5">
                            <div class="col-auto">
                                <!-- Avatar -->
                                <a href="#" class="avatar">
                                    <img class="avatar-img" src="assets/img/avatars/11.jpg" alt="">

                                    <div class="badge badge-circle bg-primary border-outline position-absolute bottom-0 end-0">
                                        <img src="{{ asset('assets/img/icons/user.svg') }}" alt="User">
                                    </div>
                                </a>
                            </div>

                            <div class="col">
                                <div class="d-flex align-items-center mb-2">
                                    <h5 class="me-auto mb-0">
                                        <a href="#">Mila White</a>
                                    </h5>
                                    <span class="extra-small text-muted ms-2">08:45 PM</span>
                                </div>

                                <div class="d-flex">
                                    <div class="me-auto">Send you a friend request.</div>

                                    <div class="dropdown ms-5">
                                        <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="{{ asset('assets/img/icons/more-horizontal.svg') }}" alt="More Horizontal">
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Show less often</a></li>
                                            <li><a class="dropdown-item" href="#">Hide</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="row gx-4">
                            <div class="col">
                                <a href="#" class="btn btn-sm btn-soft-primary w-100">Hide</a>
                            </div>
                            <div class="col">
                                <a href="#" class="btn btn-sm btn-primary w-100">Confirm</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="card border-0 mb-5">
                    <div class="card-body">

                        <div class="row gx-5">
                            <div class="col-auto">
                                <!-- Avatar -->
                                <a href="#" class="avatar">
                                    <span class="avatar-text bg-warning">
                                        <img src="{{ asset('assets/img/icons/star.svg') }}" alt="Star">
                                    </span>

                                    <div class="badge badge-circle bg-warning border-outline position-absolute bottom-0 end-0">
                                        <img src="{{ asset('assets/img/icons/gift.svg') }}" alt="Gift">
                                    </div>
                                </a>
                            </div>

                            <div class="col">
                                <div class="d-flex align-items-center mb-2">
                                    <h5 class="me-auto mb-0">
                                        <a href="#">Congratulations!</a>
                                    </h5>
                                    <span class="extra-small text-muted ms-2">08:45 PM</span>
                                </div>

                                <div class="d-flex">
                                    <div class="me-auto">You win 5GB free disk space.</div>

                                    <div class="dropdown ms-5">
                                        <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="{{ asset('assets/img/icons/more-horizontal.svg') }}" alt="More Horizontal">
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Show less often</a></li>
                                            <li><a class="dropdown-item" href="#">Hide</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Card -->
            </div>
            <!-- Today -->

            <!-- Yesterday -->
            <div class="card-list mt-8">
                <!-- Title -->
                <div class="d-flex align-items-center my-4 px-6">
                    <small class="text-muted me-auto">Yesterday</small>

                    <a href="#" class="text-muted small">Clear all</a>
                </div>
                <!-- Title -->

                <!-- Card -->
                <div class="card border-0 mb-5">
                    <div class="card-body">

                        <div class="row gx-5">
                            <div class="col-auto">
                                <!-- Avatar -->
                                <div class="avatar">
                                    <span class="avatar-text bg-success">
                                        <img src="{{ asset('assets/img/icons/lock.svg') }}" alt="Lock">
                                    </span>

                                    <div class="badge badge-circle bg-success border-outline position-absolute bottom-0 end-0">
                                        <img src="{{ asset('assets/img/icons/refresh-ccw.svg') }}" alt="Refresh Ccw">
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="d-flex align-items-center mb-2">
                                    <h5 class="me-auto mb-0">Password Changed</h5>
                                    <span class="extra-small text-muted ms-2">08:45 PM</span>
                                </div>

                                <div class="d-flex">
                                    <div class="me-auto">Your password has been <br> updated successfully.</div>

                                    <div class="dropdown ms-5">
                                        <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="{{ asset('assets/img/icons/more-horizontal.svg') }}" alt="More Horizontal">
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Show less often</a></li>
                                            <li><a class="dropdown-item" href="#">Hide</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Card -->
            </div>
            <!-- Yesterday -->

            <!-- Previous -->
            <div class="card-list mt-8">

                <!-- Title -->
                <div class="d-flex align-items-center my-4 px-6">
                    <small class="text-muted me-auto">Previous</small>

                    <a href="#" class="text-muted small">Clear all</a>
                </div>
                <!-- Title -->

                <!-- Card -->
                <div class="card border-0">
                    <div class="card-body">

                        <div class="row gx-5">
                            <div class="col-auto">
                                <!-- Avatar -->
                                <a href="#" class="avatar">
                                    <img class="avatar-img" src="assets/img/avatars/7.jpg" alt="">

                                    <div class="badge badge-circle bg-primary border-outline position-absolute bottom-0 end-0">
                                        <img src="{{ asset('assets/img/icons/image.svg') }}" alt="Image">
                                    </div>
                                </a>
                            </div>

                            <div class="col">
                                <div class="d-flex align-items-center mb-2">
                                    <h5 class="me-auto mb-0">
                                        <a href="#">William Wright</a>
                                    </h5>
                                    <span class="extra-small text-muted ms-2">08:45 PM</span>
                                </div>

                                <div class="d-flex">
                                    <div class="me-auto">Updated profile picture.</div>

                                    <div class="dropdown ms-5">
                                        <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="{{ asset('assets/img/icons/more-horizontal.svg') }}" alt="More Horizontal">
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Show less often</a></li>
                                            <li><a class="dropdown-item" href="#">Hide</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="card border-0">
                    <div class="card-body">

                        <div class="row gx-5">
                            <div class="col-auto">
                                <!-- Avatar -->
                                <a href="#" class="avatar">
                                    <img class="avatar-img" src="assets/img/avatars/9.jpg" alt="">

                                    <div class="badge badge-circle bg-primary border-outline position-absolute bottom-0 end-0">
                                        <img src="{{ asset('assets/img/icons/message-circle.svg') }}" alt="Message Circle">
                                    </div>
                                </a>
                            </div>

                            <div class="col">
                                <div class="d-flex align-items-center mb-2">
                                    <h5 class="me-auto mb-0">
                                        <a href="#">Don Knight</a>
                                    </h5>
                                    <span class="extra-small text-muted ms-2">08:45 PM</span>
                                </div>

                                <div class="d-flex">
                                    <!-- <div class="me-auto">Removed you from the chat <a href="#" class="text-reset">Bootstrap Community</a>.</div> -->
                                    <div class="me-auto">Send you a private message.</div>

                                    <div class="dropdown ms-5">
                                        <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="{{ asset('assets/img/icons/more-horizontal.svg') }}" alt="More Horizontal">
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Show less often</a></li>
                                            <li><a class="dropdown-item" href="#">Hide</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="card border-0">
                    <div class="card-body">

                        <div class="row gx-5">
                            <div class="col-auto">
                                <!-- Avatar -->
                                <a href="#tab-settings" class="avatar avatar-badged" data-theme-toggle="tab">
                                    <span class="avatar-text bg-danger">
                                        <img src="{{ asset('assets/img/icons/bell.svg') }}" alt="Bell">
                                    </span>

                                    <div class="badge badge-circle bg-danger border-outline position-absolute bottom-0 end-0">
                                        <img src="{{ asset('assets/img/icons/power.svg') }}" alt="Power">
                                    </div>
                                </a>
                            </div>

                            <div class="col">
                                <div class="d-flex align-items-center mb-2">
                                    <h5 class="me-auto mb-0">
                                        <a href="#tab-settings" data-theme-toggle="tab">
                                            Notifications
                                        </a>
                                    </h5>
                                    <span class="extra-small text-muted ms-2">08:45 PM</span>
                                </div>

                                <div class="d-flex">
                                    <div class="me-auto">Please turn on notifications.</div>

                                    <div class="dropdown ms-5">
                                        <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="{{ asset('assets/img/icons/more-horizontal.svg') }}" alt="More Horizontal">
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Show less often</a></li>
                                            <li><a class="dropdown-item" href="#">Hide</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Card -->
        </div>
    </div>
</div>