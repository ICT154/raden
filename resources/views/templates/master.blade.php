<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!-- PAGE TITLE HERE -->
    <title>Akademi - PHP School and Education Management Admin Dashboard Bootstrap Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--*******************
        Meta Tags
    ********************-->
    @include('templates.components.meta');
    <!--*******************
        Meta Tags End
    ********************-->
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    @include('templates.components.preloader');
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        @include('templates.components.nav-header');
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Chat box start
        ***********************************-->
        @include('templates.components.chat-box');
        <!--**********************************
            Chat box End
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        @include('templates.components.header');
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('templates.components.sidebar');
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body ">
            <!-- row -->
            <div class="container-fluid">
                @yield('content')
            </div>

        </div>
        <!--**********************************
            Content body end
        ***********************************-->




        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button endw
        ***********************************-->

        <!--**********************************
   Footer start
  ***********************************-->
        @include('templates.components.footer');
        <!--**********************************
   Footer end
  ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script>
        var enableSupportButton = '1'
    </script>
    <script>
        var asset_url = 'assets/'
    </script>

    <script src="{{ asset('/vendor/global/global.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/custom.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/dlabnav-init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/demo.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/styleSwitcher.js') }}" type="text/javascript"></script>
</body>

</html>
