@extends('user.layouts.main')

@section('content')
  <nav class="ecommerce-navbar navbar-expand navbar-light bg-white justify-content-between">
    <div class="container-small d-flex flex-between-center" data-navbar="data-navbar">
      <div class="dropdown"><button class="btn text-900 ps-0 pe-5 text-nowrap dropdown-toggle dropdown-caret-none"
          data-category-btn="data-category-btn" data-bs-toggle="dropdown"><span
            class="fas fa-bars me-2"></span>Category</button>
        <div class="dropdown-menu border py-0 category-dropdown-menu">
          <div class="card border-0 scrollbar" style="max-height: 657px;">
            <div class="card-body p-6 pb-3">
              <div class="row gx-7 gy-5 mb-5">
                <div class="col-12 col-sm-6 col-md-4">
                  <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="pocket"
                      style="stroke-width:3;"></span>
                    <h6 class="text-1000 mb-0 text-nowrap">Collectibles &amp; Art</h6>
                  </div>
                  <div class="ms-n2"><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">Collectibles</a><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">Antiques</a><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">Sports memorabilia </a><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">Art</a></div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                  <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="home"
                      style="stroke-width:3;"></span>
                    <h6 class="text-1000 mb-0 text-nowrap">Home &amp; Gardan</h6>
                  </div>
                  <div class="ms-n2"><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">Yard, Garden &amp; Outdoor</a><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">Crafts</a><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">Home Improvement</a><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">Pet Supplies</a></div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                  <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="globe"
                      style="stroke-width:3;"></span>
                    <h6 class="text-1000 mb-0 text-nowrap">Sporting Goods</h6>
                  </div>
                  <div class="ms-n2"><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">Outdoor Sports</a><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">Team Sports</a><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">Exercise &amp; Fitness</a><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">Golf</a></div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                  <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="monitor"
                      style="stroke-width:3;"></span>
                    <h6 class="text-1000 mb-0 text-nowrap">Electronics</h6>
                  </div>
                  <div class="ms-n2"><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">Computers &amp; Tablets</a><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">Camera &amp; Photo</a><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">TV, Audio &amp; Surveillance</a><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">Cell Ohone &amp; Accessories</a></div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                  <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="truck"
                      style="stroke-width:3;"></span>
                    <h6 class="text-1000 mb-0 text-nowrap">Auto Parts &amp; Accessories</h6>
                  </div>
                  <div class="ms-n2"><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">GPS &amp; Security Devices</a><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">Rader &amp; Laser Detectors</a><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">Care &amp; Detailing</a><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">Scooter Parts &amp; Accessories</a></div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                  <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="codesandbox"
                      style="stroke-width:3;"></span>
                    <h6 class="text-1000 mb-0 text-nowrap">Toys &amp; Hobbies</h6>
                  </div>
                  <div class="ms-n2"><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">Radio Control</a><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">Kids Toys</a><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">Action Figures</a><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">Dolls &amp; Bears</a></div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                  <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="watch"
                      style="stroke-width:3;"></span>
                    <h6 class="text-1000 mb-0 text-nowrap">Fashion</h6>
                  </div>
                  <div class="ms-n2"><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">Women</a><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">Men</a><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">Jewelry &amp; Watches</a><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">Shoes</a></div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                  <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="music"
                      style="stroke-width:3;"></span>
                    <h6 class="text-1000 mb-0 text-nowrap">Musical Instruments &amp; Gear</h6>
                  </div>
                  <div class="ms-n2"><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">Guitar</a><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">Pro Audio Equipment</a><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">String</a><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">Stage Lighting &amp; Effects</a></div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                  <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="grid"
                      style="stroke-width:3;"></span>
                    <h6 class="text-1000 mb-0 text-nowrap">Other Categories</h6>
                  </div>
                  <div class="ms-n2"><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">Video Games &amp; Consoles</a><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">Health &amp; Beauty</a><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">Baby</a><a
                      class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
                      href="#!">Business &amp; Industrial</a></div>
                </div>
              </div>
              <div class="text-center border-top pt-3"><a class="fw-bold" href="#!">See all Categories<span
                    class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a></div>
            </div>
          </div>
        </div>
      </div>
      <ul class="navbar-nav justify-content-end align-items-center">
        <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link ps-0 active"
            href="homepage.html">Home</a></li>
        <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" href="favourite-stores.html">My
            Favorites Stores</a></li>
        <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link"
            href="products-filter.html">Products</a></li>
        <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" href="wishlist.html">Wishlist</a></li>
        <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" href="shipping-info.html">Shipping
            Info</a></li>
        <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" href="../admin/add-product.html">Be a
            vendor</a></li>
        <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" href="order-tracking.html">Track
            order</a></li>
        <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link pe-0" href="checkout.html">Checkout</a>
        </li>
        <li class="nav-item dropdown" data-nav-item="data-nav-item" data-more-item="data-more-item"><a
            class="nav-link dropdown-toggle dropdown-caret-none fw-bold pe-0" href="javascript: void(0)"
            id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-boundary="window"
            data-bs-reference="parent"> More<span class="fas fa-angle-down ms-2"></span></a>
          <div class="dropdown-menu dropdown-menu-end category-list" aria-labelledby="navbarDropdown"
            data-category-list="data-category-list"></div>
        </li>
      </ul>
    </div>
  </nav>
  <div class="ecommerce-homepage pt-5 mb-9">

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-0">
      <div class="container-small">
        <div class="scrollbar">
          <div class="d-flex justify-content-between"><a class="icon-nav-item" href="#!">
              <div class="icon-container mb-2 bg-warning-100 light"><span class="fs-4 uil uil-star text-warning"></span>
              </div>
              <p class="nav-label">Deals</p>
            </a><a class="icon-nav-item" href="#!">
              <div class="icon-container mb-2"><span class="fs-4 uil uil-shopping-bag"></span></div>
              <p class="nav-label">Grocery</p>
            </a><a class="icon-nav-item" href="#!">
              <div class="icon-container mb-2"><span class="fs-4 uil uil-watch-alt"></span></div>
              <p class="nav-label">Fashion</p>
            </a><a class="icon-nav-item" href="#!">
              <div class="icon-container mb-2"><span class="fs-4 uil uil-mobile-android"></span></div>
              <p class="nav-label">Mobile</p>
            </a><a class="icon-nav-item" href="#!">
              <div class="icon-container mb-2"><span class="fs-4 uil uil-monitor"></span></div>
              <p class="nav-label">Electronics</p>
            </a><a class="icon-nav-item" href="#!">
              <div class="icon-container mb-2"><span class="fs-4 uil uil-estate"></span></div>
              <p class="nav-label">Home</p>
            </a><a class="icon-nav-item" href="#!">
              <div class="icon-container mb-2"><span class="fs-4 uil uil-lamp"></span></div>
              <p class="nav-label">Dining</p>
            </a><a class="icon-nav-item" href="#!">
              <div class="icon-container mb-2"><span class="fs-4 uil uil-gift"></span></div>
              <p class="nav-label">Gifts</p>
            </a><a class="icon-nav-item" href="#!">
              <div class="icon-container mb-2"><span class="fs-4 uil uil-wrench"></span></div>
              <p class="nav-label">Tools</p>
            </a><a class="icon-nav-item" href="#!">
              <div class="icon-container mb-2"><span class="fs-4 uil uil-plane-departure"></span></div>
              <p class="nav-label">Travel</p>
            </a><a class="icon-nav-item" href="#!">
              <div class="icon-container mb-2"><span class="fs-4 uil uil-palette"></span></div>
              <p class="nav-label">Others</p>
            </a></div>
        </div>
      </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-0 px-xl-3">
      <div class="container px-xl-0 px-xxl-3">
        <div class="row g-3 mb-9">
          <div class="col-12">
            <div class="whooping-banner w-100 rounded-3 overflow-hidden">
              <div class="bg-holder z-index--1 product-bg"
                style="background-image:url(../../../assets/img/e-commerce/whooping_banner_product.png);background-position: bottom right;">
              </div>
              <!--/.bg-holder-->
              <div class="bg-holder z-index--1 shape-bg"
                style="background-image:url(../../../assets/img/e-commerce/whooping_banner_shape_2.png);background-position: bottom left;">
              </div>
              <!--/.bg-holder-->
              <div class="banner-text light">
                <h2 class="text-warning-300 fw-bolder fs-lg-5 fs-xxl-6">Whooping <span class="gradient-text">60%
                  </span>Off</h2>
                <h3 class="fw-bolder fs-lg-3 fs-xxl-5 text-white light">on everyday items</h3>
              </div><a class="btn btn-lg btn-primary rounded-pill banner-button" href="#!">Shop Now</a>
            </div>
          </div>
          <div class="col-12 col-xl-6">
            <div class="gift-items-banner w-100 rounded-3 overflow-hidden">
              <div class="bg-holder z-index--1 banner-bg"
                style="background-image:url(../../../assets/img/e-commerce/gift-items-banner-bg.png);"></div>
              <!--/.bg-holder-->
              <div class="banner-text text-md-center light">
                <h2 class="text-white fw-bolder fs-xl-4">Get <span class="gradient-text">10% Off </span><br
                    class="d-md-none"> on gift items</h2><a class="btn btn-lg btn-primary rounded-pill banner-button"
                  href="#!">Buy Now</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-xl-6">
            <div class="best-in-market-banner d-flex h-100 px-4 px-sm-7 py-5 px-md-11 rounded-3 overflow-hidden">
              <div class="bg-holder z-index--1 banner-bg"
                style="background-image:url(../../../assets/img/e-commerce/best-in-market-bg.png);"></div>
              <!--/.bg-holder-->
              <div class="row align-items-center w-sm-100">
                <div class="col-8">
                  <div class="banner-text light">
                    <h2 class="text-white fw-bolder fs-sm-4 mb-5">MI 11 Pro<br><span class="fs-1 fs-sm-2"> Best in the
                        market</span></h2><a class="btn btn-lg btn-warning rounded-pill banner-button"
                      href="#!">Buy Now</a>
                  </div>
                </div>
                <div class="col-4"><img class="w-100 w-sm-75" src="../../../assets/img/e-commerce/5.png"
                    alt=""></div>
              </div>
            </div>
          </div>
        </div>
        <div class="mb-6">
          <div class="d-flex flex-between-center mb-3">
            <h3>Top Electronics</h3><a class="fw-bold d-none d-md-block" href="#!">Explore more<span
                class="fas fa-chevron-right fs--1 ms-1"></span></a>
          </div>
          <div class="swiper-theme-container products-slider">
            <div class="swiper swiper-container theme-slider"
              data-swiper='{"slidesPerView":1,"spaceBetween":16,"breakpoints":{"450":{"slidesPerView":2,"spaceBetween":16},"576":{"slidesPerView":3,"spaceBetween":20},"768":{"slidesPerView":4,"spaceBetween":20},"992":{"slidesPerView":5,"spaceBetween":20},"1200":{"slidesPerView":6,"spaceBetween":16}}}'>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="position-relative text-decoration-none product-card h-100">
                    <div class="d-flex flex-column justify-content-between h-100">
                      <div>
                        <div class="border border-1 rounded-3 position-relative mb-3"><button
                            class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span
                              class="fas fa-heart d-block-hover"></span><span
                              class="far fa-heart d-none-hover"></span></button><img class="img-fluid"
                            src="../../../assets/img/products/5.png" alt="" /></div><a class="stretched-link"
                          href="{{ route('user.product_detail') }}">
                          <h6 class="mb-2 lh-sm line-clamp-3 product-name">Razer Kraken v3 x Wired 7.1 Surroung Sound
                            Gaming headset</h6>
                        </a>
                        <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="text-500 fw-semi-bold ms-1">(59 people rated)</span></p>
                      </div>
                      <div>
                        <h3 class="text-1100">$59.00</h3>
                        <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">2 colors</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="position-relative text-decoration-none product-card h-100">
                    <div class="d-flex flex-column justify-content-between h-100">
                      <div>
                        <div class="border border-1 rounded-3 position-relative mb-3"><button
                            class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span
                              class="fas fa-heart d-block-hover"></span><span
                              class="far fa-heart d-none-hover"></span></button><img class="img-fluid"
                            src="../../../assets/img/products/7.png" alt="" /></div><a class="stretched-link"
                          href="{{ route('user.product_detail') }}">
                          <h6 class="mb-2 lh-sm line-clamp-3 product-name">2021 Apple 12.9-inch iPad Pro (Wi‑Fi, 128GB) -
                            Space Gray</h6>
                        </a>
                        <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="text-500 fw-semi-bold ms-1">(13 people rated)</span></p>
                      </div>
                      <div>
                        <h3 class="text-1100">$799.00</h3>
                        <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">2 colors</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="position-relative text-decoration-none product-card h-100">
                    <div class="d-flex flex-column justify-content-between h-100">
                      <div>
                        <div class="border border-1 rounded-3 position-relative mb-3"><button
                            class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span
                              class="fas fa-heart d-block-hover"></span><span
                              class="far fa-heart d-none-hover"></span></button><img class="img-fluid"
                            src="../../../assets/img/products/12.png" alt="" /></div><a class="stretched-link"
                          href="{{ route('user.product_detail') }}">
                          <h6 class="mb-2 lh-sm line-clamp-3 product-name">HORI Racing Wheel Apex for PlayStation 4/3,
                            and PC</h6>
                        </a>
                        <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="text-500 fw-semi-bold ms-1">(64 people rated)</span></p>
                      </div>
                      <div>
                        <p class="fs--1 text-1000 fs--1 mb-0 fw-bold">Leather cover add-on available</p>
                        <p class="fs--1 text-700 fs--1 mb-2">supports Windows 11</p>
                        <h3 class="text-1100">$299.00</h3>
                        <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">1 colors</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="position-relative text-decoration-none product-card h-100">
                    <div class="d-flex flex-column justify-content-between h-100">
                      <div>
                        <div class="border border-1 rounded-3 position-relative mb-3"><button
                            class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-primary"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Remove from wishlist"><span
                              class="fas fa-heart"></span></button><img class="img-fluid"
                            src="../../../assets/img/products/1.png" alt="" /><span
                            class="badge bg-success fs--2 product-verified-badge">Verified<span
                              class="fas fa-check ms-1"></span></span></div><a class="stretched-link"
                          href="{{ route('user.product_detail') }}">
                          <h6 class="mb-2 lh-sm line-clamp-3 product-name">Amazfit T-Rex Pro Smart Watch with GPS,
                            Outdoor Fitness Watch for Men, Military Standard Certified</h6>
                        </a>
                        <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="text-500 fw-semi-bold ms-1">(32 people rated)</span></p>
                      </div>
                      <div>
                        <h3 class="text-1100">$20.00</h3>
                        <p class="text-success fw-bold fs--1 lh-1 mb-0">Deal time ends in 24 hours</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="position-relative text-decoration-none product-card h-100">
                    <div class="d-flex flex-column justify-content-between h-100">
                      <div>
                        <div class="border border-1 rounded-3 position-relative mb-3"><button
                            class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span
                              class="fas fa-heart d-block-hover"></span><span
                              class="far fa-heart d-none-hover"></span></button><img class="img-fluid"
                            src="../../../assets/img/products/16.png" alt="" /></div><a class="stretched-link"
                          href="{{ route('user.product_detail') }}">
                          <h6 class="mb-2 lh-sm line-clamp-3 product-name">Apple AirPods Pro</h6>
                        </a>
                        <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="text-500 fw-semi-bold ms-1">(39 people rated)</span></p>
                      </div>
                      <div>
                        <p class="fs--1 text-1000 fs--1 mb-0 fw-bold">Free with iPhone 5s</p>
                        <p class="fs--1 text-700 fs--1 mb-2">Ships to Canada</p>
                        <h3 class="text-1100">$59.00</h3>
                        <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">3 colors</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="position-relative text-decoration-none product-card h-100">
                    <div class="d-flex flex-column justify-content-between h-100">
                      <div>
                        <div class="border border-1 rounded-3 position-relative mb-3"><button
                            class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span
                              class="fas fa-heart d-block-hover"></span><span
                              class="far fa-heart d-none-hover"></span></button><img class="img-fluid"
                            src="../../../assets/img/products/10.png" alt="" /></div><a class="stretched-link"
                          href="{{ route('user.product_detail') }}">
                          <h6 class="mb-2 lh-sm line-clamp-3 product-name">Apple Magic Mouse (Wireless, Rechargable) -
                            Silver</h6>
                        </a>
                        <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                            class="fa-regular fa-star text-warning-300"></span><span
                            class="fa-regular fa-star text-warning-300"></span><span
                            class="fa-regular fa-star text-warning-300"></span><span
                            class="fa-regular fa-star text-warning-300"></span><span
                            class="text-500 fw-semi-bold ms-1">(6 people rated)</span></p>
                      </div>
                      <div>
                        <p class="fs--1 text-1000 fs--1 mb-0 fw-bold">Bundle available</p>
                        <p class="fs--1 text-700 fs--1 mb-2">Charger not included</p>
                        <h3 class="text-1100">$89.00</h3>
                        <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">2 colors</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="position-relative text-decoration-none product-card h-100">
                    <div class="d-flex flex-column justify-content-between h-100">
                      <div>
                        <div class="border border-1 rounded-3 position-relative mb-3"><button
                            class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span
                              class="fas fa-heart d-block-hover"></span><span
                              class="far fa-heart d-none-hover"></span></button><img class="img-fluid"
                            src="../../../assets/img/products/8.png" alt="" /></div><a class="stretched-link"
                          href="{{ route('user.product_detail') }}">
                          <h6 class="mb-2 lh-sm line-clamp-3 product-name">Amazon Basics Matte Black Wired Keyboard - US
                            Layout (QWERTY)</h6>
                        </a>
                        <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa-regular fa-star text-warning-300"></span><span
                            class="fa-regular fa-star text-warning-300"></span><span
                            class="text-500 fw-semi-bold ms-1">(7 people rated)</span></p>
                      </div>
                      <div>
                        <h3 class="text-1100">$98.00</h3>
                        <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">1 colors</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-nav">
              <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span></div>
              <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span></div>
            </div>
          </div><a class="fw-bold d-md-none" href="#!">Explore more<span
              class="fas fa-chevron-right fs--1 ms-1"></span></a>
        </div>
        <div class="mb-6">
          <div class="d-flex flex-between-center mb-3">
            <h3>Best Offers</h3><a class="fw-bold d-none d-md-block" href="#!">Explore more<span
                class="fas fa-chevron-right fs--1 ms-1"></span></a>
          </div>
          <div class="swiper-theme-container products-slider">
            <div class="swiper swiper-container theme-slider"
              data-swiper='{"slidesPerView":1,"spaceBetween":16,"breakpoints":{"450":{"slidesPerView":2,"spaceBetween":16},"576":{"slidesPerView":3,"spaceBetween":20},"768":{"slidesPerView":4,"spaceBetween":20},"992":{"slidesPerView":5,"spaceBetween":20},"1200":{"slidesPerView":6,"spaceBetween":16}}}'>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="position-relative text-decoration-none product-card h-100">
                    <div class="d-flex flex-column justify-content-between h-100">
                      <div>
                        <div class="border border-1 rounded-3 position-relative mb-3"><button
                            class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span
                              class="fas fa-heart d-block-hover"></span><span
                              class="far fa-heart d-none-hover"></span></button><img class="img-fluid"
                            src="../../../assets/img/products/25.png" alt="" /></div><a class="stretched-link"
                          href="{{ route('user.product_detail') }}">
                          <h6 class="mb-2 lh-sm line-clamp-3 product-name">RESPAWN 200 Racing Style Gaming Chair, in Gray
                            RSP 200 GRY</h6>
                        </a>
                        <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></p>
                      </div>
                      <div>
                        <h6 class="text-success lh-1 mb-0">35% off</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="position-relative text-decoration-none product-card h-100">
                    <div class="d-flex flex-column justify-content-between h-100">
                      <div>
                        <div class="border border-1 rounded-3 position-relative mb-3"><button
                            class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span
                              class="fas fa-heart d-block-hover"></span><span
                              class="far fa-heart d-none-hover"></span></button><img class="img-fluid"
                            src="../../../assets/img/products/27.png" alt="" /></div><a class="stretched-link"
                          href="{{ route('user.product_detail') }}">
                          <h6 class="mb-2 lh-sm line-clamp-3 product-name">LEVOIT Humidifiers for Bedroom Large Room 6L
                            Warm and Cool Mist for...</h6>
                        </a>
                        <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span
                            class="fa-regular fa-star text-warning-300"></span></p>
                      </div>
                      <div>
                        <h6 class="text-success lh-1 mb-0">18% off</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="position-relative text-decoration-none product-card h-100">
                    <div class="d-flex flex-column justify-content-between h-100">
                      <div>
                        <div class="border border-1 rounded-3 position-relative mb-3"><button
                            class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span
                              class="fas fa-heart d-block-hover"></span><span
                              class="far fa-heart d-none-hover"></span></button><img class="img-fluid"
                            src="../../../assets/img/products/26.png" alt="" /></div><a class="stretched-link"
                          href="{{ route('user.product_detail') }}">
                          <h6 class="mb-2 lh-sm line-clamp-3 product-name">NETGEAR Nighthawk Pro Gaming XR500 Wi-Fi
                            Router with 4 Ethernet Ports...</h6>
                        </a>
                        <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></p>
                      </div>
                      <div>
                        <h6 class="text-success lh-1 mb-0">15% off</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="position-relative text-decoration-none product-card h-100">
                    <div class="d-flex flex-column justify-content-between h-100">
                      <div>
                        <div class="border border-1 rounded-3 position-relative mb-3"><button
                            class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span
                              class="fas fa-heart d-block-hover"></span><span
                              class="far fa-heart d-none-hover"></span></button><img class="img-fluid"
                            src="../../../assets/img/products/18.png" alt="" /></div><a class="stretched-link"
                          href="{{ route('user.product_detail') }}">
                          <h6 class="mb-2 lh-sm line-clamp-3 product-name">Rachael Ray Cucina Bakeware Set Includes
                            Nonstick Bread Baking Cookie Sheet...</h6>
                        </a>
                        <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star-half-alt star-icon text-warning"></span><span
                            class="fa-regular fa-star text-warning-300"></span></p>
                      </div>
                      <div>
                        <h6 class="text-success lh-1 mb-0">20% off</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="position-relative text-decoration-none product-card h-100">
                    <div class="d-flex flex-column justify-content-between h-100">
                      <div>
                        <div class="border border-1 rounded-3 position-relative mb-3"><button
                            class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span
                              class="fas fa-heart d-block-hover"></span><span
                              class="far fa-heart d-none-hover"></span></button><img class="img-fluid"
                            src="../../../assets/img/products/17.png" alt="" /></div><a class="stretched-link"
                          href="{{ route('user.product_detail') }}">
                          <h6 class="mb-2 lh-sm line-clamp-3 product-name">Xbox Series S</h6>
                        </a>
                        <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></p>
                      </div>
                      <div>
                        <h6 class="text-success lh-1 mb-0">12% off</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="position-relative text-decoration-none product-card h-100">
                    <div class="d-flex flex-column justify-content-between h-100">
                      <div>
                        <div class="border border-1 rounded-3 position-relative mb-3"><button
                            class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span
                              class="fas fa-heart d-block-hover"></span><span
                              class="far fa-heart d-none-hover"></span></button><img class="img-fluid"
                            src="../../../assets/img/products/24.png" alt="" /></div><a class="stretched-link"
                          href="{{ route('user.product_detail') }}">
                          <h6 class="mb-2 lh-sm line-clamp-3 product-name">FURINNO Computer Writing Desk, Walnut</h6>
                        </a>
                        <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></p>
                      </div>
                      <div>
                        <h6 class="text-success lh-1 mb-0">16% off</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="position-relative text-decoration-none product-card h-100">
                    <div class="d-flex flex-column justify-content-between h-100">
                      <div>
                        <div class="border border-1 rounded-3 position-relative mb-3"><button
                            class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span
                              class="fas fa-heart d-block-hover"></span><span
                              class="far fa-heart d-none-hover"></span></button><img class="img-fluid"
                            src="../../../assets/img/products/18.png" alt="" /></div><a class="stretched-link"
                          href="{{ route('user.product_detail') }}">
                          <h6 class="mb-2 lh-sm line-clamp-3 product-name">Seagate Portable 2TB External Hard Drive
                            Portable HDD</h6>
                        </a>
                        <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                            class="fa fa-star text-warning"></span><span
                            class="fa-regular fa-star text-warning-300"></span></p>
                      </div>
                      <div>
                        <h6 class="text-success lh-1 mb-0">15% off</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-nav">
              <div class="swiper-button-next"><span class="fas fa-chevron-right nav-icon"></span></div>
              <div class="swiper-button-prev"><span class="fas fa-chevron-left nav-icon"></span></div>
            </div>
          </div><a class="fw-bold d-md-none" href="#!">Explore more<span
              class="fas fa-chevron-right fs--1 ms-1"></span></a>
        </div>
      </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->

  </div>
  <div class="support-chat-container">
    <div class="container-fluid support-chat">
      <div class="card bg-white">
        <div class="card-header d-flex flex-between-center px-4 py-3 border-bottom">
          <h5 class="mb-0 d-flex align-items-center gap-2">Demo widget<span
              class="fa-solid fa-circle text-success fs--3"></span></h5>
          <div class="btn-reveal-trigger"><button
              class="btn btn-link p-0 dropdown-toggle dropdown-caret-none transition-none d-flex" type="button"
              id="support-chat-dropdown" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
              aria-expanded="false" data-bs-reference="parent"><span
                class="fas fa-ellipsis-h text-900"></span></button>
            <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="support-chat-dropdown"><a
                class="dropdown-item" href="#!">Request a callback</a><a class="dropdown-item"
                href="#!">Search in chat</a><a class="dropdown-item" href="#!">Show history</a><a
                class="dropdown-item" href="#!">Report to Admin</a><a class="dropdown-item btn-support-chat"
                href="#!">Close Support</a></div>
          </div>
        </div>
        <div class="card-body chat p-0">
          <div class="d-flex flex-column-reverse scrollbar h-100 p-3">
            <div class="text-end mt-6"><a
                class="mb-2 d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3"
                href="#!">
                <p class="mb-0 fw-semi-bold fs--1">I need help with something</p><span
                  class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
              </a><a
                class="mb-2 d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3"
                href="#!">
                <p class="mb-0 fw-semi-bold fs--1">I can’t reorder a product I previously ordered</p><span
                  class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
              </a><a
                class="mb-2 d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3"
                href="#!">
                <p class="mb-0 fw-semi-bold fs--1">How do I place an order?</p><span
                  class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
              </a><a
                class="false d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3"
                href="#!">
                <p class="mb-0 fw-semi-bold fs--1">My payment method not working</p><span
                  class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
              </a></div>
            <div class="text-center mt-auto">
              <div class="avatar avatar-3xl status-online"><img class="rounded-circle border border-3 border-white"
                  src="../../../assets/img/team/30.webp" alt="" /></div>
              <h5 class="mt-2 mb-3">Eric</h5>
              <p class="text-center text-black mb-0">Ask us anything – we’ll get back to you here or by email within 24
                hours.</p>
            </div>
          </div>
        </div>
        <div class="card-footer d-flex align-items-center gap-2 border-top ps-3 pe-4 py-3">
          <div class="d-flex align-items-center flex-1 gap-3 border rounded-pill px-4"><input
              class="form-control outline-none border-0 flex-1 fs--1 px-0" type="text"
              placeholder="Write message" /><label class="btn btn-link d-flex p-0 text-500 fs--1 border-0"
              for="supportChatPhotos"><span class="fa-solid fa-image"></span></label><input class="d-none"
              type="file" accept="image/*" id="supportChatPhotos" /><label
              class="btn btn-link d-flex p-0 text-500 fs--1 border-0" for="supportChatAttachment"> <span
                class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file"
              id="supportChatAttachment" /></div><button class="btn p-0 border-0 send-btn"><span
              class="fa-solid fa-paper-plane fs--1"></span></button>
        </div>
      </div>
    </div><button class="btn p-0 border border-200 btn-support-chat"><span
        class="fs-0 btn-text text-primary text-nowrap">Chat demo</span><span
        class="fa-solid fa-circle text-success fs--1 ms-2"></span><span
        class="fa-solid fa-chevron-down text-primary fs-1"></span></button>
  </div>
@endsection
