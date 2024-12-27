<div class="d-flex flex-column h-100">
    <div class="hide-scrollbar">
        <div class="container py-8">

            <!-- Title -->
            <div class="mb-8">
                <h2 class="fw-bold m-0">@@title1</h2>
            </div>

            <!-- Search -->
            <div class="mb-6">
                @include('partials.components.search')

                <!-- Invite button -->
                <div class="mt-5 mb-6">
                    <a href="#" class="btn btn-lg btn-primary w-100 d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#modal-invite">
                        Tạo nhóm giao dịch

                        <span class="icon ms-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="8.5" cy="7" r="4"></circle>
                                <line x1="20" y1="8" x2="20" y2="14"></line>
                                <line x1="23" y1="11" x2="17" y2="11"></line>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>

            <!-- List -->
            <div class="card-list">
                <div class="my-5">
                    <small class="text-uppercase text-muted">B</small>
                </div>

                @include('partials.components.member', ['id' => '1', 'name' => 'Bill Marrow', 'abbr' => '', 'avatar' => 'assets/img/avatars/6.jpg', 'status' => 'last seen 3 days ago', 'online' => ''])

                <div class="my-5">
                    <small class="text-uppercase text-muted">D</small>
                </div>

                @include('partials.components.member', ['id' => '2', 'name' => 'Damian Binder', 'abbr' => '', 'avatar' => 'assets/img/avatars/5.jpg', 'status' => 'last seen within a week', 'online' => ''])

                @include('partials.components.member', ['id' => '3', 'name' => 'Don Knight', 'abbr' => 'D', 'avatar' => '', 'status' => 'online', 'online' => 'avatar-online'])

                <div class="my-5">
                    <small class="text-uppercase text-muted">E</small>
                </div>

                @include('partials.components.member', ['id' => '4', 'name' => 'Elise Dennis', 'abbr' => '', 'avatar' => 'assets/img/avatars/8.jpg', 'status' => 'online', 'online' => 'avatar-online'])

                <div class="my-5">
                    <small class="text-uppercase text-muted">M</small>
                </div>

                @include('partials.components.member', ['id' => '6', 'name' => 'Marshall Wallaker', 'abbr' => 'M', 'avatar' => '', 'status' => 'last seen within a month', 'online' => ''])

                @include('partials.components.member', ['id' => '5', 'name' => 'Mila White', 'abbr' => '', 'avatar' => 'assets/img/avatars/11.jpg', 'status' => 'last seen a long time ago', 'online' => ''])

                <div class="my-5">
                    <small class="text-uppercase text-muted">O</small>
                </div>

                @include('partials.components.member', ['id' => '7', 'name' => 'Ollie Chandler', 'abbr' => 'O', 'avatar' => '', 'status' => 'online', 'online' => 'avatar-online'])

                <div class="my-5">
                    <small class="text-uppercase text-muted">W</small>
                </div>

                @include('partials.components.member', ['id' => '8', 'name' => 'Warren White', 'abbr' => '', 'avatar' => 'assets/img/avatars/4.jpg', 'status' => 'last seen recently', 'online' => ''])

                @include('partials.components.member', ['id' => '9', 'name' => 'William Wright', 'abbr' => '', 'avatar' => 'assets/img/avatars/7.jpg', 'status' => 'online', 'online' => 'avatar-online'])

                @include('partials.components.member', ['id' => '10', 'name' => 'Winton Wilkinson', 'abbr' => 'W', 'avatar' => '', 'status' => 'online', 'online' => 'avatar-online'])
            </div>

        </div>
    </div>
</div>