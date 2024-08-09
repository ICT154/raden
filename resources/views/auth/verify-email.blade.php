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
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <div class="login-card login-dark">
                        <div>
                            <div>
                                <a class="logo" href="index.html">
                                </a>
                            </div>
                            <div class="login-main">
                                <form class="theme-form">
                                    <h2>Verify Your Email</h2>
                                    <div class="mt-4 mb-4"><span class="reset-password-link">If don't receive OTP? <a
                                                class="btn-link text-danger" href="#">Resend</a></span></div>
                                    <div class="form-group">
                                        <label class="col-form-label pt-0">Enter OTP</label>
                                        <div class="row">
                                            <div class="col">
                                                <input class="form-control text-center opt-text" type="text"
                                                    value="00" maxlength="2">
                                            </div>
                                            <div class="col">
                                                <input class="form-control text-center opt-text" type="text"
                                                    value="00" maxlength="2">
                                            </div>
                                            <div class="col">
                                                <input class="form-control text-center opt-text" type="text"
                                                    value="00" maxlength="2">
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="mt-4 f-w-700">Create Your Password</h6>
                                    <div class="form-group mb-0 checkbox-checked">
                                        <button class="btn btn-primary btn-block w-100 mt-3" type="submit">Done
                                        </button>
                                    </div>
                                </form>
                            </div>
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
