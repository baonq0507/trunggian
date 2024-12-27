<!DOCTYPE html>
<html lang="en">
<!-- Head -->
@include("partials/head/head")

<body class="bg-light">

    <div class="container">
        <div class="row align-items-center justify-content-center min-vh-100 gx-0">

            <div class="col-12 col-md-5 col-lg-4">
                <form action="{{route("register") }}" method="post">
                    @csrf

                    <div class="card card-shadow border-0">
                        @if(session('success'))
                            <div class="alert alert-success m-5">{{ session('success') }}</div>
                        @endif
                        <div class="card-body">
                            <div class="row g-6">
                                <div class="col-12">
                                    <div class="text-center">
                                        <h3 class="fw-bold mb-2">Sign Up</h3>
                                        <p>Follow the easy steps</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="signup-name" placeholder="Name" name="name" value="{{old('name')}}">
                                        <label for="signup-name">Tên</label>
                                    </div>
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="signup-email" placeholder="Email" name="email" value="{{old('email')}}">
                                        <label for="signup-email">Email</label>
                                    </div>
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="signup-password" placeholder="Password" name="password" value="{{old('password')}}">
                                        <label for="signup-password">Mật khẩu</label>
                                    </div>
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-block btn-lg btn-primary w-100" type="submit">Đăng ký</button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Text -->
                    <div class="text-center mt-8">
                        <p>Already have an account? <a href="./signin.html">Sign in</a></p>
                    </div>
                </form>
            </div>
        </div> <!-- / .row -->
    </div>

    <!-- Scripts -->
    @include("partials/scripts/scripts")
</body>

</html>