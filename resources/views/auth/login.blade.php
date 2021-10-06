<!DOCTYPE html>
<html lang="en">

    <head>
        @include("/partials/head")
        <title>Login - Forum</title>
    </head>

    <body>
        <!-- container -->
        <div class="container d-flex flex-column">
            <div class="row align-items-center justify-content-center g-0
        min-vh-100">
                <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
                    <!-- Card -->
                    <div class="card smooth-shadow-md">
                        <!-- Card body -->
                        <div class="card-body p-6">
                            <div class="mb-4">
                                <a href="/"><img src="{{asset('assets')}}/images/brand/logo/logo-primary.svg"
                                        class="mb-2" alt=""></a>
                                <p class="mb-6">Please enter your user information.</p>
                            </div>
                            <!-- Form -->
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <!-- Username -->
                                <div class="mb-3">
                                    <label for="username" class="form-label">User Name</label>
                                    <input value="{{old('username')}}" type="text" id="username"
                                        class="form-control @error('username') is-invalid @enderror" name="username"
                                        placeholder="User Name">
                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <!-- Password -->
                                <div class="mb-3">
                                    <label for="password"
                                        class="form-label @error('password') is-invalid @enderror">Password</label>
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="**************">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div>
                                    <!-- Button -->
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Sign
                                            in</button>
                                    </div>

                                    <div class="d-md-flex justify-content-between mt-4">
                                        <div class="mb-2 mb-md-0">
                                            <a href="/register" class="fs-5">Create An
                                                Account </a>
                                        </div>
                                        <div>
                                            <a href="" class="text-inherit
                        fs-5">Forgot your password?</a>
                                        </div>

                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Scripts -->
        @include("/partials/scripts")
    </body>

</html>