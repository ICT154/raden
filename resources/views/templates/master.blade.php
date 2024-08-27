<!DOCTYPE html>
<html lang="en">

<head>
    <!--*******************
        Meta Tags
    ********************-->
    @include('templates.components.meta')
    <!--*******************
        Meta Tags End
    ********************-->
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

    <!--**********************************
        Preloader start
    ***********************************-->
    @include('templates.components.preloader')
    <!--**********************************
        Preloader end
    ***********************************-->

    <main class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page header start -->
        <header class="page-header row">
            <div class="logo-wrapper d-flex align-items-center col-auto"><a href="#!"><img class="for-light"
                        src="{{ asset('images/logo/logo.png') }}" alt="logo"><img class="for-dark"
                        src="{{ asset('images/logo/dark-logo.png') }}" alt="logo"></a><a class="close-btn"
                    href="javascript:void(0)">
                    <div class="toggle-sidebar">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                </a>
            </div>
            <div class="page-main-header col">
                <div class="header-left d-lg-block d-none">
                    <form class="search-form mb-0">
                        <div class="input-group"><span class="input-group-text pe-0">
                                <i class="fa-brands fa-searchengin"></i></span>
                            <input class="form-control" type="text" placeholder="Search anything..."
                                name="search_navbar_anything" id="search_navbar_anything">
                        </div>
                    </form>
                </div>
                <div class="nav-right">
                    <ul class="header-right">

                        <!--**********************************
                            Dark Mode Button
                        ***********************************-->
                        @include('templates.components.dark-mode')
                        <!--**********************************
                            Dark Mode Button end
                        ***********************************-->

                        <!--**********************************
                            Notification menu
                        ***********************************-->
                        @include('templates.components.notification-menu')
                        <!--**********************************
                            Notification menu end
                        ***********************************-->

                        <!--**********************************
                            Bookmark menu
                        ***********************************-->
                        @include('templates.components.bookmark-menu')
                        <!--**********************************
                            Bookmark menu end
                        ***********************************-->

                        <!-- Cart menu-->
                        @include('templates.components.cart-menu')
                        <!-- Chat menu-->
                        @include('templates.components.chat-menu')
                        <li class="profile-dropdown custom-dropdown">
                            <div class="d-flex align-items-center"><img src="#!" alt="">
                                <div class="flex-grow-1">
                                    <h5>Wade Warren</h5><span>UI Designer</span>
                                </div>
                            </div>
                            <div class="custom-menu overflow-hidden">
                                <ul>
                                    <li class="d-flex">
                                        <i class="fa-solid fa-droplet"></i><a class="ms-2"
                                            href="user-profile.html">Account</a>
                                    </li>
                                    <li class="d-flex">
                                        <i class="fa-solid fa-droplet"></i><a class="ms-2"
                                            href="letter-box.html">Inbox</a>
                                    </li>
                                    <li class="d-flex">
                                        <i class="fa-solid fa-droplet"></i><a class="ms-2" href="to-do.html">Task</a>
                                    </li>
                                    <li class="d-flex">
                                        <i class="fa-solid fa-droplet"></i><a class="ms-2" href="login.html">Log
                                            Out</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- Page header end-->
        <div class="page-body-wrapper">
            <!-- Page sidebar start-->
            <div class="overlay"></div>
            <aside class="page-sidebar" data-sidebar-layout="stroke-svg">
                <div class="left-arrow" id="left-arrow">
                    <i class="fa-solid fa-feather"></i>
                </div>
                @include('templates.components.menu')
                <div class="right-arrow" id="right-arrow">
                    <i class="fa-solid fa-feather"></i>
                </div>
            </aside>
            <!-- Page sidebar end-->
            <div class="page-body">
                @include('templates.components.breadcrumb')
                <!-- Container-fluid starts-->
                @yield('content')
                <!-- Container-fluid ends-->
            </div>

            {{-- FOOTER START --}}
            @include('templates.components.footer')
            <!-- Footer end-->

        </div>
    </main>
    @include('templates.components.vendor-js')
    @yield('scripts')
</body>

</html>
