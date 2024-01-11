<!DOCTYPE html>
<html lang="en-US" dir="ltr">


<!-- Mirrored from prium.github.io/phoenix/v1.13.0/apps/e-commerce/landing/order-tracking.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 12:14:23 GMT -->
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

      <nav class="ecommerce-navbar navbar-expand navbar-light bg-white justify-content-between">
        <div class="container-small d-flex flex-between-center" data-navbar="data-navbar">
          <div class="dropdown"><button class="btn text-900 ps-0 pe-5 text-nowrap dropdown-toggle dropdown-caret-none" data-category-btn="data-category-btn" data-bs-toggle="dropdown"><span class="fas fa-bars me-2"></span>Category</button>
            <div class="dropdown-menu border py-0 category-dropdown-menu">
              <div class="card border-0 scrollbar" style="max-height: 657px;">
                <div class="card-body p-6 pb-3">
                  <div class="row gx-7 gy-5 mb-5">
                    <div class="col-12 col-sm-6 col-md-4">
                      <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="pocket" style="stroke-width:3;"></span>
                        <h6 class="text-1000 mb-0 text-nowrap">Collectibles &amp; Art</h6>
                      </div>
                      <div class="ms-n2"><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Collectibles</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Antiques</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Sports memorabilia </a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Art</a></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                      <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="home" style="stroke-width:3;"></span>
                        <h6 class="text-1000 mb-0 text-nowrap">Home &amp; Gardan</h6>
                      </div>
                      <div class="ms-n2"><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Yard, Garden &amp; Outdoor</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Crafts</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Home Improvement</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Pet Supplies</a></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                      <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="globe" style="stroke-width:3;"></span>
                        <h6 class="text-1000 mb-0 text-nowrap">Sporting Goods</h6>
                      </div>
                      <div class="ms-n2"><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Outdoor Sports</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Team Sports</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Exercise &amp; Fitness</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Golf</a></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                      <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="monitor" style="stroke-width:3;"></span>
                        <h6 class="text-1000 mb-0 text-nowrap">Electronics</h6>
                      </div>
                      <div class="ms-n2"><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Computers &amp; Tablets</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Camera &amp; Photo</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">TV, Audio &amp; Surveillance</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Cell Ohone &amp; Accessories</a></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                      <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="truck" style="stroke-width:3;"></span>
                        <h6 class="text-1000 mb-0 text-nowrap">Auto Parts &amp; Accessories</h6>
                      </div>
                      <div class="ms-n2"><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">GPS &amp; Security Devices</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Rader &amp; Laser Detectors</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Care &amp; Detailing</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Scooter Parts &amp; Accessories</a></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                      <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="codesandbox" style="stroke-width:3;"></span>
                        <h6 class="text-1000 mb-0 text-nowrap">Toys &amp; Hobbies</h6>
                      </div>
                      <div class="ms-n2"><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Radio Control</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Kids Toys</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Action Figures</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Dolls &amp; Bears</a></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                      <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="watch" style="stroke-width:3;"></span>
                        <h6 class="text-1000 mb-0 text-nowrap">Fashion</h6>
                      </div>
                      <div class="ms-n2"><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Women</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Men</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Jewelry &amp; Watches</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Shoes</a></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                      <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="music" style="stroke-width:3;"></span>
                        <h6 class="text-1000 mb-0 text-nowrap">Musical Instruments &amp; Gear</h6>
                      </div>
                      <div class="ms-n2"><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Guitar</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Pro Audio Equipment</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">String</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Stage Lighting &amp; Effects</a></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                      <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="grid" style="stroke-width:3;"></span>
                        <h6 class="text-1000 mb-0 text-nowrap">Other Categories</h6>
                      </div>
                      <div class="ms-n2"><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Video Games &amp; Consoles</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Health &amp; Beauty</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Baby</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Business &amp; Industrial</a></div>
                    </div>
                  </div>
                  <div class="text-center border-top pt-3"><a class="fw-bold" href="#!">See all Categories<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a></div>
                </div>
              </div>
            </div>
          </div>
          <ul class="navbar-nav justify-content-end align-items-center">
            <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link ps-0" href="homepage.html">Home</a></li>
            <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" href="products-filter.html">Products</a></li>
            <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" href="wishlist.html">Wishlist</a></li>
            <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link active" href="order-tracking.html">Track order</a></li>
            <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link pe-0" href="checkout.html">Checkout</a></li>
            <li class="nav-item dropdown" data-nav-item="data-nav-item" data-more-item="data-more-item"><a class="nav-link dropdown-toggle dropdown-caret-none fw-bold pe-0" href="javascript: void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-boundary="window" data-bs-reference="parent"> More<span class="fas fa-angle-down ms-2"></span></a>
              <div class="dropdown-menu dropdown-menu-end category-list" aria-labelledby="navbarDropdown" data-category-list="data-category-list"></div>
            </li>
          </ul>
        </div>
      </nav>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-5 pb-9">
        <div class="container-small cart">
          <div class="row gy-9 gx-5">
            <div class="col-12 col-lg-6">
              <div class="border border-300 rounded-3 overflow-hidden h-100">
                <div class="googlemap h-100 min-vh-50" data-googlemap data-latlng="40.7228022,-74.0020158" data-scrollwheel="false" data-zoom="15">
                  <div class="marker-content py-2">
                    <h5>Google map </h5>
                    <p class="mb-0">A nice template for your site.<br>Customize it as you want.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="timeline-vertical">
                <div class="timeline-item">
                  <div class="row g-md-3 align-items-center mb-8 mb-lg-10">
                    <div class="col-12 col-md-auto d-flex">
                      <div class="timeline-item-date text-end order-1 order-md-0 me-md-4">
                        <p class="fs--2 fw-semi-bold text-700 mb-0">23 August, 2023<br class="d-none d-md-block"> 10:30 AM</p>
                      </div>
                      <div class="timeline-item-bar position-relative me-3 me-md-0 border-400">
                        <div class="icon-item icon-item-sm bg-success dark__bg-success"><span class="fa-solid fa-check text-white dark__text-white fs--2"></span></div><span class="timeline-bar border-end border-success"></span>
                      </div>
                    </div>
                    <div class="col">
                      <div class="timeline-item-content ps-6 ps-md-3">
                        <h4>Order is processing</h4>
                        <p class="fs--1 text-800 mb-0">Your package is ready for the seller to prepare.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="timeline-item">
                  <div class="row g-md-3 align-items-center mb-8 mb-lg-10">
                    <div class="col-12 col-md-auto d-flex">
                      <div class="timeline-item-date text-end order-1 order-md-0 me-md-4">
                        <p class="fs--2 fw-semi-bold text-700 mb-0">25 August, 2023<br class="d-none d-md-block"> 11:30 AM</p>
                      </div>
                      <div class="timeline-item-bar position-relative me-3 me-md-0 border-400">
                        <div class="icon-item icon-item-sm bg-success dark__bg-success"><span class="fa-solid fa-check text-white dark__text-white fs--2"></span></div><span class="timeline-bar border-end border-warning"></span>
                      </div>
                    </div>
                    <div class="col">
                      <div class="timeline-item-content ps-6 ps-md-3">
                        <h4>Picked Up</h4>
                        <p class="fs--1 text-800 mb-0">Your package has been picked up from the seller.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="timeline-item">
                  <div class="row g-md-3 align-items-center mb-8 mb-lg-10">
                    <div class="col-12 col-md-auto d-flex">
                      <div class="timeline-item-date text-end order-1 order-md-0 me-md-4">
                        <p class="fs--2 fw-semi-bold text-700 mb-0">27 August, 2023<br class="d-none d-md-block"> 6:30 AM</p>
                      </div>
                      <div class="timeline-item-bar position-relative me-3 me-md-0 border-400">
                        <div class="icon-item icon-item-sm bg-warning dark__bg-warning"><span class="fa-solid fa-truck-ramp-box text-white dark__text-white fs--2"></span></div><span class="timeline-bar border-end border-dashed border-400"></span>
                      </div>
                    </div>
                    <div class="col">
                      <div class="timeline-item-content ps-6 ps-md-3">
                        <h4>Ready to Ship</h4>
                        <p class="fs--1 text-800 mb-0">Your package is now ready to be shipped.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="timeline-item">
                  <div class="row g-md-3 align-items-center mb-8 mb-lg-10">
                    <div class="col-12 col-md-auto d-flex">
                      <div class="timeline-item-date text-end order-1 order-md-0 me-md-4">
                        <p class="fs--2 fw-semi-bold text-700 mb-0">Estimated time<br class="d-none d-md-block"> 29 August, 2023</p>
                      </div>
                      <div class="timeline-item-bar position-relative me-3 me-md-0 border-400">
                        <div class="icon-item icon-item-sm bg-400"><span class="fa-solid fa-truck text-white dark__text-white fs--2"></span></div><span class="timeline-bar border-end border-dashed border-400"></span>
                      </div>
                    </div>
                    <div class="col">
                      <div class="timeline-item-content ps-6 ps-md-3">
                        <h4>Shipped</h4>
                        <p class="fs--1 text-800 mb-0">Pending</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="timeline-item">
                  <div class="row g-md-3 align-items-center">
                    <div class="col-12 col-md-auto d-flex">
                      <div class="timeline-item-date text-end order-1 order-md-0 me-md-4">
                        <p class="fs--2 fw-semi-bold text-700 mb-0">Estimated time<br class="d-none d-md-block"> 30 August, 2023</p>
                      </div>
                      <div class="timeline-item-bar position-relative me-3 me-md-0 border-400">
                        <div class="icon-item icon-item-sm bg-400"><span class="fa-solid fa-truck-fast text-white dark__text-white fs--2"></span></div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="timeline-item-content ps-6 ps-md-3">
                        <h4>Delivered</h4>
                        <p class="fs--1 text-800 mb-0">Pending</p>
                      </div>
                    </div>
                  </div>
                </div>
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
              <div class="d-flex align-items-center mb-3"><img src="../../../assets/img/icons/logo.png" alt="phoenix" width="27" />
                <p class="logo-text ms-2">phoenix</p>
              </div>
              <p class="text-700 mb-1 fw-semi-bold lh-sm fs--1">Phoenix is an admin dashboard template with fascinating features and amazing layout. The template is responsive to all major browsers and is compatible with all available devices and screen sizes.</p>
            </div>
            <div class="col-6 col-md-auto">
              <h5 class="fw-bolder mb-3">About Phoenix</h5>
              <div class="d-flex flex-column"><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Careers</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Affiliate Program</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Privacy Policy</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Terms & Conditions</a></div>
            </div>
            <div class="col-6 col-md-auto">
              <h5 class="fw-bolder mb-3">Stay Connected</h5>
              <div class="d-flex flex-column"><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Blogs</a><a class="mb-1 fw-semi-bold fs--1 d-flex" href="#!"><span class="fab fa-facebook-square text-primary me-2 fs-0"></span><span class="text-800">Facebook</span></a><a class="mb-1 fw-semi-bold fs--1 d-flex" href="#!"><span class="fab fa-twitter-square text-info me-2 fs-0"></span><span class="text-800">Twitter</span></a></div>
            </div>
            <div class="col-6 col-md-auto">
              <h5 class="fw-bolder mb-3">Customer Service</h5>
              <div class="d-flex flex-column"><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Help Desk</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Support, 24/7</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Community of Phoenix</a></div>
            </div>
            <div class="col-6 col-md-auto">
              <h5 class="fw-bolder mb-3">Payment Method</h5>
              <div class="d-flex flex-column"><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Cash on Delivery</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Online Payment</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">PayPal</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Installment</a></div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

      <footer class="footer position-relative">
        <div class="row g-0 justify-content-between align-items-center h-100">
          <div class="col-12 col-sm-auto text-center">
            <p class="mb-0 mt-2 mt-sm-0 text-900">Thank you for creating with Phoenix<span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2023 &copy;<a class="mx-1" href="https://themewagon.com/">Themewagon</a></p>
          </div>
          <div class="col-12 col-sm-auto text-center">
            <p class="mb-0 text-600">v1.13.0</p>
          </div>
        </div>
      </footer>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1" aria-labelledby="settings-offcanvas">
      <div class="offcanvas-header align-items-start border-bottom flex-column">
        <div class="pt-1 w-100 mb-6 d-flex justify-content-between align-items-start">
          <div>
            <h5 class="mb-2 me-2 lh-sm"><span class="fas fa-palette me-2 fs-0"></span>Theme Customizer</h5>
            <p class="mb-0 fs--1">Explore different styles according to your preferences</p>
          </div><button class="btn p-1 fw-bolder" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span class="fas fa-times fs-0"> </span></button>
        </div><button class="btn btn-phoenix-secondary w-100" data-theme-control="reset"><span class="fas fa-arrows-rotate me-2 fs--2"></span>Reset to default</button>
      </div>
      <div class="offcanvas-body scrollbar px-card" id="themeController">
        <div class="setting-panel-item mt-0">
          <h5 class="setting-panel-item-title">Color Scheme</h5>
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherLight"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../../../assets/img/generic/default-light.png" alt=""/></span><span class="label-text">Light</span></label></div>
            <div class="col-6"><input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="phoenixTheme" /><label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherDark"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="../../../assets/img/generic/default-dark.png" alt=""/></span><span class="label-text"> Dark</span></label></div>
          </div>
        </div>
        <div class="border rounded-3 p-4 setting-panel-item bg-white">
          <div class="d-flex justify-content-between align-items-center">
            <h5 class="setting-panel-item-title mb-1">RTL </h5>
            <div class="form-check form-switch mb-0"><input class="form-check-input ms-auto" type="checkbox" data-theme-control="phoenixIsRTL" /></div>
          </div>
          <p class="mb-0 text-700">Change text direction</p>
        </div>
        <div class="border rounded-3 p-4 setting-panel-item bg-white">
          <div class="d-flex justify-content-between align-items-center">
            <h5 class="setting-panel-item-title mb-1">Support Chat </h5>
            <div class="form-check form-switch mb-0"><input class="form-check-input ms-auto" type="checkbox" data-theme-control="phoenixSupportChat" /></div>
          </div>
          <p class="mb-0 text-700">Toggle support chat</p>
        </div>
        <div class="setting-panel-item">
          <h5 class="setting-panel-item-title">Navigation Type</h5>
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="navbarPositionVertical" name="navigation-type" type="radio" value="vertical" data-theme-control="phoenixNavbarPosition" disabled="disabled" /><label class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionVertical"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../../../assets/img/generic/default-light.png" alt=""/><img class="img-fluid img-prototype d-light-none" src="../../../assets/img/generic/default-dark.png" alt=""/></span><span class="label-text">Vertical</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarPositionHorizontal" name="navigation-type" type="radio" value="horizontal" data-theme-control="phoenixNavbarPosition" disabled="disabled" /><label class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionHorizontal"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../../../assets/img/generic/top-default.png" alt=""/><img class="img-fluid img-prototype d-light-none" src="../../../assets/img/generic/top-default-dark.png" alt=""/></span><span class="label-text"> Horizontal</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarPositionCombo" name="navigation-type" type="radio" value="combo" data-theme-control="phoenixNavbarPosition" disabled="disabled" /><label class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionCombo"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../../../assets/img/generic/nav-combo-light.png" alt=""/><img class="img-fluid img-prototype d-light-none" src="../../../assets/img/generic/nav-combo-dark.png" alt=""/></span><span class="label-text"> Combo</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarPositionTopDouble" name="navigation-type" type="radio" value="dual-nav" data-theme-control="phoenixNavbarPosition" disabled="disabled" /><label class="btn d-inline-block btn-navbar-style fs--1" for="navbarPositionTopDouble"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none" src="../../../assets/img/generic/dual-light.png" alt=""/><img class="img-fluid img-prototype d-light-none" src="../../../assets/img/generic/dual-dark.png" alt=""/></span><span class="label-text"> Dual nav</span></label></div>
          </div>
          <p class="text-warning-500 font-medium"> <span class="fa-solid fa-triangle-exclamation me-2 text-warning"></span>You can't update navigation type in this page</p>
        </div>
        <div class="setting-panel-item">
          <h5 class="setting-panel-item-title">Vertical Navbar Appearance</h5>
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="navbar-style-default" type="radio" name="config.name" value="default" data-theme-control="phoenixNavbarVerticalStyle" disabled="disabled" /><label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-default"> <img class="img-fluid img-prototype d-dark-none" src="../../../assets/img/generic/default-light.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../../../assets/img/generic/default-dark.png" alt="" /><span class="label-text d-dark-none"> Default</span><span class="label-text d-light-none">Default</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbar-style-dark" type="radio" name="config.name" value="darker" data-theme-control="phoenixNavbarVerticalStyle" disabled="disabled" /><label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-dark"> <img class="img-fluid img-prototype d-dark-none" src="../../../assets/img/generic/vertical-darker.png" alt="" /><img class="img-fluid img-prototype d-light-none" src="../../../assets/img/generic/vertical-lighter.png" alt="" /><span class="label-text d-dark-none"> Darker</span><span class="label-text d-light-none">Lighter</span></label></div>
          </div>
          <p class="text-warning-500 font-medium"> <span class="fa-solid fa-triangle-exclamation me-2 text-warning"></span>You can't update vertical navbar appearance type in this page</p>
        </div>
        <div class="setting-panel-item">
          <h5 class="setting-panel-item-title">Horizontal Navbar Shape</h5>
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="navbarShapeDefault" name="navbar-shape" type="radio" value="default" data-theme-control="phoenixNavbarTopShape" disabled="disabled" /><label class="btn d-inline-block btn-navbar-style fs--1" for="navbarShapeDefault"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../../../assets/img/generic/top-default.png" alt=""/><img class="img-fluid img-prototype d-light-none mb-0" src="../../../assets/img/generic/top-default-dark.png" alt=""/></span><span class="label-text">Default</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarShapeSlim" name="navbar-shape" type="radio" value="slim" data-theme-control="phoenixNavbarTopShape" disabled="disabled" /><label class="btn d-inline-block btn-navbar-style fs--1" for="navbarShapeSlim"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../../../assets/img/generic/top-slim.png" alt=""/><img class="img-fluid img-prototype d-light-none mb-0" src="../../../assets/img/generic/top-slim-dark.png" alt=""/></span><span class="label-text"> Slim</span></label></div>
          </div>
          <p class="text-warning-500 font-medium"> <span class="fa-solid fa-triangle-exclamation me-2 text-warning"></span>You can't update vertical navbar appearance type in this page</p>
        </div>
        <div class="setting-panel-item">
          <h5 class="setting-panel-item-title">Horizontal Navbar Appearance</h5>
          <div class="row gx-2">
            <div class="col-6"><input class="btn-check" id="navbarTopDefault" name="navbar-top-style" type="radio" value="default" data-theme-control="phoenixNavbarTopStyle" disabled="disabled" /><label class="btn d-inline-block btn-navbar-style fs--1" for="navbarTopDefault"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../../../assets/img/generic/top-default.png" alt=""/><img class="img-fluid img-prototype d-light-none mb-0" src="../../../assets/img/generic/top-style-darker.png" alt=""/></span><span class="label-text">Default</span></label></div>
            <div class="col-6"><input class="btn-check" id="navbarTopDarker" name="navbar-top-style" type="radio" value="darker" data-theme-control="phoenixNavbarTopStyle" disabled="disabled" /><label class="btn d-inline-block btn-navbar-style fs--1" for="navbarTopDarker"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype d-dark-none mb-0" src="../../../assets/img/generic/navbar-top-style-light.png" alt=""/><img class="img-fluid img-prototype d-light-none mb-0" src="../../../assets/img/generic/top-style-lighter.png" alt=""/></span><span class="label-text d-dark-none">Darker</span><span class="label-text d-light-none">Lighter</span></label></div>
          </div>
          <p class="text-warning-500 font-medium"> <span class="fa-solid fa-triangle-exclamation me-2 text-warning"></span>You can't update vertical navbar appearance type in this page</p>
        </div><a class="bun btn-primary d-grid mb-3 text-white dark__text-100 mt-5 btn btn-primary" href="https://themes.getbootstrap.com/product/phoenix-admin-dashboard-webapp-template/" target="_blank">Purchase template</a>
      </div>
    </div><a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
      <div class="card-body d-flex align-items-center px-2 py-1">
      </div>
    </a>

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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbaQGvhe7Af-uOMJz68NWHnO34UjjE7Lo&amp;callback=initMap" async></script>
  </body>


<!-- Mirrored from prium.github.io/phoenix/v1.13.0/apps/e-commerce/landing/order-tracking.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 12:14:23 GMT -->
</html>
