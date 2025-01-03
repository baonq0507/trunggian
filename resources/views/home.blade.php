@extends('layouts.app')

@section('content')

<div class="container h-100">

    <div class="d-flex flex-column h-100 justify-content-center text-center">
        <div class="mb-6">
            <span class="icon icon-xl text-muted">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square">
                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                </svg>
            </span>
        </div>

        <p class="text-muted">Vui lòng chọn nhóm để bắt đầu cuộc trò chuyện.</p>
    </div>

</div>

@endsection