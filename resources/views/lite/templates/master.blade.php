<!DOCTYPE html>
<html lang="en">

<head>
    @include('templates.components.meta')
    <title>Edmin - Premium Admin Template</title>

    <!--**********************************
        Vendor CSS
    ***********************************-->
    @include('templates.components.vendor-css')
    <!--**********************************
        Vendor CSS End
    ***********************************-->

    <!--**********************************
        Custom CSS
    ***********************************-->
    @include('templates.components.custom-css')
    <!--**********************************
        Custom CSS End
    ***********************************-->

    @yield('styles')

</head>

<body>
    <!-- Container-fluid starts-->
    @yield('lite-content')
    <!-- Container-fluid ends-->
</body>

@include('templates.components.vendor-js')
@yield('scripts')

</html>
