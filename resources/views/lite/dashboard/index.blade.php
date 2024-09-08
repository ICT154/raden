@extends('lite.templates.master')

@section('lite-content')
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card login-dark">
                    <div>
                        <div>
                            <a class="logo" aria-label="vito" href="index.html">
                                {{-- <img class="img-fluid for-light" src="../assets/images/logo/logo.png" alt="looginpage">
                                <img class="img-fluid for-dark m-auto" src="../assets/images/logo/dark-logo.png"
                                    alt="logo"> --}}
                            </a>
                        </div>
                        <div class="login-main">
                            @if ($errors->any())
                                <div class="alert alert-light-danger" role="alert">
                                    @foreach ($errors->all() as $error)
                                        {{ $error }}
                                    @endforeach
                                </div>
                            @elseif (session('status'))
                                <div class="alert alert-light-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form class="theme-form" action="/auth" method="post">
                                @csrf
                                <h2 class="text-center">Sign in to account</h2>
                                <p class="text-center">Enter your email &amp; password to login</p>
                                <div class="form-group">
                                    <label class="col-form-label" for="login_email">Email Address</label>
                                    <input class="form-control" type="email" required="" placeholder="Test@gmail.com"
                                        id="login_email" name="login[email]" autocomplete="off" autofocus>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="login_password">Password</label>
                                    <div class="form-input position-relative">
                                        <input class="form-control" type="password" name="login[password]" required=""
                                            placeholder="*********" id="login_password" autocomplete="off">
                                        <div class="show-hide"><span class="show"> </span></div>
                                    </div>
                                </div>
                                <div class="form-group mb-0 checkbox-checked">
                                    <div class="form-check checkbox-solid-info">
                                        <input class="form-check-input" id="solid6" type="checkbox"
                                            name="login[remember]">
                                        <label class="form-check-label" for="solid6">Remember password</label>
                                    </div><a class="link-two" href="/password/forgot">Forgot password?</a>
                                    <div class="text-end mt-3">
                                        <button class="btn btn-primary btn-block w-100 text-white" type="submit">Sign
                                            in
                                        </button>
                                    </div>
                                </div>
                                <div class="login-social-title">
                                    <h6>Or Sign in with </h6>
                                </div>
                                <div class="form-group">
                                    <ul class="login-social">
                                        <li>
                                            <a href="/auth/google/redirect" target="_blank" aria-label="Google Login">
                                                <i class="fa-brands fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2"
                                        href="/register">Create Account</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
