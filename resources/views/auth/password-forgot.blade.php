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
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
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
                                <a class="logo" href="index.html" aria-label="Logo">
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
                                <form class="theme-form" action="/password/forgot" method="post">
                                    @csrf
                                    <h2>Verify Your Email</h2>
                                    <div class="form-group">
                                        <label class="col-form-label" for="forgot_email">Enter Your Email</label>
                                        <div class="row">
                                            <div class="col-12 col-sm-12">
                                                <input class="form-control mb-1" type="email" placeholder="Enter email" id="forgot_email" name="forgot[email]">
                                            </div>
                                            <div class="col-12">
                                                <div class="text-end">
                                                    <button class="btn btn-primary btn-block m-t-10" type="submit">Send</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-4"><span class="reset-password-link">If don't receive Reset Link ? <a class="btn-link text-danger" href="javascript:void(0);">Resend</a></span>
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
    // resend link
    $('.reset-password-link a').on('click', function() {
        // trigger the button
        $(this).closest('.login-card').find('button[type="submit"]').trigger('click');
        $(this).text('Link Sent');
    });
</script>
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