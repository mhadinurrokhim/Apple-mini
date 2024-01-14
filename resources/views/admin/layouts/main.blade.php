<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<!-- Mirrored from prium.github.io/phoenix/v1.13.0/apps/e-commerce/admin/customers.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 12:11:22 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

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
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png') }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicons/favicon.ico') }}">
  <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
  <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/mstile-150x150.png') }}">
  <meta name="theme-color" content="#ffffff">
  <script src="{{ asset('vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendors/simplebar/simplebar.min.js') }}"></script>
  <script src="{{ asset('assets/js/config.js') }}"></script>

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
</head>

<body>
  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">
      {{-- @include('admin.layouts.sidebar') --}}
      @include('admin.layouts.navbar')
  @yield('main')

  @yield('script')
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

<!-- Mirrored from prium.github.io/phoenix/v1.13.0/apps/e-commerce/admin/customers.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Nov 2023 12:13:38 GMT -->

</html>
