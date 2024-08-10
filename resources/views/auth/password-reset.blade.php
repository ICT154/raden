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
                            @if ($errors->any())
                                <div class="alert alert-light-danger" role="alert">
                                    @foreach ($errors->all() as $error)
                                        {{ $error }}
                                    @endforeach
                                </div>
                            @endif
                            <form class="theme-form" action="/password/reset" method="post">
                                @csrf
                                <form class="theme-form">
                                    <h2>Reset Your Password</h2>
                                    <div class="form-group">
                                        <label class="col-form-label" for="reset_password">New Password</label>
                                        <div class="form-input position-relative">
                                            <input class="form-control" type="password" name="reset[password]"
                                                required="" placeholder="*********" id="reset_password">
                                            <div class="show-hide"><span class="show"></span></div>
                                        </div>
                                    </div>

                                    {{-- password strength --}}
                                    <div class="form-group">
                                        <div class="progress mb-0">
                                            <div class="progress-bar-animated progress-bar-striped bg-danger"
                                                role="progressbar" style="width: 25%" aria-valuenow="25"
                                                aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                        </div>
                                        <div class="form-text text-muted">Password strength: <strong>Weak</strong></div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-form-label" for="reset_password_confirmation">Retype
                                            Password</label>
                                        <input class="form-control" type="password" name="reset[password_confirmation]"
                                            required="" placeholder="*********" id="reset_password_confirmation">
                                    </div>
                                    {{-- password match error message --}}
                                    <div class="form-text text-danger">Passwords do not match</div>

                                    {{-- token --}}
                                    <input type="hidden" name="reset[token]" id="reset_token"
                                        value="{{ $token }}">

                                    {{-- email --}}
                                    <input type="hidden" name="reset[email]" id="reset_email"
                                        value="{{ $email }}">
                                    <div class="form-group mb-0 checkbox-checked">
                                        <button class="btn btn-primary btn-block w-100 mt-3" type="submit">Done
                                        </button>
                                    </div>
                                    <p class="mt-4 mb-0">Don't have account?<a class="ms-2" href="/register">Create
                                            Account</a></p>
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
    // password strength
    var password = document.getElementById('reset_password');
    var confirm_password = document.getElementById('reset_password_confirmation');
    var progress = document.querySelector('.progress-bar-animated');
    var strength = document.querySelector('.form-text');
    var progressWidth = 0;
    var strengthText = 'Weak';
    var strengthColor = 'bg-danger';

    password.addEventListener('input', function() {
        var passwordValue = password.value;
        var passwordLength = passwordValue.length;

        if (passwordLength > 0 && passwordLength < 6) {
            progressWidth = 25;
            strengthText = 'Weak';
            strengthColor = 'bg-danger';
        } else if (passwordLength >= 6 && passwordLength < 10) {
            progressWidth = 50;
            strengthText = 'Medium';
            strengthColor = 'bg-warning';
        } else if (passwordLength >= 10 && passwordLength < 15) {
            progressWidth = 75;
            strengthText = 'Strong';
            strengthColor = 'bg-info';
        } else if (passwordLength >= 15) {
            progressWidth = 100;
            strengthText = 'Very Strong';
            strengthColor = 'bg-success';
        } else {
            progressWidth = 0;
            strengthText = 'Weak';
            strengthColor = 'bg-danger';
        }

        progress.style.width = progressWidth + '%';
        strength.innerHTML = 'Password strength: <strong>' + strengthText + '</strong>';
        progress.classList.remove('bg-danger', 'bg-warning', 'bg-info', 'bg-success');
        progress.classList.add(strengthColor);
    });

    confirm_password.addEventListener('input', function() {
        var passwordValue = password.value;
        var confirm_passwordValue = confirm_password.value;

        if (passwordValue !== confirm_passwordValue) {
            confirm_password.classList.add('is-invalid');
        } else {
            confirm_password.classList.remove('is-invalid');
        }

        // set password match error message
        var passwordMatchError = document.querySelector('.form-text.text-danger');
        if (passwordValue !== confirm_passwordValue) {
            passwordMatchError.style.display = 'block';
        } else {
            passwordMatchError.style.display = 'none';
        }
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
