<!DOCTYPE html>
<html lang="en">

<head>
    @include('templates.components.meta')
    <title>Edmin - Premium Admin Template</title>

    <!--**********************************
        Vendor CSS
    ***********************************-->
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/vendors/fontawesome/css/all.min.css') }}">
    <!-- App css-->
    <link rel="stylesheet" href="{{ asset('/css/style.min.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('/css/color-1.css') }}" media="screen">
    <!--**********************************
        Vendor CSS End
    ***********************************-->

</head>

<body>
    <!-- tap to top-->
    <div class="tap-top">
        <i class="fa-solid fa-feather"></i>
    </div>
    <!-- login page start-->
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
                            <form class="theme-form" action="index.html" method="post">
                                <h2 class="text-center">Sign in to account</h2>
                                <p class="text-center">Enter your email &amp; password to login</p>
                                <div class="form-group">
                                    <label class="col-form-label" for="login_email">Email Address</label>
                                    <input class="form-control" type="email" required=""
                                        placeholder="Test@gmail.com" id="login_email" name="login[email]"
                                        autocomplete="off" autofocus>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="login_password">Password</label>
                                    <div class="form-input position-relative">
                                        <input class="form-control" type="password" name="login[password]"
                                            required="" placeholder="*********" id="login_password"
                                            autocomplete="off">
                                        <div class="show-hide"><span class="show"> </span></div>
                                    </div>
                                </div>
                                <div class="form-group mb-0 checkbox-checked">
                                    <div class="form-check checkbox-solid-info">
                                        <input class="form-check-input" id="solid6" type="checkbox">
                                        <label class="form-check-label" for="solid6">Remember password</label>
                                    </div><a class="link-two" href="forget-password.html">Forgot password?</a>
                                    <div class="text-end mt-3"><a class="btn btn-primary btn-block w-100 text-white"
                                            href="index.html">Sign in </a></div>
                                </div>
                                <div class="login-social-title">
                                    <h6>Or Sign in with </h6>
                                </div>
                                <div class="form-group">
                                    <ul class="login-social">
                                        <li>
                                            <a href="https://www.google.com" target="_blank" aria-label="Google Login">
                                                <i class="fa-brands fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2"
                                        href="sign-up.html">Create Account</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- jquery-->
<script src="{{ asset('js/vendors/jquery/dist/jquery.min.js') }}"></script>

<!-- password js-->
<script src="{{ asset('/js/password.min.js') }}"></script>
<script>
    var watermark = `
    ██████╗ ██╗  ██╗██████╗ ██████╗ ███╗   ██╗     ██████╗  ██████╗ ███████╗██╗  ██╗██╗     ██╗     
    ██╔══██╗██║  ██║██╔══██╗╚════██╗████╗  ██║    ██╔════╝ ██╔═████╗╚══███╔╝██║  ██║██║     ██║     
    ██████╔╝███████║██║  ██║ █████╔╝██╔██╗ ██║    ██║  ███╗██║██╔██║  ███╔╝ ███████║██║     ██║     
    ██╔══██╗╚════██║██║  ██║ ╚═══██╗██║╚██╗██║    ██║   ██║████╔╝██║ ███╔╝  ╚════██║██║     ██║     
    ██║  ██║     ██║██████╔╝██████╔╝██║ ╚████║    ╚██████╔╝╚██████╔╝███████╗     ██║███████╗███████╗
    ╚═╝  ╚═╝     ╚═╝╚═════╝ ╚═════╝ ╚═╝  ╚═══╝     ╚═════╝  ╚═════╝ ╚══════╝     ╚═╝╚══════╝╚══════╝
                                                                                                    
    `;

    console.log(watermark);
</script>

</html>
