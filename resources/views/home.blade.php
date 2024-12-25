<!DOCTYPE html>
<html lang="en">
    <!-- Head -->
    @include("partials/head/head")

    <body>
        <!-- Layout -->
        <div class="layout overflow-hidden">
            <!-- Navigation -->
            @include("partials/navigation/navigation")
            <!-- Navigation -->

            <!-- Sidebar -->
            @include("partials/sidebar/sidebar")
            <!-- Sidebar -->

            <!-- Chat -->
            <main class="main is-visible" data-dropzone-area="">
                <div class="container h-100">

                    <div class="d-flex flex-column h-100 position-relative">
                        <!-- Chat: Header -->
                        <div class="chat-header border-bottom py-4 py-lg-7">
                            <div class="row align-items-center">

                                <!-- Mobile: close -->
                                <div class="col-2 d-xl-none">
                                    <a class="icon icon-lg text-muted" href="#" data-toggle-chat="">
                                        <img src="{{asset('assets/img/icons/chevron-left.svg')}}" alt="">
                                    </a>
                                </div>
                                <!-- Mobile: close -->

                                <!-- Content -->
                                <div class="col-8 col-xl-12">
                                    <div class="row align-items-center text-center text-xl-start">
                                        <!-- Title -->
                                        <div class="col-12 col-xl-6">
                                            <div class="row align-items-center gx-5">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-online d-none d-xl-inline-block">
                                                        <img class="avatar-img" src="assets/img/avatars/2.jpg" alt="">
                                                    </div>
                                                </div>

                                                <div class="col overflow-hidden">
                                                    <h5 class="text-truncate">Ollie Chandler</h5>
                                                    <p class="text-truncate">is typing<span class='typing-dots'><span>.</span><span>.</span><span>.</span></span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Title -->

                                        <!-- Toolbar -->
                                        <div class="col-xl-6 d-none d-xl-block">
                                            <div class="row align-items-center justify-content-end gx-6">
                                                <div class="col-auto">
                                                    <a href="#" class="icon icon-lg text-muted" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-more" aria-controls="offcanvas-more">
                                                        <img src="{{asset('assets/img/icons/more-horizontal.svg')}}" alt="">
                                                    </a>
                                                </div>

                                                <div class="col-auto">
                                                    <div class="avatar-group">
                                                        <a href="#" class="avatar avatar-sm" data-bs-toggle="modal" data-bs-target="#modal-user-profile">
                                                            <img class="avatar-img" src="assets/img/avatars/2.jpg" alt="#">
                                                        </a>

                                                        <a href="#" class="avatar avatar-sm" data-bs-toggle="modal" data-bs-target="#modal-profile">
                                                            <img class="avatar-img" src="assets/img/avatars/1.jpg" alt="#">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Toolbar -->
                                    </div>
                                </div>
                                <!-- Content -->

                                <!-- Mobile: more -->
                                <div class="col-2 d-xl-none text-end">
                                    <a href="#" class="icon icon-lg text-muted" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-more" aria-controls="offcanvas-more">
                                        <img src="{{asset('assets/img/icons/more-vertical.svg')}}" alt="">
                                    </a>
                                </div>
                                <!-- Mobile: more -->

                            </div>
                        </div>
                        <!-- Chat: Header -->

                        <!-- Chat: Content -->
                        <div class="chat-body hide-scrollbar flex-1 h-100">
                            <div class="chat-body-inner">
                                <div class="py-6 py-lg-12">

                                    <!-- Message -->
                                    <div class="message">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-user-profile" class="avatar avatar-responsive">
                                            <img class="avatar-img" src="assets/img/avatars/2.jpg" alt="">
                                        </a>

                                        <div class="message-inner">
                                            <div class="message-body">
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                                                    </div>

                                                    <!-- Dropdown -->
                                                    <div class="message-action">
                                                        @include("partials/components/message-dropdown")
                                                    </div>
                                                </div>

                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <p>Send me the files please.</p>
                                                    </div>

                                                    <!-- Dropdown -->
                                                    <div class="message-action">
                                                        @include("partials/components/message-dropdown")
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="message-footer">
                                                <span class="extra-small text-muted">08:45 PM</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Message -->
                                    <div class="message message-out">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-profile" class="avatar avatar-responsive">
                                            <img class="avatar-img" src="assets/img/avatars/1.jpg" alt="">
                                        </a>

                                        <div class="message-inner">
                                            <div class="message-body">
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <blockquote class="blockquote overflow-hidden">
                                                            <h6 class="text-reset text-truncate">William Wright</h6>
                                                            <p class="small text-truncate">Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                                                        </blockquote>
                                                        <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                                                    </div>

                                                    <!-- Dropdown -->
                                                    <div class="message-action">
                                                        @include("partials/components/message-dropdown")
                                                    </div>
                                                </div>

                                                <div class="message-content">
                                                    <div class="message-text">

                                                        <div class="row align-items-center gx-4">
                                                            <div class="col-auto">
                                                                <a href="#" class="avatar avatar-sm">
                                                                    <div class="avatar-text bg-white text-primary">
                                                                        <img src="{{asset('assets/img/icons/arrow-down.svg')}}" alt="">
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col overflow-hidden">
                                                                <h6 class="text-truncate text-reset">
                                                                    <a href="#" class="text-reset">filename.json</a>
                                                                </h6>
                                                                <ul class="list-inline text-uppercase extra-small opacity-75 mb-0">
                                                                    <li class="list-inline-item">79.2 KB</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!-- Dropdown -->
                                                    <div class="message-action">
                                                        @include("partials/components/message-dropdown")
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="message-footer">
                                                <span class="extra-small text-muted">08:45 PM</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Divider -->
                                    <div class="message-divider">
                                        <small class="text-muted">Monday, Sep 16</small>
                                    </div>

                                    <!-- Message -->
                                    <div class="message">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-user-profile" class="avatar avatar-responsive">
                                            <img class="avatar-img" src="assets/img/avatars/2.jpg" alt="">
                                        </a>

                                        <div class="message-inner">
                                            <div class="message-body">
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                                                    </div>

                                                    <!-- Dropdown -->
                                                    <div class="message-action">
                                                        @include("partials/components/message-dropdown")
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="message-footer">
                                                <span class="extra-small text-muted">08:45 PM</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Message -->
                                    <div class="message message-out">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-profile" class="avatar avatar-responsive">
                                            <img class="avatar-img" src="assets/img/avatars/1.jpg" alt="">
                                        </a>

                                        <div class="message-inner">
                                            <div class="message-body">
                                                <div class="message-content">
                                                    <div class="message-gallery">
                                                        <div class="row gx-3">
                                                            <div class="col">
                                                                <img class="img-fluid rounded" src="assets/img/chat/1.jpg" data-action="zoom" alt="">
                                                            </div>
                                                            <div class="col">
                                                                <img class="img-fluid rounded" src="assets/img/chat/2.jpg" data-action="zoom" alt="">
                                                            </div>
                                                            <div class="col">
                                                                <img class="img-fluid rounded" src="assets/img/chat/3.jpg" data-action="zoom" alt="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Dropdown -->
                                                    <div class="message-action">
                                                        @include("partials/components/message-dropdown")
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="message-footer">
                                                <span class="extra-small text-muted">08:45 PM</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Message -->
                                    <div class="message">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-user-profile" class="avatar avatar-responsive">
                                            <img class="avatar-img" src="assets/img/avatars/2.jpg" alt="">
                                        </a>

                                        <div class="message-inner">
                                            <div class="message-body">
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                                                    </div>

                                                    <!-- Dropdown -->
                                                    <div class="message-action">
                                                        @include("partials/components/message-dropdown")
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="message-footer">
                                                <span class="extra-small text-muted">08:45 PM</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Divider -->
                                    <div class="message-divider">
                                        <small class="text-muted">Friday, Sep 20</small>
                                    </div>

                                    <!-- Message -->
                                    <div class="message message-out">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-profile" class="avatar avatar-responsive">
                                            <img class="avatar-img" src="assets/img/avatars/1.jpg" alt="">
                                        </a>

                                        <div class="message-inner">
                                            <div class="message-body">
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                                                    </div>

                                                    <!-- Dropdown -->
                                                    <div class="message-action">
                                                        @include("partials/components/message-dropdown")
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="message-footer">
                                                <span class="extra-small text-muted">08:45 PM</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Message -->
                                    <div class="message">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-user-profile" class="avatar avatar-responsive">
                                            <img class="avatar-img" src="assets/img/avatars/2.jpg" alt="">
                                        </a>

                                        <div class="message-inner">
                                            <div class="message-body">
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                                                    </div>

                                                    <!-- Dropdown -->
                                                    <div class="message-action">
                                                        @include("partials/components/message-dropdown")
                                                    </div>
                                                </div>
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <p>Send me the files please</p>
                                                    </div>

                                                    <!-- Dropdown -->
                                                    <div class="message-action">
                                                        @include("partials/components/message-dropdown")
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="message-footer">
                                                <span class="extra-small text-muted">08:45 PM</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Message -->
                                    <div class="message message-out">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-profile" class="avatar avatar-responsive">
                                            <img class="avatar-img" src="assets/img/avatars/1.jpg" alt="">
                                        </a>

                                        <div class="message-inner">
                                            <div class="message-body">
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                                                    </div>

                                                    <!-- Dropdown -->
                                                    <div class="message-action">
                                                        @include("partials/components/message-dropdown")
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="message-footer">
                                                <span class="extra-small text-muted">08:45 PM</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Message -->
                                    <div class="message">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-user-profile" class="avatar avatar-responsive">
                                            <img class="avatar-img" src="assets/img/avatars/2.jpg" alt="">
                                        </a>

                                        <div class="message-inner">
                                            <div class="message-body">
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                                                    </div>

                                                    <!-- Dropdown -->
                                                    <div class="message-action">
                                                        @include("partials/components/message-dropdown")
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="message-footer">
                                                <span class="extra-small text-muted">08:45 PM</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Message -->
                                    <div class="message message-out">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-profile" class="avatar avatar-responsive">
                                            <img class="avatar-img" src="assets/img/avatars/1.jpg" alt="">
                                        </a>

                                        <div class="message-inner">
                                            <div class="message-body">
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple? 😂</p>
                                                    </div>

                                                    <!-- Dropdown -->
                                                    <div class="message-action">
                                                        @include("partials/components/message-dropdown")
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="message-footer">
                                                <span class="extra-small text-muted">08:45 PM</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Message -->
                                    <div class="message">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-user-profile" class="avatar avatar-responsive">
                                            <img class="avatar-img" src="assets/img/avatars/2.jpg" alt="">
                                        </a>

                                        <div class="message-inner">
                                            <div class="message-body">
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <p>Chandler is typing<span class='typing-dots'><span>.</span><span>.</span><span>.</span></span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Chat: Content -->

                        <!-- Chat: Footer -->
                        <div class="chat-footer pb-3 pb-lg-7 position-absolute bottom-0 start-0">
                            <!-- Chat: Files -->
                            <div class="dz-preview bg-dark" id="dz-preview-row" data-horizontal-scroll="">
                            </div>
                            <!-- Chat: Files -->

                            <!-- Chat: Form -->
                            <form class="chat-form rounded-pill bg-dark" data-emoji-form="">
                                <div class="row align-items-center gx-0">
                                    <div class="col-auto">
                                        <a href="#" class="btn btn-icon btn-link text-body rounded-circle" id="dz-btn">
                                            <img src="{{asset('assets/img/icons/paperclip.svg')}}" alt="">
                                        </a>
                                    </div>

                                    <div class="col">
                                        <div class="input-group">
                                            <textarea class="form-control px-0" placeholder="Type your message..." rows="1" data-emoji-input="" data-autosize="true"></textarea>

                                            <a href="#" class="input-group-text text-body pe-0" data-emoji-btn="">
                                                <span class="icon icon-lg">
                                                    <img src="{{asset('assets/img/icons/smile.svg')}}" alt="">
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <button class="btn btn-icon btn-primary rounded-circle ms-5">
                                            <img src="{{asset('assets/img/icons/send.svg')}}" alt="">
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <!-- Chat: Form -->
                        </div>
                        <!-- Chat: Footer -->
                    </div>

                </div>
            </main>
            <!-- Chat -->

            <!-- Chat: Info -->
            @include("partials/offcanvas/chat-more")
        </div>
        <!-- Layout -->

        <!-- Modal: Invite -->
        @include("partials/modal/invite")

        <!-- Modal: Profile -->
        @include("partials/modal/profile")

        <!-- Modal: User profile -->
        @include("partials/modal/user-profile")

        <!-- Modal: Media Preview -->
        @include("partials/modal/media-preview")

        <!-- Scripts -->
        @include("partials/scripts/scripts")
    </body>
</html>