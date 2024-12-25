<div class="d-flex flex-column h-100">
    <div class="hide-scrollbar">
        <div class="container py-8">

            <!-- Title -->
            <div class="mb-8">
                <h2 class="fw-bold m-0">@@title</h2>
            </div>

            <!-- Search -->
            <div class="mb-6">
                @@include("../components/search.html")
            </div>

            <!-- Profile -->
            <div class="card border-0">
                <div class="card-body">
                    <div class="row align-items-center gx-5">
                        <div class="col-auto">
                            <div class="avatar">
                                <img src="assets/img/avatars/1.jpg" alt="#" class="avatar-img">

                                <div class="badge badge-circle bg-secondary border-outline position-absolute bottom-0 end-0">
                                    @@include("../../assets/img/icons/image.svg")
                                </div>
                                <input id="upload-profile-photo" class="d-none" type="file">
                                <label class="stretched-label mb-0" for="upload-profile-photo"></label>
                            </div>
                        </div>
                        <div class="col">
                            <h5>William Pearson</h5>
                            <p>wright@studio.com</p>
                        </div>
                        <div class="col-auto">
                            <a href="#" class="text-muted">
                                <div class="icon">
                                    @@include("../../assets/img/icons/log-out.svg")
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Profile -->

            <!-- Account -->
            <div class="mt-8">
                <div class="d-flex align-items-center mb-4 px-6">
                    <small class="text-muted me-auto">Account</small>
                </div>

                <div class="card border-0">
                    <div class="card-body py-2">
                        <!-- Accordion -->
                        <div class="accordion accordion-flush" id="accordion-profile">
                            <div class="accordion-item">
                                <div class="accordion-header" id="accordion-profile-1">
                                    <a href="#" class="accordion-button text-reset collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-profile-body-1" aria-expanded="false" aria-controls="accordion-profile-body-1">
                                        <div>
                                            <h5>Profile settings</h5>
                                            <p>Change your profile settings</p>
                                        </div>
                                    </a>
                                </div>

                                <div id="accordion-profile-body-1" class="accordion-collapse collapse" aria-labelledby="accordion-profile-1" data-parent="#accordion-profile">
                                    <div class="accordion-body">
                                        <div class="form-floating mb-6">
                                            <input type="text" class="form-control" id="profile-name" placeholder="Name">
                                            <label for="profile-name">Name</label>
                                        </div>

                                        <div class="form-floating mb-6">
                                            <input type="email" class="form-control" id="profile-email" placeholder="Email address">
                                            <label for="profile-email">Email</label>
                                        </div>

                                        <div class="form-floating mb-6">
                                            <input type="text" class="form-control" id="profile-phone" placeholder="Phone">
                                            <label for="profile-phone">Phone</label>
                                        </div>

                                        <div class="form-floating mb-6">
                                            <textarea class="form-control" placeholder="Bio" id="profile-bio" data-autosize="true" style="min-height: 120px;"></textarea>
                                            <label for="profile-bio">Bio</label>
                                        </div>

                                        <button type="button" class="btn btn-block btn-lg btn-primary w-100">Save</button>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header" id="accordion-profile-2">
                                    <a href="#" class="accordion-button text-reset collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-profile-body-2" aria-expanded="false" aria-controls="accordion-profile-body-2">
                                        <div>
                                            <h5>Connected accounts</h5>
                                            <p>Connect with your accounts</p>
                                        </div>
                                    </a>
                                </div>

                                <div id="accordion-profile-body-2" class="accordion-collapse collapse" aria-labelledby="accordion-profile-2" data-parent="#accordion-profile">
                                    <div class="accordion-body">
                                        <div class="form-floating mb-6">
                                            <input type="text" class="form-control" id="profile-twitter" placeholder="Twitter">
                                            <label for="profile-twitter">Twitter</label>
                                        </div>

                                        <div class="form-floating mb-6">
                                            <input type="text" class="form-control" id="profile-facebook" placeholder="Facebook">
                                            <label for="profile-facebook">Facebook</label>
                                        </div>

                                        <div class="form-floating mb-6">
                                            <input type="text" class="form-control" id="profile-instagram" placeholder="Instagram">
                                            <label for="profile-instagram">Instagram</label>
                                        </div>

                                        <button type="button" class="btn btn-block btn-lg btn-primary w-100">Save</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Switch -->
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h5>Appearance</h5>
                                            <p>Choose light or dark theme</p>
                                        </div>
                                        <div class="col-auto">
                                            <a class="switcher-btn text-reset" href="#!" title="Themes">
                                                <div class="switcher-icon switcher-icon-dark icon icon-lg d-none" data-theme-mode="dark">
                                                    @@include("../../assets/img/icons/moon.svg")
                                                </div>
                                                <div class="switcher-icon switcher-icon-light icon icon-lg d-none" data-theme-mode="light">
                                                    @@include("../../assets/img/icons/sun.svg")
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Account -->

            <!-- Security -->
            <div class="mt-8">
                <div class="d-flex align-items-center my-4 px-6">
                    <small class="text-muted me-auto">Security</small>
                </div>

                <div class="card border-0">
                    <div class="card-body py-2">
                        <!-- Accordion -->
                        <div class="accordion accordion-flush" id="accordion-security">
                            <div class="accordion-item">
                                <div class="accordion-header" id="accordion-security-1">
                                    <a href="#" class="accordion-button text-reset collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-security-body-1" aria-expanded="false" aria-controls="accordion-security-body-1">
                                        <div>
                                            <h5>Password</h5>
                                            <p>Change your password</p>
                                        </div>
                                    </a>
                                </div>

                                <div id="accordion-security-body-1" class="accordion-collapse collapse" aria-labelledby="accordion-security-1" data-parent="#accordion-security">
                                    <div class="accordion-body">
                                        <form action="#" autocomplete="on">
                                            <div class="form-floating mb-6">
                                                <input type="password" class="form-control" id="profile-current-password" placeholder="Current Password" autocomplete="">
                                                <label for="profile-current-password">Current Password</label>
                                            </div>

                                            <div class="form-floating mb-6">
                                                <input type="password" class="form-control" id="profile-new-password" placeholder="New password" autocomplete="">
                                                <label for="profile-new-password">New password</label>
                                            </div>

                                            <div class="form-floating mb-6">
                                                <input type="password" class="form-control" id="profile-verify-password" placeholder="Verify Password" autocomplete="">
                                                <label for="profile-verify-password">Verify Password</label>
                                            </div>
                                        </form>
                                        <button type="button" class="btn btn-block btn-lg btn-primary w-100">Save</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Switch -->
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h5>Two-step verifications</h5>
                                            <p>Enable two-step verifications</p>
                                        </div>
                                        <div class="col-auto">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="accordion-security-check-1">
                                                <label class="form-check-label" for="accordion-security-check-1"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Security -->

            <!-- Storage -->
            <div class="mt-8">
                <div class="d-flex align-items-center my-4 px-6">
                    <small class="text-muted me-auto">Storage</small>

                    <div class="flex align-items-center text-muted">
                        <a href="#" class="text-muted small">Clear storage</a>

                        <div class="icon icon-xs">
                            @@include("../../assets/img/icons/bar-chart-2.svg")
                        </div>
                    </div>
                </div>

                <div class="card border-0">
                    <div class="card-body py-2">
                        <!-- Accordion -->
                        <div class="accordion accordion-flush" id="accordion-storage">
                            <div class="accordion-item">
                                <div class="accordion-header" id="accordion-storage-1">
                                    <a href="#" class="accordion-button text-reset collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-storage-body-1" aria-expanded="false" aria-controls="accordion-storage-body-1">
                                        <div>
                                            <h5>Cache</h5>
                                            <p>Maximum cache size</p>
                                        </div>
                                    </a>
                                </div>

                                <div id="accordion-storage-body-1" class="accordion-collapse collapse" aria-labelledby="accordion-storage-1" data-parent="#accordion-storage">
                                    <div class="accordion-body">
                                        <div class="row justify-content-between mb-4">
                                            <div class="col-auto">
                                                <small>2 GB</small>
                                            </div>
                                            <div class="col-auto">
                                                <small>4 GB</small>
                                            </div>
                                            <div class="col-auto">
                                                <small>6 GB</small>
                                            </div>
                                            <div class="col-auto">
                                                <small>8 GB</small>
                                            </div>
                                        </div>
                                        <input type="range" class="form-range" min="1" max="4" step="1" id="custom-range-1">
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h5>Keep media</h5>
                                            <p>Photos, videos and other files</p>
                                        </div>
                                        <div class="col-auto">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="accordion-storage-check-1">
                                                <label class="form-check-label" for="accordion-storage-check-1"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Storage -->

            <!-- Notifications -->
            <div class="mt-8">
                <div class="d-flex align-items-center my-4 px-6">
                    <small class="text-muted me-auto">Notifications</small>
                </div>

                <!-- Accordion -->
                <div class="card border-0">
                    <div class="card-body py-2">
                        <div class="accordion accordion-flush" id="accordion-notifications">
                            <div class="accordion-item">
                                <div class="accordion-header" id="accordion-notifications-1">
                                    <a href="#" class="accordion-button text-reset collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-notifications-body-1" aria-expanded="false" aria-controls="accordion-notifications-body-1">
                                        <div>
                                            <h5>Message</h5>
                                            <p>Set custom notifications for users</p>
                                        </div>
                                    </a>
                                </div>

                                <div id="accordion-notifications-body-1" class="accordion-collapse collapse" aria-labelledby="accordion-notifications-1" data-parent="#accordion-notifications">
                                    <div class="accordion-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h5>Text</h5>
                                                <p>Show text in notifications</p>
                                            </div>

                                            <div class="col-auto">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="accordion-notifications-check-1">
                                                    <label class="form-check-label" for="accordion-notifications-check-1"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h5>Sound</h5>
                                            <p>Enable sound notifications</p>
                                        </div>
                                        <div class="col-auto">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="accordion-notifications-check-3">
                                                <label class="form-check-label" for="accordion-notifications-check-3"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h5>Browser notifications</h5>
                                            <p>Enable browser notifications</p>
                                        </div>
                                        <div class="col-auto">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="accordion-notifications-check-2" checked>
                                                <label class="form-check-label" for="accordion-notifications-check-2"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Notifications -->

            <!-- Devices -->
            <div class="mt-8">
                <div class="d-flex align-items-center my-4 px-6">
                    <small class="text-muted me-auto">Devices</small>

                    <div class="flex align-items-center text-muted">
                        <a href="#" class="text-muted small">End all sessions</a>

                        <div class="icon icon-xs">
                            @@include("../../assets/img/icons/log-out.svg")
                        </div>
                    </div>
                </div>

                <div class="card border-0">
                    <div class="card-body py-3">

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5>Windows ⋅ USA, Houston</h5>
                                        <p>Today at 2:48 pm ⋅ Browser: Chrome</p>
                                    </div>
                                    <div class="col-auto">
                                        <span class="text-primary extra-small">active</span>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5>iPhone ⋅ USA, Houston</h5>
                                        <p>Yesterday at 2:48 pm ⋅ Browser: Chrome</p>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>

            </div>
            <!-- Devices -->

        </div>
    </div>
</div>