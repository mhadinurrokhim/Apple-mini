<!DOCTYPE html>
<html lang="en-US" dir="ltr">


<!-- Mirrored from prium.github.io/phoenix/v1.13.0/apps/e-commerce/landing/homepage.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 12:13:49 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>iVibe</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/storage/logo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/storage/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/storage/logo.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/storage/logo.png') }}">
    <link rel="manifest" href="../../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../../vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="../../../vendors/simplebar/simplebar.min.js"></script>
    <script src="../../../assets/js/config.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="../../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../../../../unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="../../../assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="../../../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="../../../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="../../../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <script>
        var phoenixIsRTL = window.config.config.phoenixIsRTL;
        if (phoenixIsRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
    <style>
        /* Optional: Jika ingin memberi jarak antara tombol dan kotak pencarian */
        .search-box {
            margin-right: 10px;
            /* Sesuaikan jarak sesuai kebutuhan */
        }
    </style>
    <link href="../../../vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
</head>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0">
            <div class="container-small">
                <div class="ecommerce-topbar">
                    <nav class="navbar navbar-expand-lg navbar-light px-0">
                        <div class="row gx-0 gy-2 w-100 flex-between-center">
                            <div class="col-auto mt-5">
                                <a class="text-decoration-none" href="../../../index.html">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/storage/logo.png') }}" alt="phoenix"
                                            width="27" />
                                        <p class="logo-text ms-2">iVibe</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 mx-auto col-md-6 d-flex justify-content-between">
                                <div class="d-flex align-items-center w-100">
                                    <!-- Kotak Pencarian -->
                                    <div class="search-box ecommerce-search-box text-center flex-grow-1">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3" style="margin-left: 150px;">
                                    <a href="{{ route('login') }}"
                                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                        <button type="button" class="btn btn-outline-primary me-2"
                                            style="width: 100px;" onclick="redirectToSignIn()">Sign In</button>
                                    </a>
                                    <a href="{{ route('register') }}"
                                        class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                        <button type="button" class="btn btn-outline-primary"
                                            onclick="redirectToRegister()">Register</button>
                                    </a>
                                </div>

                                <script>
                                    function redirectToSignIn() {
                                        window.location.href = '/login';
                                    }

                                    function redirectToRegister() {
                                        window.location.href = '/register';
                                    }
                                </script>

                            </div>
                        </div>
                    </nav>
                </div>
            </div><!-- end of .container-->
        </section>
        <nav class="ecommerce-navbar navbar-expand navbar-light bg-white justify-content-center h-3"
            style="height: 35px">
            <div class="container-small d-flex flex-between-center pt-2 text-center"
                data-navbar="data-navbar">
                <ul class="navbar-nav mx-auto justify-content-end align-items-center">
                    <li class="nav-item" data-nav-item="data-nav-item"><a
                            class="nav-link {{ request()->routeIs('homeuser') ? 'active' : '' }}"
                            href="{{ route('login') }}">Home</a></li>
                    <li class="nav-item" data-nav-item="data-nav-item"><a
                            class="nav-link {{ request()->routeIs('produk.filter') ? 'active' : '' }}"
                            href="{{ route('login') }}">Products</a></li>
                    <li class="nav-item" data-nav-item="data-nav-item"><a
                            class="nav-link {{ request()->routeIs('wishlist') ? 'active' : '' }}"
                            href="{{ route('login') }}">Wishlist</a></li>
                    <li class="nav-item" data-nav-item="data-nav-item"><a
                            class="nav-link {{ request()->routeIs('checkout') ? 'active' : '' }}"
                            href="{{ route('login') }}">Checkout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- <section> close ============================-->
        <!-- ============================================-->

        <section class="py-0">
            <div class="ecommerce-homepage pt-5 mb-9">
                <div class="">
                    <div class="row g-3 mb-9">
                        <div class="col-12">
                            <div class="whooping-banner w-100 rounded-0 overflow-hidden">
                                <div class="bg-holder z-index--1 product-bg"
                                    style="background-image: url(/assets/img/benner1.png); background-size: cover;">
                                </div>
                                <div class="banner-text light">
                                    <h2 class="text-warning-300 fw-bolder fs-lg-5 fs-xxl-6">iPhone <span
                                            class="gradient-text">15
                                        </span>Pro </h2>
                                    <h3 class="fw-bolder fs-lg-3 fs-xxl-5 text-white light">Titanium, So strong, So
                                        light,
                                        So Pro.</h3>
                                    <br><br><br><br><br><br><br><br>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="whooping-banner w-100 rounded-0 overflow-hidden">
                                <div class="bg-holder z-index--1 product-bg"
                                    style="background-image: url(/assets/img/benner2.png); background-size: cover;">
                                </div>
                                <div class="banner-text light" style="text-align: center;">
                                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="whooping-banner w-100 rounded-0 overflow-hidden">
                                <div class="bg-holder z-index--1 product-bg"
                                    style="background-image: url(/assets/img/benner3.png); background-size: cover;">
                                </div>
                                <div class="banner-text light">
                                    <h2 class="text-warning-300 fw-bolder fs-lg-5 fs-xxl-6">AirPods Pro </h2>
                                    <h3 class="fw-bolder fs-lg-3 fs-xxl-5 text-white light">Adaptive Audio.</h3>
                                    <h3 class="fw-bolder fs-lg-3 fs-xxl-5 text-white light">Listen now.</h3>
                                    <br><br><br><br><br><br><br><br>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="gift-items-banner w-100 rounded-0 overflow-hidden">
                                <div class="bg-holder z-index--1 banner-bg"
                                    style="background-image:url(/assets/img/oalah1.png);">
                                </div>
                                <!--/.bg-holder-->
                                <div class="banner-text text-md-center light">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div
                                class="best-in-market-banner d-flex h-100 px-4 px-sm-7 py-5 px-md-11 rounded-0 overflow-hidden">
                                <div class="bg-holder z-index--1 banner-bg"
                                    style="background-image:url(/assets/img/oalah2.png);">
                                </div>
                                <!--/.bg-holder-->
                                <div class="row align-items-center w-sm-100">
                                    <div class="col-8">
                                        <div class="banner-text light">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="gift-items-banner w-100 rounded-0 overflow-hidden">
                                <div class="bg-holder z-index--1 banner-bg"
                                    style="background-image:url(/assets/img/oalah3.png);">
                                </div>
                                <!--/.bg-holder-->
                                <div class="banner-text text-md-center light">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div
                                class="best-in-market-banner d-flex h-100 px-4 px-sm-7 py-5 px-md-11 rounded-0 overflow-hidden">
                                <div class="bg-holder z-index--1 banner-bg"
                                    style="background-image:url(/assets/img/oalah4.png);">
                                </div>
                                <!--/.bg-holder-->
                                <div class="row align-items-center w-sm-100">
                                    <div class="col-8">
                                        <div class="banner-text light">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end of .container-->
        </section>
    </main><!-- ===============================================-->
    <section class="bg-100 dark__bg-1100 py-9">
        <div class="container-small">
            <div class="row justify-content-between gy-4">
                <div class="col-12 col-lg-4">
                    <div class="d-flex align-items-center mb-3"><img src="{{ asset('assets/storage/logo.png') }}"
                            alt="phoenix" width="27" />
                        <p class="logo-text ms-2">iVibe</p>
                    </div>
                    <p class="text-700 mb-1 fw-semi-bold lh-sm fs--1">
                        iVibe is a leading retailer in Indonesia that provides the latest technology products and
                        premium
                        accessories. They offer a complete range of innovative products and invite customers to
                        experience and
                        test products in their stores. Apart from that, iVibe also provides training services and
                        after-sales
                        support through an experienced team.</p>
                </div>
                <div class="col-6 col-md-auto">
                    <h5 class="fw-bolder mb-3">About iVibe</h5>
                    <div class="d-flex flex-column"><a class="text-700 fw-semi-bold fs--1 mb-1"
                            href="#!">Careers</a><a class="text-700 fw-semi-bold fs--1 mb-1"
                            href="#!">Affiliate
                            Program</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Privacy Policy</a><a
                            class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Terms & Conditions</a></div>
                </div>
                <div class="col-6 col-md-auto">
                    <h5 class="fw-bolder mb-3">Stay Connected</h5>
                    <div class="d-flex flex-column"><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Jalan
                            Ijen
                            No. 123 Kota Malang, Indonesia</a><a class="mb-1 fw-semi-bold fs--1 d-flex"
                            href="#!"><span class="fab fa-facebook-square text-primary me-2 fs-0"></span><span
                                class="text-800">+62
                                823-3107-9449</span></a><a class="mb-1 fw-semi-bold fs--1 d-flex" href="#!"><span
                                class="fab fa-twitter-square text-info me-2 fs-0"></span><span class="text-800">Email
                                :
                                info@ivibe.com</span></a></div>
                </div>
            </div>
        </div><!-- end of .container-->
    </section>
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../../../vendors/popper/popper.min.js"></script>
    <script src="../../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../../vendors/is/is.min.js"></script>
    <script src="../../../vendors/fontawesome/all.min.js"></script>
    <script src="../../../vendors/lodash/lodash.min.js"></script>
    <script src="../../../../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="../../../vendors/list.js/list.min.js"></script>
    <script src="../../../vendors/feather-icons/feather.min.js"></script>
    <script src="../../../vendors/dayjs/dayjs.min.js"></script>
    <script src="../../../assets/js/phoenix.js"></script>
    <script src="../../../vendors/swiper/swiper-bundle.min.js"></script>
</body>


<!-- Mirrored from prium.github.io/phoenix/v1.13.0/apps/e-commerce/landing/homepage.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 12:13:56 GMT -->

</html>
