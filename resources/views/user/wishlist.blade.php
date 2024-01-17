<!DOCTYPE html>
<html lang="en-US" dir="ltr">


<!-- Mirrored from prium.github.io/phoenix/v1.13.0/apps/e-commerce/landing/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 12:14:23 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Phoenix</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../../../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../assets/img/favicons/favicon.ico">
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
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
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
                <div class="col-auto"><a class="text-decoration-none" href="../../../index.html">
                    <div class="d-flex align-items-center"><img src="../../../assets/img/icons/logo.png" alt="phoenix" width="27" />
                      <p class="logo-text ms-2">phoenix</p>
                    </div>
                  </a></div>
                <div class="col-auto order-md-1">
                  <ul class="navbar-nav navbar-nav-icons flex-row me-n2">
                    <li class="nav-item d-flex align-items-center">
                      <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="sun"></span></label></div>
                    </li>
                    <li class="nav-item"><a class="nav-link px-2 icon-indicator icon-indicator-primary" href="cart.html" role="button"><span class="text-700" data-feather="shopping-cart" style="height:20px;width:20px;"></span><span class="icon-indicator-number">3</span></a></li>
                    <li class="nav-item dropdown"><a class="nav-link px-2 icon-indicator icon-indicator-sm icon-indicator-danger" id="navbarTopDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="text-700" data-feather="bell" style="height:20px;width:20px;"></span></a>
                      <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret mt-2" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                        <div class="card position-relative border-0">
                          <div class="card-header p-2">
                            <div class="d-flex justify-content-between">
                              <h5 class="text-black mb-0">Notificatons</h5><button class="btn btn-link p-0 fs--1 fw-normal" type="button">Mark all as read</button>
                            </div>
                          </div>
                          <div class="card-body p-0">
                            <div class="scrollbar-overlay" style="height: 27rem;">
                              <div class="border-300">
                                <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative read border-bottom">
                                  <div class="d-flex align-items-center justify-content-between position-relative">
                                    <div class="d-flex">
                                      <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../../../assets/img/team/40x40/30.webp" alt="" /></div>
                                      <div class="flex-1 me-sm-3">
                                        <h4 class="fs--1 text-black">Jessie Samson</h4>
                                        <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span class="ms-2 text-400 fw-bold fs--2">10m</span></p>
                                        <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM </span>August 7,2021</p>
                                      </div>
                                    </div>
                                    <div class="font-sans-serif d-none d-sm-block"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                                  <div class="d-flex align-items-center justify-content-between position-relative">
                                    <div class="d-flex">
                                      <div class="avatar avatar-m status-online me-3">
                                        <div class="avatar-name rounded-circle"><span>J</span></div>
                                      </div>
                                      <div class="flex-1 me-sm-3">
                                        <h4 class="fs--1 text-black">Jane Foster</h4>
                                        <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>📅</span>Created an event.<span class="ms-2 text-400 fw-bold fs--2">20m</span></p>
                                        <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:20 AM </span>August 7,2021</p>
                                      </div>
                                    </div>
                                    <div class="font-sans-serif d-none d-sm-block"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                                  <div class="d-flex align-items-center justify-content-between position-relative">
                                    <div class="d-flex">
                                      <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="../../../assets/img/team/40x40/avatar.webp" alt="" /></div>
                                      <div class="flex-1 me-sm-3">
                                        <h4 class="fs--1 text-black">Jessie Samson</h4>
                                        <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👍</span>Liked your comment.<span class="ms-2 text-400 fw-bold fs--2">1h</span></p>
                                        <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:30 AM </span>August 7,2021</p>
                                      </div>
                                    </div>
                                    <div class="font-sans-serif d-none d-sm-block"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="border-300">
                                <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                                  <div class="d-flex align-items-center justify-content-between position-relative">
                                    <div class="d-flex">
                                      <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../../../assets/img/team/40x40/57.webp" alt="" /></div>
                                      <div class="flex-1 me-sm-3">
                                        <h4 class="fs--1 text-black">Kiera Anderson</h4>
                                        <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                        <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:11 AM </span>August 7,2021</p>
                                      </div>
                                    </div>
                                    <div class="font-sans-serif d-none d-sm-block"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative unread border-bottom">
                                  <div class="d-flex align-items-center justify-content-between position-relative">
                                    <div class="d-flex">
                                      <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../../../assets/img/team/40x40/59.webp" alt="" /></div>
                                      <div class="flex-1 me-sm-3">
                                        <h4 class="fs--1 text-black">Herman Carter</h4>
                                        <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👤</span>Tagged you in a comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                        <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:58 PM </span>August 7,2021</p>
                                      </div>
                                    </div>
                                    <div class="font-sans-serif d-none d-sm-block"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative read ">
                                  <div class="d-flex align-items-center justify-content-between position-relative">
                                    <div class="d-flex">
                                      <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="../../../assets/img/team/40x40/58.webp" alt="" /></div>
                                      <div class="flex-1 me-sm-3">
                                        <h4 class="fs--1 text-black">Benjamin Button</h4>
                                        <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span class='me-1 fs--2'>👍</span>Liked your comment.<span class="ms-2 text-400 fw-bold fs--2"></span></p>
                                        <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:18 AM </span>August 7,2021</p>
                                      </div>
                                    </div>
                                    <div class="font-sans-serif d-none d-sm-block"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2 text-900"></span></button>
                                      <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="card-footer p-0 border-top border-0">
                            <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder" href="../../../pages/notifications.html">Notification history</a></div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link px-2" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="text-700" data-feather="user" style="height:20px;width:20px;"></span></a>
                      <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300 mt-2" aria-labelledby="navbarDropdownUser">
                        <div class="card position-relative border-0">
                          <div class="card-body p-0">
                            <div class="text-center pt-4 pb-3">
                              <div class="avatar avatar-xl ">
                                <img class="rounded-circle " src="../../../assets/img/team/72x72/57.webp" alt="" />
                              </div>
                              <h6 class="mt-2 text-black">Jerry Seinfield</h6>
                            </div>
                            <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                          </div>
                          <div class="overflow-auto scrollbar" style="height: 10rem;">
                            <ul class="nav d-flex flex-column mb-2 pb-1">
                              <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user"></span><span>Profile</span></a></li>
                              <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a></li>
                              <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="lock"></span>Posts &amp; Activity</a></li>
                              <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                              <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="help-circle"></span>Help Center</a></li>
                              <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="globe"></span>Language</a></li>
                            </ul>
                          </div>
                          <div class="card-footer p-0 border-top">
                            <ul class="nav d-flex flex-column my-3">
                              <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user-plus"></span>Add another account</a></li>
                            </ul>
                            <hr />
                            <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                            <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a class="text-600 ms-1" href="#!">Cookies</a></div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="col-12 col-md-6">
                  <div class="search-box ecommerce-search-box w-100">
                    <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search form-control-sm" type="search" placeholder="Search" aria-label="Search" />
                      <span class="fas fa-search search-box-icon"></span>
                    </form>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

      <nav class="ecommerce-navbar navbar-expand navbar-light bg-white justify-content-center">
        <div class="container-small d-flex flex-between-center text-center" data-navbar="data-navbar">
          <ul class="navbar-nav mx-auto justify-content-end align-items-center">
            <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link ps-0" href="homeuser">Home</a></li>
            <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" href="produkfilter">Products</a></li>
            <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link active" href="wishlist">Wishlist</a></li>
            <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" href="tracking">Track order</a></li>
            <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" href="checkout">Checkout</a></li>
          </ul>
        </div>
      </nav>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-5 pb-9">
        <div class="container-small cart">
          <h2 class="mb-5">Wishlist<span class="text-700 fw-normal ms-2">(43)</span></h2>
          <div class="border-y" id="productWishlistTable" data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":5,"pagination":true}'>
            <div class="table-responsive scrollbar">
              <table class="table fs--1 mb-0">
                <thead>
                  <tr>
                    <th class="sort white-space-nowrap align-middle fs--2" scope="col" style="width:7%;"></th>
                    <th class="sort white-space-nowrap align-middle" scope="col" style="width:30%; min-width:250px;" data-sort="products">PRODUCTS</th>
                    <th class="sort align-middle" scope="col" data-sort="color" style="width:16%;">COLOR</th>
                    <th class="sort align-middle" scope="col" data-sort="size" style="width:10%;">SIZE</th>
                    <th class="sort align-middle text-end" scope="col" data-sort="price" style="width:10%;">PRICE</th>
                    <th class="sort align-middle text-end pe-0" scope="col" style="width:35%;"> </th>
                  </tr>
                </thead>
                <tbody class="list" id="profile-wishlist-table-body">
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border rounded-2 d-inline-block" href="product-details.html"><img src="../../../assets/img/products/1.png" alt="" width="53" /></a></td>
                    <td class="products align-middle pe-11"><a class="fw-semi-bold mb-0 line-clamp-1" href="product-details.html">Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management &amp; Skin Temperature Trends, Carbon/Graphite, One Size (S &amp; L Bands)</a></td>
                    <td class="color align-middle white-space-nowrap fs--1 text-900">Pure matte black</td>
                    <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">42</td>
                    <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$57</td>
                    <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0"><button class="btn btn-sm text-500 hover-text-600 me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs--2"><span class="fas fa-shopping-cart me-1 fs--2"></span>Add to cart</button></td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border rounded-2 d-inline-block" href="product-details.html"><img src="../../../assets/img/products/7.png" alt="" width="53" /></a></td>
                    <td class="products align-middle pe-11"><a class="fw-semi-bold mb-0 line-clamp-1" href="product-details.html">2021 Apple 12.9-inch iPad Pro (Wi‑Fi, 128GB) - Space Gray</a></td>
                    <td class="color align-middle white-space-nowrap fs--1 text-900">Black</td>
                    <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">Pro</td>
                    <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$1,499</td>
                    <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0"><button class="btn btn-sm text-500 hover-text-600 me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs--2"><span class="fas fa-shopping-cart me-1 fs--2"></span>Add to cart</button></td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border rounded-2 d-inline-block" href="product-details.html"><img src="../../../assets/img/products/6.png" alt="" width="53" /></a></td>
                    <td class="products align-middle pe-11"><a class="fw-semi-bold mb-0 line-clamp-1" href="product-details.html">PlayStation 5 DualSense Wireless Controller</a></td>
                    <td class="color align-middle white-space-nowrap fs--1 text-900">White</td>
                    <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">Regular</td>
                    <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$299</td>
                    <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0"><button class="btn btn-sm text-500 hover-text-600 me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs--2"><span class="fas fa-shopping-cart me-1 fs--2"></span>Add to cart</button></td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border rounded-2 d-inline-block" href="product-details.html"><img src="../../../assets/img/products/3.png" alt="" width="53" /></a></td>
                    <td class="products align-middle pe-11"><a class="fw-semi-bold mb-0 line-clamp-1" href="product-details.html">Apple MacBook Pro 13 inch-M1-8/256GB-space</a></td>
                    <td class="color align-middle white-space-nowrap fs--1 text-900">Space Gray</td>
                    <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">Pro</td>
                    <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$1,699</td>
                    <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0"><button class="btn btn-sm text-500 hover-text-600 me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs--2"><span class="fas fa-shopping-cart me-1 fs--2"></span>Add to cart</button></td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border rounded-2 d-inline-block" href="product-details.html"><img src="../../../assets/img/products/4.png" alt="" width="53" /></a></td>
                    <td class="products align-middle pe-11"><a class="fw-semi-bold mb-0 line-clamp-1" href="product-details.html">Apple iMac 24&quot; 4K Retina Display M1 8 Core CPU, 7 Core GPU, 256GB SSD, Green (MJV83ZP/A) 2021</a></td>
                    <td class="color align-middle white-space-nowrap fs--1 text-900">Ocean Blue</td>
                    <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">21&quot;</td>
                    <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$65</td>
                    <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0"><button class="btn btn-sm text-500 hover-text-600 me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs--2"><span class="fas fa-shopping-cart me-1 fs--2"></span>Add to cart</button></td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border rounded-2 d-inline-block" href="product-details.html"><img src="../../../assets/img/products/10.png" alt="" width="53" /></a></td>
                    <td class="products align-middle pe-11"><a class="fw-semi-bold mb-0 line-clamp-1" href="product-details.html">Apple Magic Mouse (Wireless, Rechargable) - Silver</a></td>
                    <td class="color align-middle white-space-nowrap fs--1 text-900">White</td>
                    <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">Regular</td>
                    <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$30</td>
                    <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0"><button class="btn btn-sm text-500 hover-text-600 me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs--2"><span class="fas fa-shopping-cart me-1 fs--2"></span>Add to cart</button></td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border rounded-2 d-inline-block" href="product-details.html"><img src="../../../assets/img/products/8.png" alt="" width="53" /></a></td>
                    <td class="products align-middle pe-11"><a class="fw-semi-bold mb-0 line-clamp-1" href="product-details.html">Amazon Basics Matte Black Wired Keyboard - US Layout (QWERTY)</a></td>
                    <td class="color align-middle white-space-nowrap fs--1 text-900">Black</td>
                    <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">MD</td>
                    <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$40</td>
                    <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0"><button class="btn btn-sm text-500 hover-text-600 me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs--2"><span class="fas fa-shopping-cart me-1 fs--2"></span>Add to cart</button></td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border rounded-2 d-inline-block" href="product-details.html"><img src="../../../assets/img/products/12.png" alt="" width="53" /></a></td>
                    <td class="products align-middle pe-11"><a class="fw-semi-bold mb-0 line-clamp-1" href="product-details.html">HORI Racing Wheel Apex for PlayStation 4_3, and PC</a></td>
                    <td class="color align-middle white-space-nowrap fs--1 text-900">Black</td>
                    <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">45</td>
                    <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$130</td>
                    <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0"><button class="btn btn-sm text-500 hover-text-600 me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs--2"><span class="fas fa-shopping-cart me-1 fs--2"></span>Add to cart</button></td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border rounded-2 d-inline-block" href="product-details.html"><img src="../../../assets/img/products/17.png" alt="" width="53" /></a></td>
                    <td class="products align-middle pe-11"><a class="fw-semi-bold mb-0 line-clamp-1" href="product-details.html">Xbox Series S</a></td>
                    <td class="color align-middle white-space-nowrap fs--1 text-900">Space Gray</td>
                    <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">sm</td>
                    <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$99</td>
                    <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0"><button class="btn btn-sm text-500 hover-text-600 me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs--2"><span class="fas fa-shopping-cart me-1 fs--2"></span>Add to cart</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
              <div class="col-auto d-flex">
                <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
              </div>
              <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-100 dark__bg-1100 py-9">
        <div class="container-small">
          <div class="row justify-content-between gy-4">
            <div class="col-12 col-lg-4">
              <div class="d-flex align-items-center mb-3"><img src="/assets/img/logoapple.png" alt="phoenix" width="27" />
                <p class="logo-text ms-2">iVibe</p>
              </div>
              <p class="text-700 mb-1 fw-semi-bold lh-sm fs--1">
                iVibe is a leading retailer in Indonesia that provides the latest technology products and premium accessories. They offer a complete range of innovative products and invite customers to experience and test products in their stores. Apart from that, iVibe also provides training services and after-sales support through an experienced team.</p>
            </div>
            <div class="col-6 col-md-auto">
              <h5 class="fw-bolder mb-3">About iVibe</h5>
              <div class="d-flex flex-column"><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Careers</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Affiliate Program</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Privacy Policy</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Terms & Conditions</a></div>
            </div>
            <div class="col-6 col-md-auto">
              <h5 class="fw-bolder mb-3">Stay Connected</h5>
              <div class="d-flex flex-column"><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Jalan Ijen No. 123 Kota Malang, Indonesia</a><a class="mb-1 fw-semi-bold fs--1 d-flex" href="#!"><span class="fab fa-facebook-square text-primary me-2 fs-0"></span><span class="text-800">+62 823-3107-9449</span></a><a class="mb-1 fw-semi-bold fs--1 d-flex" href="#!"><span class="fab fa-twitter-square text-info me-2 fs-0"></span><span class="text-800">Email : info@ivibe.com</span></a></div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->
    </main><!-- ===============================================-->
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
  </body>


<!-- Mirrored from prium.github.io/phoenix/v1.13.0/apps/e-commerce/landing/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 12:14:23 GMT -->
</html>
