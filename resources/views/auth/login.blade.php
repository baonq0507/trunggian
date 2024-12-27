@include("partials/head/head")

<body class="bg-light">

    <div class="container">
        <div class="row align-items-center justify-content-center min-vh-100 gx-0">

            <div class="col-12 col-md-5 col-lg-4">
                <form action="{{route("login") }}" method="post">
                    @csrf
                    <div class="card card-shadow border-0">
                        @if(session('success'))
                        <div class="alert alert-success m-5">{{ session('success') }}</div>
                        @endif
                        @if(session('error'))
                        <div class="alert alert-danger m-5">{{ session('error') }}</div>
                        @endif
                        <div class="card-body">
                            <div class="row g-6">
                                <div class="col-12">
                                    <div class="text-center">
                                        <h3 class="fw-bold mb-2">Sign In</h3>
                                        <p>Login to your account</p>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="signin-email" placeholder="Email" name="email" value="{{old('email')}}">
                                        <label for="signin-email">Email</label>
                                    </div>
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="signin-password" placeholder="Password" name="password">
                                        <label for="signin-password">Password</label>
                                    </div>
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-block btn-lg btn-primary w-100" type="submit">Sign In</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <!-- Text -->
                <div class="text-center mt-8">
                    <p>Don't have an account yet? <a href="{{route("register")}}">Sign up</a></p>
                    <p><a href="./password-reset.html">Forgot Password?</a></p>
                </div>
            </div>
        </div> <!-- / .row -->
    </div>

    <!-- Scripts -->
    @include("partials/scripts/scripts")
</body>

</html>