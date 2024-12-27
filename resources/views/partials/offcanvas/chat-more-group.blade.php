<div class="offcanvas offcanvas-end offcanvas-aside" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvas-more-group">
    <!-- Offcanvas Header -->
    <div class="offcanvas-header py-4 py-lg-7 border-bottom">
        <a class="icon icon-lg text-muted" href="#" data-bs-dismiss="offcanvas">
            <img src="{{ asset('assets/img/icons/chevron-left.svg') }}" alt="Chevron Left">
        </a>

        <div class="visibility-xl-invisible overflow-hidden text-center">
            <h5 class="text-truncate">Bootstrap Community</h5>
            <p class="text-truncate">45 members, 9 online</p>
        </div>

        <!-- Dropdown -->
        <div class="dropdown">
            <a class="icon icon-lg text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('assets/img/icons/more-vertical.svg') }}" alt="More Vertical">
            </a>

            <ul class="dropdown-menu">
                <li>
                    <a href="#" class="dropdown-item d-flex align-items-center">
                        Edit
                        <div class="icon ms-auto">
                            <img src="{{ asset('assets/img/icons/edit-3.svg') }}" alt="Edit 3">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="dropdown-item d-flex align-items-center">
                        Mute
                        <div class="icon ms-auto">
                            <img src="{{ asset('assets/img/icons/bell.svg') }}" alt="Bell">
                        </div>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <a href="#" class="dropdown-item d-flex align-items-center text-danger">
                        Leave
                        <div class="icon ms-auto">
                            <img src="{{ asset('assets/img/icons/log-out.svg') }}" alt="Log Out">
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Header -->

    <!-- Offcanvas Body -->
    <div class="offcanvas-body hide-scrollbar">
        <!-- Avatar -->
        <div class="text-center py-10">
            <div class="row gy-6">
                <div class="col-12">
                    <div class="avatar avatar-xl mx-auto">
                        <img src="{{ asset('assets/img/avatars/bootstrap.svg') }}" alt="#" class="avatar-img">
                    </div>
                </div>

                <div class="col-12">
                    <h4>Bootstrap Community</h4>
                    <p>Bootstrap is an open source <br> toolkit for developing web with <br> HTML, CSS, and JS.</p>
                </div>
            </div>
        </div>
        <!-- Avatar -->

        <!-- Tabs -->
        <ul class="nav nav-pills nav-justified" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="pill" href="#offcanvas-group-tab-members" role="tab" aria-controls="offcanvas-group-tab-members" aria-selected="true">
                    People
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#offcanvas-group-tab-media" role="tab" aria-controls="offcanvas-group-tab-media" aria-selected="true">
                    Media
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="pill" href="#offcanvas-group-tab-files" role="tab" aria-controls="offcanvas-group-tab-files" aria-selected="false">
                    Files
                </a>
            </li>
        </ul>
        <!-- Tabs -->

        <!-- Tabs: Content -->
        <div class="tab-content py-2" role="tablist">
            <!-- Members -->
            <div class="tab-pane fade show active" id="offcanvas-group-tab-members" role="tabpanel">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="row align-items-center gx-5">
                            <!-- Avatar -->
                            <div class="col-auto">
                                <a href="#" class="avatar avatar-online">
                                    <img class="avatar-img" src="{{ asset('assets/img/avatars/1.jpg') }}" alt="">
                                </a>
                            </div>
                            <!-- Avatar -->

                            <!-- Text -->
                            <div class="col">
                                <h5><a href="#">Michael Fuller</a></h5>
                                <p>online</p>
                            </div>
                            <!-- Text -->

                            <!-- Owner -->
                            <div class="col-auto">
                                <span class="extra-small text-primary">owner</span>
                            </div>
                            <!-- Owner -->

                            <!-- Dropdown -->
                            <div class="col-auto">
                                <div class="dropdown">
                                    <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('assets/img/icons/more-vertical.svg') }}" alt="More Vertical">
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                Promote
                                                <div class="icon ms-auto">
                                                    <img src="{{ asset('assets/img/icons/trending-up.svg') }}" alt="Trending Up">
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                Restrict
                                                <div class="icon ms-auto">
                                                    <img src="{{ asset('assets/img/icons/trending-down.svg') }}" alt="Trending Down">
                                                </div>
                                            </a>
                                        </li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                Delete
                                                <div class="icon ms-auto">
                                                    <img src="{{ asset('assets/img/icons/trash-2.svg') }}" alt="Trash 2">
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Dropdown -->
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="row align-items-center gx-5">
                            <!-- Avatar -->
                            <div class="col-auto">
                                <a href="#" class="avatar avatar-online">
                                    <img class="avatar-img" src="{{ asset('assets/img/avatars/11.jpg') }}" alt="">
                                </a>
                            </div>
                            <!-- Avatar -->

                            <!-- Text -->
                            <div class="col">
                                <h5><a href="#">Mila White</a></h5>
                                <p>online</p>
                            </div>
                            <!-- Text -->

                            <!-- Dropdown -->
                            <div class="col-auto">
                                <div class="dropdown">
                                    <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('assets/img/icons/more-vertical.svg') }}" alt="More Vertical">
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                Promote
                                                <div class="icon ms-auto">
                                                    <img src="{{ asset('assets/img/icons/trending-up.svg') }}" alt="Trending Up">
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                Restrict
                                                <div class="icon ms-auto">
                                                    <img src="{{ asset('assets/img/icons/trending-down.svg') }}" alt="Trending Down">
                                                </div>
                                            </a>
                                        </li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                Delete
                                                <div class="icon ms-auto">
                                                    <img src="{{ asset('assets/img/icons/trash-2.svg') }}" alt="Trash 2">
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Dropdown -->
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="row align-items-center gx-5">
                            <!-- Avatar -->
                            <div class="col-auto">
                                <a href="#" class="avatar">
                                    <img class="avatar-img" src="{{ asset('assets/img/avatars/6.jpg') }}" alt="">
                                </a>
                            </div>
                            <!-- Avatar -->

                            <!-- Text -->
                            <div class="col">
                                <h5><a href="#">Don Knight</a></h5>
                                <p>last seen recently</p>
                            </div>
                            <!-- Text -->

                            <!-- Dropdown -->
                            <div class="col-auto">
                                <div class="dropdown">
                                    <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('assets/img/icons/more-vertical.svg') }}" alt="More Vertical">
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                Promote
                                                <div class="icon ms-auto">
                                                    <img src="{{ asset('assets/img/icons/trending-up.svg') }}" alt="Trending Up">
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                Restrict
                                                <div class="icon ms-auto">
                                                    <img src="{{ asset('assets/img/icons/trending-down.svg') }}" alt="Trending Down">
                                                </div>
                                            </a>
                                        </li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                Delete
                                                <div class="icon ms-auto">
                                                    <img src="{{ asset('assets/img/icons/trash-2.svg') }}" alt="Trash 2">
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Dropdown -->
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="row align-items-center gx-5">
                            <!-- Avatar -->
                            <div class="col-auto">
                                <a href="#" class="avatar">
                                    <img class="avatar-img" src="{{ asset('assets/img/avatars/8.jpg') }}" alt="">
                                </a>
                            </div>
                            <!-- Avatar -->

                            <!-- Text -->
                            <div class="col">
                                <h5><a href="#">Elise Dennis</a></h5>
                                <p>last seen 3 days ago</p>
                            </div>
                            <!-- Text -->

                            <!-- Dropdown -->
                            <div class="col-auto">
                                <div class="dropdown">
                                    <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('assets/img/icons/more-vertical.svg') }}" alt="More Vertical">
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                Promote
                                                <div class="icon ms-auto">
                                                    <img src="{{ asset('assets/img/icons/trending-up.svg') }}" alt="Trending Up">
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                Restrict
                                                <div class="icon ms-auto">
                                                    <img src="{{ asset('assets/img/icons/trending-down.svg') }}" alt="Trending Down">
                                                </div>
                                            </a>
                                        </li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                Delete
                                                <div class="icon ms-auto">
                                                    <img src="{{ asset('assets/img/icons/trash-2.svg') }}" alt="Trash 2">
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Dropdown -->
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="row align-items-center gx-5">
                            <!-- Avatar -->
                            <div class="col-auto">
                                <a href="#" class="avatar">
                                    <span class="avatar-text">O</span>
                                </a>
                            </div>
                            <!-- Avatar -->

                            <!-- Text -->
                            <div class="col">
                                <h5><a href="#">Ollie Chandler</a></h5>
                                <p>last seen within a week</p>
                            </div>
                            <!-- Text -->

                            <!-- Dropdown -->
                            <div class="col-auto">
                                <div class="dropdown">
                                    <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('assets/img/icons/more-vertical.svg') }}" alt="More Vertical">
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                Promote
                                                <div class="icon ms-auto">
                                                    <img src="{{ asset('assets/img/icons/trending-up.svg') }}" alt="Trending Up">
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                Restrict
                                                <div class="icon ms-auto">
                                                    <img src="{{ asset('assets/img/icons/trending-down.svg') }}" alt="Trending Down">
                                                </div>
                                            </a>
                                        </li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                Delete
                                                <div class="icon ms-auto">
                                                    <img src="{{ asset('assets/img/icons/trash-2.svg') }}" alt="Trash 2">
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Dropdown -->
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Members -->

            <!-- Media -->
            <div class="tab-pane fade" id="offcanvas-group-tab-media" role="tabpanel">
                <div class="row row-cols-3 g-3 py-6">
                    <div class="col">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-media-preview" data-theme-img-url="{{ asset('assets/img/chat/media-1.jpg') }}">
                            <img class="img-fluid rounded" src="{{ asset('assets/img/chat/1.jpg') }}" alt="">
                        </a>
                    </div>

                    <div class="col">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-media-preview" data-theme-img-url="{{ asset('assets/img/chat/media-2.jpg') }}">
                            <img class="img-fluid rounded" src="{{ asset('assets/img/chat/2.jpg') }}" alt="">
                        </a>
                    </div>

                    <div class="col">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-media-preview" data-theme-img-url="{{ asset('assets/img/chat/media-3.jpg') }}">
                            <img class="img-fluid rounded" src="{{ asset('assets/img/chat/3.jpg') }}" alt="">
                        </a>
                    </div>

                    <div class="col">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-media-preview" data-theme-img-url="{{ asset('assets/img/chat/media-1.jpg') }}">
                            <img class="img-fluid rounded" src="{{ asset('assets/img/chat/4.jpg') }}" alt="">
                        </a>
                    </div>

                    <div class="col">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-media-preview" data-theme-img-url="{{ asset('assets/img/chat/media-2.jpg') }}">
                            <img class="img-fluid rounded" src="{{ asset('assets/img/chat/5.jpg') }}" alt="">
                        </a>
                    </div>

                    <div class="col">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-media-preview" data-theme-img-url="{{ asset('assets/img/chat/media-3.jpg') }}">
                            <img class="img-fluid rounded" src="{{ asset('assets/img/chat/6.jpg') }}" alt="">
                        </a>
                    </div>

                    <div class="col">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-media-preview" data-theme-img-url="{{ asset('assets/img/chat/media-1.jpg') }}">
                            <img class="img-fluid rounded" src="{{ asset('assets/img/chat/7.jpg') }}" alt="">
                        </a>
                    </div>

                    <div class="col">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-media-preview" data-theme-img-url="{{ asset('assets/img/chat/media-2.jpg') }}">
                            <img class="img-fluid rounded" src="{{ asset('assets/img/chat/8.jpg') }}" alt="">
                        </a>
                    </div>

                    <div class="col">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-media-preview" data-theme-img-url="{{ asset('assets/img/chat/media-3.jpg') }}">
                            <img class="img-fluid rounded" src="{{ asset('assets/img/chat/9.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <!-- Media -->

            <!-- Files -->
            <div class="tab-pane fade" id="offcanvas-group-tab-files" role="tabpanel">
                <ul class="list-group list-group-flush">

                    <!-- Item -->
                    <li class="list-group-item">
                        <div class="row align-items-center gx-5">
                            <!-- Icons -->
                            <div class="col-auto">
                                <div class="avatar-group">
                                    <a href="#" class="avatar avatar-sm">
                                        <img src="{{ asset('assets/img/avatars/6.jpg') }}" class="avatar-img" alt="#">
                                    </a>

                                    <a href="#" class="avatar avatar-sm">
                                        <span class="avatar-text bg-primary">
                                            <img src="{{ asset('assets/img/icons/file-text.svg') }}" alt="File Text">
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- Icons -->

                            <!-- Text -->
                            <div class="col overflow-hidden">
                                <h5 class="text-truncate">
                                    <a href="#">E5419783-047D-4B4C-B30E-F24DD8247731.JPG</a>
                                </h5>
                                <ul class="list-inline m-0">
                                    <li class="list-inline-item">
                                        <small class="text-uppercase text-muted">79.2 KB</small>
                                    </li>

                                    <li class="list-inline-item">
                                        <small class="text-uppercase text-muted">txt</small>
                                    </li>
                                </ul>
                            </div>
                            <!-- Text -->

                            <!-- Dropdown -->
                            <div class="col-auto">
                                <div class="dropdown">
                                    <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('assets/img/icons/more-vertical.svg') }}" alt="More Vertical">
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                Download
                                                <div class="icon ms-auto">
                                                    <img src="{{ asset('assets/img/icons/download.svg') }}" alt="Download">
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                Share
                                                <div class="icon ms-auto">
                                                    <img src="{{ asset('assets/img/icons/share-2.svg') }}" alt="Share 2">
                                                </div>
                                            </a>
                                        </li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                <span class="me-auto">Delete</span>
                                                <div class="icon">
                                                    <img src="{{ asset('assets/img/icons/trash-2.svg') }}" alt="Trash 2">
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Dropdown -->
                        </div>
                    </li>

                    <!-- Item -->
                    <li class="list-group-item">
                        <div class="row align-items-center gx-5">

                            <!-- Icons-->
                            <div class="col-auto">
                                <div class="avatar-group">
                                    <a href="#" class="avatar avatar-sm">
                                        <img class="avatar-img" src="{{ asset('assets/img/avatars/6.jpg') }}" alt="#">
                                    </a>

                                    <a href="#" class="avatar avatar-sm">
                                        <span class="avatar-text bg-warning">
                                            <img src="{{ asset('assets/img/icons/film.svg') }}" alt="Film">
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- Icons -->

                            <!-- Text -->
                            <div class="col overflow-hidden">
                                <h5 class="text-truncate">
                                    <a href="#">E5419783-047D-4B4C-B30E-F24DD8247731.JPG</a>
                                </h5>
                                <ul class="list-inline m-0">
                                    <li class="list-inline-item">
                                        <small class="text-uppercase text-muted">54.2 KB</small>
                                    </li>

                                    <li class="list-inline-item">
                                        <small class="text-uppercase text-muted">mp4</small>
                                    </li>
                                </ul>
                            </div>
                            <!-- Text -->

                            <!-- Dropdown -->
                            <div class="col-auto">
                                <div class="dropdown">
                                    <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('assets/img/icons/more-vertical.svg') }}" alt="More Vertical">
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                Download
                                                <div class="icon ms-auto">
                                                    <img src="{{ asset('assets/img/icons/download.svg') }}" alt="Download">
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                Share
                                                <div class="icon ms-auto">
                                                    <img src="{{ asset('assets/img/icons/share-2.svg') }}" alt="Share 2">
                                                </div>
                                            </a>
                                        </li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                <span class="me-auto">Delete</span>
                                                <div class="icon">
                                                    <img src="{{ asset('assets/img/icons/trash-2.svg') }}" alt="Trash 2">
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Dropdown -->
                        </div>
                    </li>

                    <!-- Item -->
                    <li class="list-group-item">
                        <div class="row align-items-center gx-5">

                            <!-- Icons -->
                            <div class="col-auto">
                                <div class="avatar-group">
                                    <a href="#" class="avatar avatar-sm">
                                        <img class="avatar-img" src="{{ asset('assets/img/avatars/5.jpg') }}" alt="#">
                                    </a>

                                    <a href="#" class="avatar avatar-sm">
                                        <span class="avatar-text bg-primary">
                                            <img src="{{ asset('assets/img/icons/file-text.svg') }}" alt="File Text">
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- Icons -->

                            <!-- Text -->
                            <div class="col overflow-hidden">
                                <h5 class="text-truncate">
                                    <a href="#">E5419783-047D-4B4C-B30E-F24DD8247731.JPG</a>
                                </h5>
                                <ul class="list-inline m-0">
                                    <li class="list-inline-item">
                                        <small class="text-uppercase text-muted">64.8 KB</small>
                                    </li>

                                    <li class="list-inline-item">
                                        <small class="text-uppercase text-muted">jpg</small>
                                    </li>
                                </ul>
                            </div>
                            <!-- Text -->

                            <!-- Dropdown -->
                            <div class="col-auto">
                                <div class="dropdown">
                                    <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('assets/img/icons/more-vertical.svg') }}" alt="More Vertical">
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                Download
                                                <div class="icon ms-auto">
                                                    <img src="{{ asset('assets/img/icons/download.svg') }}" alt="Download">
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                Share
                                                <div class="icon ms-auto">
                                                    <img src="{{ asset('assets/img/icons/share-2.svg') }}" alt="Share 2">
                                                </div>
                                            </a>
                                        </li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                <span class="me-auto">Delete</span>
                                                <div class="icon">
                                                    <img src="{{ asset('assets/img/icons/trash-2.svg') }}" alt="Trash 2">
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Dropdown -->
                        </div>
                    </li>

                    <!-- Item -->
                    <li class="list-group-item">
                        <div class="row align-items-center gx-5">

                            <!-- Icons-->
                            <div class="col-auto">
                                <div class="avatar-group">
                                    <a href="#" class="avatar avatar-sm">
                                        <img class="avatar-img" src="{{ asset('assets/img/avatars/11.jpg') }}" alt="#">
                                    </a>

                                    <a href="#" class="avatar avatar-sm">
                                        <span class="avatar-text bg-warning">
                                            <img src="{{ asset('assets/img/icons/film.svg') }}" alt="Film">
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- Icons-->

                            <!-- Text -->
                            <div class="col overflow-hidden">
                                <h5 class="text-truncate">
                                    <a href="#">E5419783-047D-4B4C-B30E-F24DD8247731.JPG</a>
                                </h5>
                                <ul class="list-inline m-0">
                                    <li class="list-inline-item">
                                        <small class="text-uppercase text-muted">80.8 KB</small>
                                    </li>

                                    <li class="list-inline-item">
                                        <small class="text-uppercase text-muted">mp4</small>
                                    </li>
                                </ul>
                            </div>
                            <!-- Text -->

                            <!-- Dropdown -->
                            <div class="col-auto">
                                <div class="dropdown">
                                    <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('assets/img/icons/more-vertical.svg') }}" alt="More Vertical">
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                Download
                                                <div class="icon ms-auto">
                                                    <img src="{{ asset('assets/img/icons/download.svg') }}" alt="Download">
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                Share
                                                <div class="icon ms-auto">
                                                    <img src="{{ asset('assets/img/icons/share-2.svg') }}" alt="Share 2">
                                                </div>
                                            </a>
                                        </li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                <span class="me-auto">Delete</span>
                                                <div class="icon">
                                                    <img src="{{ asset('assets/img/icons/trash-2.svg') }}" alt="Trash 2">
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Dropdown -->
                        </div>
                    </li>

                    <!-- Item -->
                    <li class="list-group-item">
                        <div class="row align-items-center gx-5">

                            <!-- Icons-->
                            <div class="col-auto">
                                <div class="avatar-group">
                                    <a href="#" class="avatar avatar-sm">
                                        <img class="avatar-img" src="{{ asset('assets/img/avatars/3.jpg') }}" alt="#">
                                    </a>

                                    <a href="#" class="avatar avatar-sm">
                                        <span class="avatar-text bg-success">
                                            <img src="{{ asset('assets/img/icons/image.svg') }}" alt="Image">
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- Icons-->

                            <!-- Text -->
                            <div class="col overflow-hidden">
                                <h5 class="text-truncate">
                                    <a href="#">E5419783-047D-4B4C-B30E-F24DD8247731.JPG</a>
                                </h5>
                                <ul class="list-inline m-0">
                                    <li class="list-inline-item">
                                        <small class="text-uppercase text-muted">100 KB</small>
                                    </li>

                                    <li class="list-inline-item">
                                        <small class="text-uppercase text-muted">jpg</small>
                                    </li>
                                </ul>
                            </div>
                            <!-- Text -->

                            <!-- Dropdown -->
                            <div class="col-auto">
                                <div class="dropdown">
                                    <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('assets/img/icons/more-vertical.svg') }}" alt="More Vertical">
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                Download
                                                <div class="icon ms-auto">
                                                    <img src="{{ asset('assets/img/icons/download.svg') }}" alt="Download">
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                Share
                                                <div class="icon ms-auto">
                                                    <img src="{{ asset('assets/img/icons/share-2.svg') }}" alt="Share 2">
                                                </div>
                                            </a>
                                        </li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li>
                                            <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                <span class="me-auto">Delete</span>
                                                <div class="icon">
                                                    <img src="{{ asset('assets/img/icons/trash-2.svg') }}" alt="Trash 2">
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Dropdown -->
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Files -->
        </div>
        <!-- Tabs: Content -->
    </div>
    <!-- Offcanvas Body -->
</div>