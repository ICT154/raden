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
            <div class="logo-wrapper d-flex align-items-center col-auto"><a href="index.html"><img class="for-light"
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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h4>Sample Card</h4>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-center gap-3 pills-blogger">
                                        <div class="blog-wrapper"> <img class="blog-img img-100" src="#!"
                                                alt="head-phone"></div>
                                        <div class="blog-content">
                                            <p> <em class="font-primary fw-bold">Smart headphones</em> — also called
                                                smart earbuds or hearable — are high-tech in-ear devices that do more
                                                than transmit audio. These headphones are usually wireless, and they can
                                                sync up with your phone, tablet, computer or other Bluetooth-enabled
                                                device. The main appeal of hearables is convenience, as they allow you
                                                to complete common tasks without directly accessing your phone or
                                                computer. Smart wireless headphones sync up to other devices using
                                                Bluetooth technology, and many of their features rely on data from your
                                                smartphone or computer.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid ends-->
            </div>

            {{-- FOOTER START --}}
            @include('templates.components.footer')
            <!-- Footer end-->

        </div>
    </main>
    @include('templates.components.vendor-js')
</body>

<!-- Mirrored from admin.pixelstrap.net/edmin/template/sample-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Jul 2024 12:33:05 GMT -->

</html>
