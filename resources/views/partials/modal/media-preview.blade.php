<div class="modal fade" id="modal-media-preview" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-fullscreen-xl-down">
        <div class="modal-content">

            <!-- Modal: Header -->
            <div class="modal-header">
                <button type="button" class="btn-close btn-close-arrow" data-bs-dismiss="modal" aria-label="Close"></button>

                <div>
                    <!-- Dropdown -->
                    <div class="dropdown">
                        <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('assets/img/icons/more-vertical.svg') }}" alt="More Vertical">
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    Download
                                    <div class="icon ms-auto">
                                        <img src="{{ asset('assets/img/icons/download-cloud.svg') }}" alt="Download Cloud">
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
                    <!-- Dropdown -->
                </div>
            </div>
            <!-- Modal: Header -->

            <!-- Modal: Body -->
            <div  class="modal-body p-0">
                <div class="d-flex align-items-center justify-content-center h-100">
                    <img class="img-fluid modal-preview-url" src="#" alt="#">
                </div>
            </div>
            <!-- Modal: Body -->

            <!-- Modal: Footer -->
            <div class="modal-footer">
                <div class="w-100 text-center">
                    <h6><a href="#">Marshall Wallaker</a></h6>
                    <p class="small">Today at 14:43</p>
                </div>
            </div>
            <!-- Modal: Footer -->
        </div>
    </div>
</div>