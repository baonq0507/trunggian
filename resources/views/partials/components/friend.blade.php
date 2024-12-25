<!-- Card -->
<div class="card border-0">
    <div class="card-body">

        <div class="row align-items-center gx-5">
            <div class="col-auto">
                <a href="#" class="avatar @@online">
                    @if (context.avatar != "") {
                    <img class="avatar-img" src="@@avatar" alt="">
                    }
                    @if (context.abbr != "") {
                    <span class="avatar-text">@@abbr</span>
                    }
                </a>
            </div>

            <div class="col">
                <h5><a href="#">@@name</a></h5>
                <p>@@status</p>
            </div>

            <div class="col-auto">
                <!-- Dropdown -->
                <div class="dropdown">
                    <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{asset('assets/img/icons/more-vertical.svg')}}" alt="">
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">New message</a></li>
                        <li><a class="dropdown-item" href="#">Edit contact</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item text-danger" href="#">Block user</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- Card -->