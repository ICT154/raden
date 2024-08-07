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
                                <svg class="search-bg svg-color">
                                    <use href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#Search">
                                    </use>
                                </svg></span>
                            <input class="form-control" type="text" placeholder="Search anything...">
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
                        <li class="custom-dropdown"><a href="javascript:void(0)">
                                <svg class="svg-color">
                                    <use href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#Bag">
                                    </use>
                                </svg></a>
                            <div class="custom-menu cart-dropdown py-0 overflow-hidden">
                                <h5 class="title bg-primary-light">Cart<span>Total : <span
                                            class="font-primary">4350.9</span></span></h5>
                                <ul>
                                    <li class="cartbox d-flex bg-light-primary">
                                        <div class="flex-shrink-0 border-primary"><img
                                                src="../assets/images/dashboard2/product/1.png" alt=""></div>
                                        <div class="touchpin-details"><a href="cart.html">
                                                <h5>Apple Computers</h5>
                                            </a><span>$2600.00</span>
                                            <div class="touchspin-wrapper">
                                                <button class="decrement-touchspin btn-touchspin">
                                                    <svg class="svg-color">
                                                        <use
                                                            href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#minus">
                                                        </use>
                                                    </svg>
                                                </button>
                                                <input class="form-control input-touchspin bg-light-primary"
                                                    type="number" value="5">
                                                <button class="increment-touchspin btn-touchspin">
                                                    <svg class="svg-color">
                                                        <use
                                                            href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#plus">
                                                        </use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <button class="btn btn-close"></button>
                                        </div>
                                    </li>
                                    <li class="cartbox d-flex bg-light-secondary">
                                        <div class="flex-shrink-0 border-secondary"><img
                                                src="../assets/images/dashboard2/product/2.png" alt=""></div>
                                        <div class="touchpin-details"><a href="cart.html">
                                                <h5>Microwave</h5>
                                            </a><span>$1450.45</span>
                                            <div class="touchspin-wrapper">
                                                <button class="decrement-touchspin btn-touchspin">
                                                    <svg class="svg-color">
                                                        <use
                                                            href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#minus">
                                                        </use>
                                                    </svg>
                                                </button>
                                                <input class="form-control input-touchspin bg-light-secondary"
                                                    type="number" value="5">
                                                <button class="increment-touchspin btn-touchspin">
                                                    <svg class="svg-color">
                                                        <use
                                                            href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#plus">
                                                        </use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <button class="btn btn-close"></button>
                                        </div>
                                    </li>
                                    <li class="cartbox d-flex bg-light-tertiary">
                                        <div class="flex-shrink-0 border-tertiary"><img
                                                src="../assets/images/dashboard2/product/3.png" alt=""></div>
                                        <div class="touchpin-details"><a href="cart.html">
                                                <h5>Mackup Kit</h5>
                                            </a><span>$300.45</span>
                                            <div class="touchspin-wrapper">
                                                <button class="decrement-touchspin btn-touchspin">
                                                    <svg class="svg-color">
                                                        <use
                                                            href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#minus">
                                                        </use>
                                                    </svg>
                                                </button>
                                                <input class="form-control input-touchspin bg-light-tertiary"
                                                    type="number" value="5">
                                                <button class="increment-touchspin btn-touchspin">
                                                    <svg class="svg-color">
                                                        <use
                                                            href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#plus">
                                                        </use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <button class="btn btn-close"></button>
                                        </div>
                                    </li>
                                    <li class="mt-3 p-0 d-flex justify-content-center">
                                        <div><a class="btn btn-secondary" href="checkout.html">Checkout</a></div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Bookmark menu-->
                        <li class="custom-dropdown"><a href="javascript:void(0)">
                                <svg class="svg-color">
                                    <use href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#Message">
                                    </use>
                                </svg></a><span class="badge rounded-pill badge-tertiary">3</span>
                            <div class="custom-menu message-dropdown py-0 overflow-hidden">
                                <h5 class="title bg-primary-light">Messages</h5>
                                <ul>
                                    <li class="d-flex b-t-primary">
                                        <div class="d-block"><a href="letter-box.html">
                                                <h5>Design meeting</h5>
                                            </a>
                                            <h6>
                                                <svg class="feather me-1">
                                                    <use
                                                        href="https://admin.pixelstrap.net/edmin/assets/svg/feather-icons/dist/feather-sprite.svg#clock">
                                                    </use>
                                                </svg><span>Just Now</span>
                                            </h6>
                                        </div>
                                        <div class="badge badge-light-danger">
                                            <svg class="feather me-1">
                                                <use
                                                    href="https://admin.pixelstrap.net/edmin/assets/svg/feather-icons/dist/feather-sprite.svg#clock">
                                                </use>
                                            </svg><span>Open</span>
                                        </div>
                                    </li>
                                    <li class="d-flex b-t-secondary">
                                        <div class="d-block"><a href="letter-box.html">
                                                <h5>Weekly scurm Meeting</h5>
                                            </a>
                                            <h6>
                                                <svg class="feather me-1">
                                                    <use
                                                        href="https://admin.pixelstrap.net/edmin/assets/svg/feather-icons/dist/feather-sprite.svg#clock">
                                                    </use>
                                                </svg><span>1 Hour Ago</span>
                                            </h6>
                                        </div>
                                        <div class="badge badge-light-danger">
                                            <svg class="feather me-1">
                                                <use
                                                    href="https://admin.pixelstrap.net/edmin/assets/svg/feather-icons/dist/feather-sprite.svg#clock">
                                                </use>
                                            </svg><span>Open</span>
                                        </div>
                                    </li>
                                    <li class="d-flex b-t-tertiary">
                                        <div class="d-block"><a href="letter-box.html">
                                                <h5>Check your login page</h5>
                                            </a>
                                            <h6>
                                                <svg class="feather me-1">
                                                    <use
                                                        href="https://admin.pixelstrap.net/edmin/assets/svg/feather-icons/dist/feather-sprite.svg#clock">
                                                    </use>
                                                </svg><span>2 Hour Ago</span>
                                            </h6>
                                        </div>
                                        <div class="badge badge-light-success">
                                            <svg class="feather me-1">
                                                <use
                                                    href="https://admin.pixelstrap.net/edmin/assets/svg/feather-icons/dist/feather-sprite.svg#clock">
                                                </use>
                                            </svg><span>Closed</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="profile-dropdown custom-dropdown">
                            <div class="d-flex align-items-center"><img src="../assets/images/profile.png"
                                    alt="">
                                <div class="flex-grow-1">
                                    <h5>Wade Warren</h5><span>UI Designer</span>
                                </div>
                            </div>
                            <div class="custom-menu overflow-hidden">
                                <ul>
                                    <li class="d-flex">
                                        <svg class="svg-color">
                                            <use
                                                href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#Profile">
                                            </use>
                                        </svg><a class="ms-2" href="user-profile.html">Account</a>
                                    </li>
                                    <li class="d-flex">
                                        <svg class="svg-color">
                                            <use
                                                href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#Message">
                                            </use>
                                        </svg><a class="ms-2" href="letter-box.html">Inbox</a>
                                    </li>
                                    <li class="d-flex">
                                        <svg class="svg-color">
                                            <use
                                                href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#Document">
                                            </use>
                                        </svg><a class="ms-2" href="to-do.html">Task</a>
                                    </li>
                                    <li class="d-flex">
                                        <svg class="svg-color">
                                            <use
                                                href="https://admin.pixelstrap.net/edmin/assets/svg/iconly-sprite.svg#Login">
                                            </use>
                                        </svg><a class="ms-2" href="login.html">Log Out</a>
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
                    <svg class="feather">
                        <use
                            href="https://admin.pixelstrap.net/edmin/assets/svg/feather-icons/dist/feather-sprite.svg#arrow-left">
                        </use>
                    </svg>
                </div>
                @include('templates.components.menu')
                <div class="right-arrow" id="right-arrow">
                    <svg class="feather">
                        <use
                            href="https://admin.pixelstrap.net/edmin/assets/svg/feather-icons/dist/feather-sprite.svg#arrow-right">
                        </use>
                    </svg>
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
                                        <div class="blog-wrapper"> <img class="blog-img img-100"
                                                src="../assets/images/dashboard2/product/headphones.png"
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
