@extends('layouts.app')

@section('content')
<div class="d-flex flex-column h-100 position-relative">
    <!-- Chat: Header -->
    <div class="chat-header border-bottom py-4 py-lg-7">
        <div class="row align-items-center">

            <!-- Mobile: close -->
            <div class="col-2 d-xl-none">
                <a class="icon icon-lg text-muted" href="#" data-toggle-chat="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
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
                                    <img class="avatar-img" src="{{asset('assets/img/avatars/2.jpg')}}" alt="">
                                </div>
                            </div>

                            <div class="col overflow-hidden">
                                <h5 class="text-truncate">{{$channel->name}}</h5>
                                <p class="text-truncate d-none" id="typing-message">Đang soạn tin nhắn<span class='typing-dots'><span>.</span><span>.</span><span>.</span></span></p>
                            </div>
                        </div>
                    </div>
                    <!-- Title -->

                    <!-- Toolbar -->
                    <div class="col-xl-6 d-none d-xl-block">
                        <div class="row align-items-center justify-content-end gx-6">
                            <div class="col-auto">
                                <a href="#" class="icon icon-lg text-muted" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-more" aria-controls="offcanvas-more">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="19" cy="12" r="1"></circle>
                                        <circle cx="5" cy="12" r="1"></circle>
                                    </svg>
                                </a>
                            </div>

                            <div class="col-auto">
                                <div class="avatar-group">
                                    <a href="#" class="avatar avatar-sm" data-bs-toggle="modal" data-bs-target="#modal-user-profile">
                                        <img class="avatar-img" src="{{asset('assets/img/avatars/2.jpg')}}" alt="#">
                                    </a>

                                    <a href="#" class="avatar avatar-sm" data-bs-toggle="modal" data-bs-target="#modal-profile">
                                        <img class="avatar-img" src="{{asset('assets/img/avatars/1.jpg')}}" alt="#">
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                        <circle cx="12" cy="12" r="1"></circle>
                        <circle cx="12" cy="5" r="1"></circle>
                        <circle cx="12" cy="19" r="1"></circle>
                    </svg>
                </a>
            </div>
            <!-- Mobile: more -->

        </div>
    </div>
    <!-- Chat: Header -->

    <!-- Chat: Content -->
    <div class="chat-body hide-scrollbar flex-1 h-100">
        <div class="chat-body-inner">
            <div class="py-6 py-lg-12" id="chat-body-inner">

                <!-- Message -->
                @foreach($messages as $message)
                <div class="message {{Auth::user()->id == $message->user_id ? 'message-out' : 'message-in'}}">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-user-profile" class="avatar avatar-responsive">
                        <img class="avatar-img" src="{{asset('assets/img/avatars/2.jpg')}}" alt="">
                    </a>

                    <div class="message-inner">
                        <div class="message-body">
                            <div class="message-content">
                                <div class="message-text">
                                    <p>{{$message->message}}</p>
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
                            <span class="extra-small text-muted time-message" data-time="{{$message->created_at}}">{{$message->created_at->format('H:i')}}</span>
                        </div>
                    </div>
                </div>
                @endforeach

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
        <form class="chat-form rounded-pill bg-dark" data-emoji-form="" enctype="multipart/form-data" id="chat-form">
            <div class="row align-items-center gx-0">
                <div class="col-auto">
                    <a href="#" class="btn btn-icon btn-link text-body rounded-circle" id="dz-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-paperclip">
                            <path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path>
                        </svg>
                    </a>
                </div>

                <div class="col">
                    <div class="input-group">
                        <textarea class="form-control px-0" placeholder="Nhập tin nhắn..." rows="1" data-emoji-input="" data-autosize="true" id="message" name="message"></textarea>

                        <a href="#" class="input-group-text text-body pe-0" data-emoji-btn="">
                            <span class="icon icon-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smile">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                                    <line x1="9" y1="9" x2="9.01" y2="9"></line>
                                    <line x1="15" y1="9" x2="15.01" y2="9"></line>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="col-auto">
                    <button class="btn btn-icon btn-primary rounded-circle ms-5" id="send-message" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send">
                            <line x1="22" y1="2" x2="11" y2="13"></line>
                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                        </svg>
                    </button>
                </div>
            </div>
        </form>
        <!-- Chat: Form -->
    </div>
    <!-- Chat: Footer -->

</div>

@endsection

@section('sidebar-right')
<div class="offcanvas offcanvas-end offcanvas-aside show" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvas-more">
    <div class="offcanvas-header py-4 py-lg-7 border-bottom">
        <a class="icon icon-lg text-muted" href="#" data-bs-dismiss="offcanvas">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                <polyline points="15 18 9 12 15 6"></polyline>
            </svg>
        </a>

        <div class="visibility-xl-invisible overflow-hidden text-center">
            <h5 class="text-truncate">{{$channel->name}}</h5>
            <!-- <p class="text-truncate">last seen 5 minutes ago</p> -->
        </div>


        <div class="dropdown">
            <a class="icon icon-lg text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                    <circle cx="12" cy="12" r="1"></circle>
                    <circle cx="12" cy="5" r="1"></circle>
                    <circle cx="12" cy="19" r="1"></circle>
                </svg>
            </a>

            <ul class="dropdown-menu">
                <li>
                    <a href="#" class="dropdown-item d-flex align-items-center text-danger">
                        Báo cáo
                        <div class="icon ms-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="16 17 21 12 16 7"></polyline>
                                <line x1="21" y1="12" x2="9" y2="12"></line>
                            </svg>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

    </div>

    <div class="offcanvas-body hide-scrollbar">

        <div class="card border-0 mb-5">
            <div class="card-body">

                <div class="row gx-5">
                    <div class="col-auto">
                        <!-- <a href="#" class="avatar">
                                    <img class="avatar-img" src="{{asset('assets/img/avatars/11.jpg')}}" alt="">

                                    <div class="badge badge-circle bg-primary border-outline position-absolute bottom-0 end-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                    </div>
                                </a> -->
                    </div>

                    <div class="col">
                        <div class="d-flex align-items-center mb-2">
                            <h5 class="me-auto mb-0">
                                <a href="#">{{$channel->name}}</a>
                            </h5>
                            <!-- <span class="extra-small text-muted ms-2">08:45 PM</span> -->
                        </div>

                        <div class="d-flex">
                            <div class="me-auto">Hoàn thành giao dịch.</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                @if($channel->status == 'trading')
                <form action="{{route('update.status', $channel->slug)}}" method="post" id="status-form" data-action="{{route('update.status', $channel->slug)}}">
                    @csrf
                    <input type="hidden" name="status" id="status-input" value="completed">
                    <div class="row gx-4">
                        <div class="col">
                            <button type="submit" class="btn btn-sm btn-soft-primary w-100" id="reject-btn">Không đồng ý</button>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-sm btn-primary w-100" id="agree-btn">Tôi đồng ý</button>
                        </div>
                    </div>
                </form>
                @else
                <div class="text-center">
                    <h5>Giao dịch đã hoàn thành</h5>
                </div>
                @endif
            </div>
        </div>


        <div class="tab-content py-2" role="tablist">
            <div class="tab-pane fade show active" id="offcanvas-tab-profile" role="tabpanel">

                <ul class="list-group list-group-flush">
                    <!-- // link join -->
                    <li class="list-group-item">
                        <div class="row align-items-center gx-6">
                            <div class="col">
                                <h5>Link tham gia</h5>
                                <a href="{{route('join.channel', $channel->slug)}}">{{route('join.channel', $channel->slug)}}</a>
                            </div>

                            <div class="col-auto">
                                <div class="btn btn-sm btn-icon btn-dark copy-link" data-link="{{route('join.channel', $channel->slug)}}">
                                    <i class="fa fa-copy"></i>
                                </div>
                            </div>
                            </>
                    </li>
                    <li class="list-group-item">
                        <div class="row align-items-center gx-6">
                            <div class="col">
                                <h5>Giao dịch</h5>
                                <p>{{$channel->type == 'buy' ? 'Mua' : 'Bán'}}</p>
                            </div>

                            <!-- <div class="col-auto">
                                        <div class="btn btn-sm btn-icon btn-dark">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call">
                                                <path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                            </svg>
                                        </div>
                                    </div> -->
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="row align-items-center gx-6">
                            <div class="col">
                                <h5>Số tiền</h5>
                                <p>{{number_format($channel->amount, 0, ',', '.')}} VNĐ</p>
                            </div>

                            <!-- <div class="col-auto">
                                        <div class="btn btn-sm btn-icon btn-dark">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="2" y1="12" x2="22" y2="12"></line>
                                                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                                            </svg>
                                        </div>
                                    </div> -->
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="row align-items-center gx-6">
                            <div class="col">
                                <h5>Trạng thái</h5>
                                <p>{{$channel->status == 'trading' ? 'Đang giao dịch' : ($channel->status == 'pending' ? 'Chờ xác nhận' : 'Đã hoàn thành')}}</p>
                            </div>

                            <!-- <div class="col-auto">
                                        <div class="btn btn-sm btn-icon btn-dark">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                                <polyline points="22,6 12,13 2,6"></polyline>
                                            </svg>
                                        </div>
                                    </div> -->
                        </div>
                    </li>
                </ul>
                <ul class="list-group list-group-flush border-top mt-8">

                    <li class="list-group-item">
                        <a href="#" class="text-danger">Báo cáo</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
<!-- socket cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.8.1/socket.io.js" integrity="sha512-8BHxHDLsOHx+flIrQ0DrZcea7MkHqRU5GbTHmbdzMRnAaoCIkZ97PqZcXJkKZckMMhqfoeaJE+DNUVuyoQsO3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    const socketUrl = "{{env('SOCKET_URL')}}";
    const channelId = "{{$channel->slug}}";
    const token = "{{Cookie::get('token')}}";
    const userId = "{{Auth::user()->id}}";
    const messageRoute = "{{route('message', $channel->slug)}}";
    const socket = io(socketUrl, {
        withCredentials: true,
        transports: ['websocket', 'polling'],
        auth: {
            token: 'Bearer ' + token, // Thay thế 'token' bằng giá trị thực tế
            channelId: channelId
        },
    });
</script>
<script src="{{asset('assets/group/message.js')}}"></script>
@endpush