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
        <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link ps-0" href="homepage.html">Home</a></li>
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
  <div class="pt-5 pb-9">

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-0">
      <div class="container-small">
        <nav class="mb-3" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Fashion</a></li>
            <li class="breadcrumb-item"><a href="#">Womens fashion</a></li>
            <li class="breadcrumb-item"><a href="#">Footwear</a></li>
            <li class="breadcrumb-item active" aria-current="page">Hills</li>
          </ol>
        </nav>
        <div class="row g-5 mb-5 mb-lg-8" data-product-details="data-product-details">
          <div class="col-12 col-lg-6">
            <div class="row g-3 mb-3">
              <div class="col-12 col-md-2 col-lg-12 col-xl-2">
                <div class="swiper-products-thumb swiper swiper-container theme-slider overflow-visible"
                  id="swiper-products-thumb"></div>
              </div>
              <div class="col-12 col-md-10 col-lg-12 col-xl-10">
                <div class="d-flex align-items-center border rounded-3 text-center p-5 h-100">
                  <div class="swiper swiper-container theme-slider" data-thumb-target="swiper-products-thumb"
                    data-products-swiper='{"slidesPerView":1,"spaceBetween":16,"thumbsEl":".swiper-products-thumb"}'>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex"><button
                class="btn btn-lg btn-outline-warning rounded-pill w-100 me-3 px-2 px-sm-4 fs--1 fs-sm-0"><span
                  class="me-2 far fa-heart"></span>Add to wishlist</button><button
                class="btn btn-lg btn-warning rounded-pill w-100 fs--1 fs-sm-0"><span
                  class="fas fa-shopping-cart me-2"></span>Add to cart</button></div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="d-flex flex-column justify-content-between h-100">
              <div>
                <div class="d-flex flex-wrap">
                  <div class="me-2"><span class="fa fa-star text-warning"></span><span
                      class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                      class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></div>
                  <p class="text-primary fw-semi-bold mb-2">6548 People rated and reviewed </p>
                </div>
                <h3 class="mb-3 lh-sm">24" iMac® with Retina 4.5K display - Apple M1 8GB Memory - 256GB SSD - w/Touch ID
                  (Latest Model) - Blue</h3>
                <div class="d-flex flex-wrap align-items-start mb-3"><span
                    class="badge bg-success fs--1 rounded-pill me-2 fw-semi-bold">#1 Best seller</span><a
                    class="fw-semi-bold" href="#!">in Phoenix sell analytics 2021</a></div>
                <div class="d-flex flex-wrap align-items-center">
                  <h1 class="me-3">$1349.99</h1>
                  <p class="text-500 text-decoration-line-through fs-2 mb-0 me-3">$1499.99</p>
                  <p class="text-warning-500 fw-bolder fs-2 mb-0">10% off</p>
                </div>
                <p class="text-success fw-semi-bold fs-1 mb-2">In stock</p>
                <p class="mb-2 text-800"><strong class="text-1000">Do you want it on Saturday, July 29th?</strong>
                  Choose <strong class="text-1000">Saturday Delivery </strong>at checkout if you want your order
                  delivered within 12 hours 43 minutes, <a class="fw-bold" href="#!">Details. </a><strong
                    class="text-1000">Gift wrapping is available.</strong></p>
                <p class="text-danger-500 fw-bold mb-5 mb-lg-0">Special offer ends in 23:00:45 hours</p>
              </div>
              <div>
                <div class="mb-3">
                  <p class="fw-semi-bold mb-2 text-900">Color : <span class="text-1100"
                      data-product-color="data-product-color">Blue</span></p>
                  <div class="d-flex product-color-variants" data-product-color-variants="data-product-color-variants">
                    <div class="rounded-1 border me-2 active" data-variant="Blue"
                      data-products-images='["../../../assets/img/products/details/blue_front.png","../../../assets/img/products/details/blue_back.png","../../../assets/img/products/details/blue_side.png"]'>
                      <img src="../../../assets/img/products/details/blue_front.png" alt="" width="38" />
                    </div>
                    <div class="rounded-1 border me-2" data-variant="Red"
                      data-products-images='["../../../assets/img/products/details/red_front.png","../../../assets/img/products/details/red_back.png","../../../assets/img/products/details/red_side.png"]'>
                      <img src="../../../assets/img/products/details/red_front.png" alt="" width="38" />
                    </div>
                    <div class="rounded-1 border me-2" data-variant="Green"
                      data-products-images='["../../../assets/img/products/details/green_front.png","../../../assets/img/products/details/green_back.png","../../../assets/img/products/details/green_side.png"]'>
                      <img src="../../../assets/img/products/details/green_front.png" alt="" width="38" />
                    </div>
                    <div class="rounded-1 border me-2" data-variant="Purple"
                      data-products-images='["../../../assets/img/products/details/purple_front.png","../../../assets/img/products/details/purple_back.png","../../../assets/img/products/details/purple_side.png"]'>
                      <img src="../../../assets/img/products/details/purple_front.png" alt="" width="38" />
                    </div>
                    <div class="rounded-1 border me-2" data-variant="Silver"
                      data-products-images='["../../../assets/img/products/details/silver_front.png","../../../assets/img/products/details/silver_back.png","../../../assets/img/products/details/silver_side.png"]'>
                      <img src="../../../assets/img/products/details/silver_front.png" alt="" width="38" />
                    </div>
                    <div class="rounded-1 border me-2" data-variant="Yellow"
                      data-products-images='["../../../assets/img/products/details/yellow_front.png","../../../assets/img/products/details/yellow_back.png","../../../assets/img/products/details/yellow_side.png"]'>
                      <img src="../../../assets/img/products/details/yellow_front.png" alt="" width="38" />
                    </div>
                    <div class="rounded-1 border me-2" data-variant="Orange"
                      data-products-images='["../../../assets/img/products/details/orange_front.png","../../../assets/img/products/details/orange_back.png","../../../assets/img/products/details/orange_side.png"]'>
                      <img src="../../../assets/img/products/details/orange_front.png" alt="" width="38" />
                    </div>
                  </div>
                </div>
                <div class="row g-3 g-sm-5 align-items-end">
                  <div class="col-12 col-sm-auto">
                    <p class="fw-semi-bold mb-2 text-900">Size : </p>
                    <div class="d-flex align-items-center"><select class="form-select w-auto">
                        <option value="44">44</option>
                        <option value="22">22</option>
                        <option value="18">18</option>
                      </select><a class="ms-2 fs--1 fw-semi-bold" href="#!">Size chart</a></div>
                  </div>
                  <div class="col-12 col-sm">
                    <p class="fw-semi-bold mb-2 text-900">Quantity : </p>
                    <div class="d-flex justify-content-between align-items-end">
                      <div class="d-flex flex-between-center" data-quantity="data-quantity"><button
                          class="btn btn-phoenix-primary px-3" data-type="minus"><span
                            class="fas fa-minus"></span></button><input
                          class="form-control text-center input-spin-none bg-transparent border-0 outline-none"
                          style="width:50px;" type="number" min="1" value="2" /><button
                          class="btn btn-phoenix-primary px-3" data-type="plus"><span
                            class="fas fa-plus"></span></button></div><button
                        class="btn btn-phoenix-primary px-3 border-0"><span
                          class="fas fa-share-alt fs-1"></span></button>
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
    <section class="py-0">
      <div class="container-small">
        <ul class="nav nav-underline mb-4" id="productTab" role="tablist">
          <li class="nav-item"><a class="nav-link active" id="description-tab" data-bs-toggle="tab"
              href="#tab-description" role="tab" aria-controls="tab-description"
              aria-selected="true">Description</a></li>
          <li class="nav-item"><a class="nav-link" id="specification-tab" data-bs-toggle="tab"
              href="#tab-specification" role="tab" aria-controls="tab-specification"
              aria-selected="false">Specification</a></li>
          <li class="nav-item"><a class="nav-link" id="reviews-tab" data-bs-toggle="tab" href="#tab-reviews"
              role="tab" aria-controls="tab-reviews" aria-selected="false">Ratings &amp; reviews</a></li>
        </ul>
        <div class="row gx-3 gy-7">
          <div class="col-12 col-lg-7 col-xl-8">
            <div class="tab-content" id="productTabContent">
              <div class="tab-pane pe-lg-6 pe-xl-12 fade show active text-1100" id="tab-description" role="tabpanel"
                aria-labelledby="description-tab">
                <p class="mb-5">CUPERTINO, CA , The M1 CPU allows Apple to deliver an all-new iMac with a lot more
                  compact and impressively thin design. The new iMac delivers tremendous performance in an
                  11.5-millimeter-thin design with a stunning side profile that almost vanishes. iMac includes a 24-inch
                  4.5K Retina display with 11.3 million pixels, 500 nits of brightness, and over a billion colors, giving
                  a beautiful and vivid viewing experience. It is available in a variety of striking colors to match a
                  user's own style and brighten any area. A 1080p FaceTime HD camera, studio-quality mics, and a
                  six-speaker sound system are all included in the new iMac, making it the greatest camera and audio
                  system ever in a Mac. Touch ID is also making its debut on the iMac, making it easier than ever to
                  securely log in, make Apple Pay transactions, and switch user accounts with the touch of a finger. Apps
                  launch at lightning speed, everyday chores seem astonishingly fast and fluid, and demanding workloads
                  like editing 4K video and working with large photos are faster than ever before thanks to the power and
                  performance of M1 and macOS Big Sur.</p><a href="../../../assets/img/products/23.png"
                  data-gallery="gallery-description"><img class="img-fluid mb-5 rounded-3"
                    src="../../../assets/img/products/23.png" alt=""></a>
                <p class="mb-0">The new iMac joins Apple's fantastic M1-powered Mac family, which includes the MacBook
                  Air, 13-inch MacBook Pro, and Mac mini, and represents yet another step ahead in the company's shift to
                  Apple silicon. Customers may order iMac starting Friday, April 30. It's the most personal, powerful,
                  capable, and enjoyable it's ever been. In the second half of May, the iMac will be available."M1 is a
                  huge step forward for the Mac," said Greg Joswiak, Apple's senior vice president of Worldwide Marketing.
                  "Today, we're delighted to present the all-new iMac, the first Mac developed around the groundbreaking
                  M1 processor." "The new iMac takes everything people love about iMac to an entirely new level, with its
                  beautiful design in seven breathtaking colors, its immersive 4.5K Retina display, the greatest camera,
                  mics, and speakers ever in a Mac, and Touch ID, combined with M1's incredible performance and macOS Big
                  Sur's power."</p>
              </div>
              <div class="tab-pane pe-lg-6 pe-xl-12 fade" id="tab-specification" role="tabpanel"
                aria-labelledby="specification-tab">
                <h3 class="mb-0 ms-4 fw-bold">Processor/Chipset</h3>
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 40%"> </th>
                      <th style="width: 60%"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="bg-100 align-middle">
                        <h6 class="mb-0 text-900 text-uppercase fw-bolder px-4 fs--1 lh-sm">Chip name</h6>
                      </td>
                      <td class="px-5 mb-0">Apple M1 chip</td>
                    </tr>
                    <tr>
                      <td class="bg-100 align-middle">
                        <h6 class="mb-0 text-900 text-uppercase fw-bolder px-4 fs--1 lh-sm">Cpu core</h6>
                      </td>
                      <td class="px-5 mb-0">8 (4 performance and 4 efficiency)</td>
                    </tr>
                    <tr>
                      <td class="bg-100 align-middle">
                        <h6 class="mb-0 text-900 text-uppercase fw-bolder px-4 fs--1 lh-sm">Gpu core</h6>
                      </td>
                      <td class="px-5 mb-0">7</td>
                    </tr>
                    <tr>
                      <td class="bg-100 align-middle">
                        <h6 class="mb-0 text-900 text-uppercase fw-bolder px-4 fs--1 lh-sm">Neural engine</h6>
                      </td>
                      <td class="px-5 mb-0">16 cores</td>
                    </tr>
                  </tbody>
                </table>
                <h3 class="mb-0 mt-6 ms-4 fw-bold">Storage</h3>
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 40%"></th>
                      <th style="width: 60%"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="bg-100 align-middle">
                        <h6 class="mb-0 text-900 text-uppercase fw-bolder px-4 fs--1 lh-sm">Memory</h6>
                      </td>
                      <td class="px-5 mb-0">8 GB unified</td>
                    </tr>
                    <tr>
                      <td class="bg-100 align-middle">
                        <h6 class="mb-0 text-900 text-uppercase fw-bolder px-4 fs--1 lh-sm">SSD</h6>
                      </td>
                      <td class="px-5 mb-0">256 GB</td>
                    </tr>
                  </tbody>
                </table>
                <h3 class="mb-0 mt-6 ms-4 fw-bold">Display</h3>
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 40%"> </th>
                      <th style="width: 60%"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="bg-100 align-middle">
                        <h6 class="mb-0 text-900 text-uppercase fw-bolder px-4 fs--1 lh-sm">Display type</h6>
                      </td>
                      <td class="px-5 mb-0">Retina</td>
                    </tr>
                    <tr>
                      <td class="bg-100 align-middle">
                        <h6 class="mb-0 text-900 text-uppercase fw-bolder px-4 fs--1 lh-sm">Size</h6>
                      </td>
                      <td class="px-5 mb-0">24” (actual diagonal 23.5”)</td>
                    </tr>
                    <tr>
                      <td class="bg-100 align-middle">
                        <h6 class="mb-0 text-900 text-uppercase fw-bolder px-4 fs--1 lh-sm">Resolution</h6>
                      </td>
                      <td class="px-5 mb-0">4480 x 2520 </td>
                    </tr>
                    <tr>
                      <td class="bg-100 align-middle">
                        <h6 class="mb-0 text-900 text-uppercase fw-bolder px-4 fs--1 lh-sm">Brightness</h6>
                      </td>
                      <td class="px-5 mb-0">500 nits</td>
                    </tr>
                  </tbody>
                </table>
                <h3 class="mb-0 mt-6 ms-4 fw-bold">Additional Specifications</h3>
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 40%"> </th>
                      <th style="width: 60%"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="bg-100 align-middle">
                        <h6 class="mb-0 text-900 text-uppercase fw-bolder px-4 fs--1 lh-sm">Camera</h6>
                      </td>
                      <td class="px-5 mb-0">1080p FaceTime HD camera</td>
                    </tr>
                    <tr>
                      <td class="bg-100">
                        <h6 class="mb-0 mt-1 text-900 text-uppercase fw-bolder px-4 fs--1 lh-sm">Video </h6>
                      </td>
                      <td class="px-5 mb-0">Full native resolution on built-in display at 1 billion colors; <br>One
                        external display with up to 6K resolution at 60Hz</td>
                    </tr>
                    <tr>
                      <td class="bg-100">
                        <h6 class="mb-0 mt-1 text-900 text-uppercase fw-bolder px-4 fs--1 lh-sm">Audio</h6>
                      </td>
                      <td class="px-5 mb-0">High-fidelity six-speaker with force-cancelling woofers <br>Wide stereo sound
                        <br>Spatial audio with Dolby Atmos3<br>Studio-quality three-mic array with directional beamforming
                      </td>
                    </tr>
                    <tr>
                      <td class="bg-100">
                        <h6 class="mb-0 mt-1 text-900 text-uppercase fw-bolder px-4 fs--1 lh-sm">Inputs </h6>
                      </td>
                      <td class="px-5 mb-0">Magic Keyboard<br>Magic Mouse</td>
                    </tr>
                    <tr>
                      <td class="bg-100">
                        <h6 class="mb-0 mt-1 text-900 text-uppercase fw-bolder px-4 fs--1 lh-sm">Wireless </h6>
                      </td>
                      <td class="px-5 mb-0">802.11ax Wi-Fi 6 (IEEE 802.11a/b/g/n/ac compatible)<br>Bluetooth 5.0 wireless
                        technology</td>
                    </tr>
                    <tr>
                      <td class="bg-100">
                        <h6 class="mb-0 mt-1 text-900 text-uppercase fw-bolder px-4 fs--1 lh-sm">I/O &amp; expantions
                        </h6>
                      </td>
                      <td class="px-5 mb-0">Thunderbolt / USB 4 ports x 2<br>3.5 mm headphone jack<br>Gigabit
                        Ethernet<br>USB 3 ports x2</td>
                    </tr>
                    <tr>
                      <td class="bg-100 align-middle">
                        <h6 class="mb-0 text-900 text-uppercase fw-bolder px-4 fs--1 lh-sm">Operating System</h6>
                      </td>
                      <td class="px-5 mb-0">macOS Monterey </td>
                    </tr>
                  </tbody>
                </table>
                <h3 class="mb-3 mt-6 ms-4 fw-bold">In The Box</h3>
                <p class="lh-sm border-top mb-0 py-3 px-4">iMac 24”</p>
                <p class="lh-sm border-top mb-0 py-3 px-4">Magic Keyboard </p>
                <p class="lh-sm border-top mb-0 py-3 px-4">Magic Mouse</p>
                <p class="lh-sm border-top mb-0 py-3 px-4">143W power adapter</p>
                <p class="lh-sm border-top mb-0 py-3 px-4">2m Power Cord</p>
                <p class="lh-sm border-y mb-0 py-3 px-4">USB-C to Lightning Cable</p>
              </div>
              <div class="tab-pane fade" id="tab-reviews" role="tabpanel" aria-labelledby="reviews-tab">
                <div class="bg-white rounded-3 p-4 border border-200">
                  <div class="row g-3 justify-content-between mb-4">
                    <div class="col-auto">
                      <div class="d-flex align-items-center flex-wrap">
                        <h2 class="fw-bolder me-3">4.9<span class="fs-0 text-500 fw-bold">/5</span></h2>
                        <div class="me-3"><span class="fa fa-star text-warning fs-2"></span><span
                            class="fa fa-star text-warning fs-2"></span><span
                            class="fa fa-star text-warning fs-2"></span><span
                            class="fa fa-star text-warning fs-2"></span><span
                            class="fa fa-star-half-alt star-icon text-warning fs-2"></span></div>
                        <p class="text-900 mb-0 fw-semi-bold fs-1">6548 ratings and 567 reviews</p>
                      </div>
                    </div>
                    <div class="col-auto"><button class="btn btn-primary rounded-pill" data-bs-toggle="modal"
                        data-bs-target="#reviewModal">Rate this product</button>
                      <div class="modal fade" id="reviewModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content p-4">
                            <div class="d-flex flex-between-center mb-2">
                              <h5 class="modal-title fs-0 mb-0">Your rating</h5><button
                                class="btn p-0 fs--2">Clear</button>
                            </div>
                            <div class="mb-3" data-rater='{"starSize":32,"step":0.5}'></div>
                            <div class="mb-3">
                              <h5 class="text-1000 mb-3">Your review</h5>
                              <textarea class="form-control" id="reviewTextarea" rows="5" placeholder="Write your review"> </textarea>
                            </div>
                            <div class="dropzone dropzone-multiple p-0 mb-3" id="my-awesome-dropzone" data-dropzone>
                              <div class="fallback"><input name="file" type="file" multiple></div>
                              <div class="dz-preview d-flex flex-wrap">
                                <div class="border bg-white rounded-3 d-flex flex-center position-relative me-2 mb-2"
                                  style="height:80px;width:80px;"><img class="dz-image"
                                    src="../../../assets/img/products/23.png" alt="..." data-dz-thumbnail><a
                                    class="dz-remove text-400" href="#!" data-dz-remove><span
                                      data-feather="x"></span></a></div>
                              </div>
                              <div class="dz-message text-600 fw-bold fs--1 p-4" data-dz-message> Drag your photo here
                                <span class="text-800">or </span><button class="btn btn-link p-0">Browse from device
                                </button><br><img class="mt-3 me-2" src="../../../assets/img/icons/image-icon.png"
                                  width="24" alt="">
                              </div>
                            </div>
                            <div class="d-sm-flex flex-between-center">
                              <div class="form-check flex-1"><input class="form-check-input" id="reviewAnonymously"
                                  type="checkbox" value="" checked=""><label
                                  class="form-check-label mb-0 text-1100 fw-semi-bold" for="reviewAnonymously">Review
                                  anonymously</label></div><button class="btn ps-0"
                                data-bs-dismiss="modal">Close</button><button
                                class="btn btn-primary rounded-pill">Submit</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mb-4 hover-actions-trigger btn-reveal-trigger">
                    <div class="d-flex justify-content-between">
                      <h5 class="mb-2"><span class="fa fa-star text-warning"></span><span
                          class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                          class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                          class="text-800 ms-1"> by</span> Zingko Kudobum</h5>
                      <div class="font-sans-serif btn-reveal-trigger position-static"><button
                          class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                          type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                          aria-expanded="false" data-bs-reference="parent"><span
                            class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                            href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                            href="#!">Remove</a>
                        </div>
                      </div>
                    </div>
                    <p class="text-700 fs--1 mb-1">35 mins ago</p>
                    <p class="text-1000 mb-3">100% satisfied</p>
                    <div class="row g-2 mb-2">
                      <div class="col-auto"><a href="../../../assets/img/e-commerce/review-11.jpg"
                          data-gallery="gallery-0"><img class="w-100"
                            src="../../../assets/img/e-commerce/review-11.jpg" alt="" height="164" /></a>
                      </div>
                      <div class="col-auto"><a href="../../../assets/img/e-commerce/review-12.jpg"
                          data-gallery="gallery-0"><img class="w-100"
                            src="../../../assets/img/e-commerce/review-12.jpg" alt="" height="164" /></a>
                      </div>
                      <div class="col-auto"><a href="../../../assets/img/e-commerce/review-13.jpg"
                          data-gallery="gallery-0"><img class="w-100"
                            src="../../../assets/img/e-commerce/review-13.jpg" alt="" height="164" /></a>
                      </div>
                    </div>
                    <div class="d-flex"><span class="fas fa-reply fa-rotate-180 me-2"></span>
                      <div>
                        <h5>Respond from store<span class="text-700 fs--1 ms-2">5 mins ago</span></h5>
                        <p class="text-1000 mb-0">Thank you for your valuable feedback</p>
                      </div>
                    </div>
                    <div class="hover-actions top-0"><button class="btn btn-sm btn-phoenix-secondary me-2"><span
                          class="fas fa-thumbs-up"></span></button><button
                        class="btn btn-sm btn-phoenix-secondary me-1"><span class="fas fa-thumbs-down"></span></button>
                    </div>
                  </div>
                  <div class="mb-4 hover-actions-trigger btn-reveal-trigger">
                    <div class="d-flex justify-content-between">
                      <h5 class="mb-2"><span class="fa fa-star text-warning"></span><span
                          class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                          class="fa fa-star text-warning"></span><span
                          class="fa-regular fa-star text-warning-300"></span><span class="text-800 ms-1"> by</span>
                        Piere Auguste Renoir</h5>
                      <div class="font-sans-serif btn-reveal-trigger position-static"><button
                          class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                          type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                          aria-expanded="false" data-bs-reference="parent"><span
                            class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                            href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                            href="#!">Remove</a>
                        </div>
                      </div>
                    </div>
                    <p class="text-700 fs--1 mb-1">23 Oct, 12:09 PM</p>
                    <p class="text-1000 mb-1">Since the spring loaded event, I've been wanting an iMac, and it's exceeded
                      my expectations. The screen is clear, the colors are vibrant (I got the blue one! ), and the
                      performance is more than adequate for my needs as a college student. That's how good it is.</p>
                    <div class="hover-actions top-0"><button class="btn btn-sm btn-phoenix-secondary me-2"><span
                          class="fas fa-thumbs-up"></span></button><button
                        class="btn btn-sm btn-phoenix-secondary me-1"><span class="fas fa-thumbs-down"></span></button>
                    </div>
                  </div>
                  <div class="mb-4 hover-actions-trigger btn-reveal-trigger">
                    <div class="d-flex justify-content-between">
                      <h5 class="mb-2"><span class="fa fa-star text-warning"></span><span
                          class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                          class="fa fa-star-half-alt star-icon text-warning"></span><span
                          class="fa-regular fa-star text-warning-300"></span><span class="text-800 ms-1"> by</span> Abel
                        Kablmann </h5>
                      <div class="font-sans-serif btn-reveal-trigger position-static"><button
                          class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                          type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                          aria-expanded="false" data-bs-reference="parent"><span
                            class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                            href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                            href="#!">Remove</a>
                        </div>
                      </div>
                    </div>
                    <p class="text-700 fs--1 mb-1">21 Oct, 12:00 PM</p>
                    <p class="text-1000 mb-1">Over the years, I've preferred Apple products. My job has allowed me to use
                      Windows products on laptops and PCs. I've owned Windows laptops and desktops for home use in the
                      past and will never use them again.</p>
                    <div class="hover-actions top-0"><button class="btn btn-sm btn-phoenix-secondary me-2"><span
                          class="fas fa-thumbs-up"></span></button><button
                        class="btn btn-sm btn-phoenix-secondary me-1"><span class="fas fa-thumbs-down"></span></button>
                    </div>
                  </div>
                  <div class="mb-4 hover-actions-trigger btn-reveal-trigger">
                    <div class="d-flex justify-content-between">
                      <h5 class="mb-2"><span class="fa fa-star text-warning"></span><span
                          class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                          class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                          class="text-800 ms-1"> by</span> Pennywise Alfred</h5>
                      <div class="font-sans-serif btn-reveal-trigger position-static"><button
                          class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                          type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                          aria-expanded="false" data-bs-reference="parent"><span
                            class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                            href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                            href="#!">Remove</a>
                        </div>
                      </div>
                    </div>
                    <p class="text-700 fs--1 mb-1">35 mins ago</p>
                    <p class="text-1000 mb-3">Nice and beautiful product.</p>
                    <div class="row g-2 mb-2">
                      <div class="col-auto"><a href="../../../assets/img/e-commerce/review-14.jpg"
                          data-gallery="gallery-3"><img class="w-100"
                            src="../../../assets/img/e-commerce/review-14.jpg" alt="" height="164" /></a>
                      </div>
                      <div class="col-auto"><a href="../../../assets/img/e-commerce/review-15.jpg"
                          data-gallery="gallery-3"><img class="w-100"
                            src="../../../assets/img/e-commerce/review-15.jpg" alt="" height="164" /></a>
                      </div>
                      <div class="col-auto"><a href="../../../assets/img/e-commerce/review-16.jpg"
                          data-gallery="gallery-3"><img class="w-100"
                            src="../../../assets/img/e-commerce/review-16.jpg" alt="" height="164" /></a>
                      </div>
                    </div>
                    <div class="hover-actions top-0"><button class="btn btn-sm btn-phoenix-secondary me-2"><span
                          class="fas fa-thumbs-up"></span></button><button
                        class="btn btn-sm btn-phoenix-secondary me-1"><span class="fas fa-thumbs-down"></span></button>
                    </div>
                  </div>
                  <div class="d-flex justify-content-center">
                    <nav>
                      <ul class="pagination mb-0">
                        <li class="page-item"><a class="page-link" href="#!"><span class="fas fa-chevron-left">
                            </span></a></li>
                        <li class="page-item"><a class="page-link" href="#!">1</a></li>
                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                        <li class="page-item active"><a class="page-link" href="#!">4</a></li>
                        <li class="page-item"><a class="page-link" href="#!">5</a></li>
                        <li class="page-item"><a class="page-link" href="#!"><span
                              class="fas fa-chevron-right"></span></a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-5 col-xl-4">
            <div class="card">
              <div class="card-body">
                <h5 class="text-black">Usually Bought Together</h5>
                <div class="w-75">
                  <p class="text-700 fs--1 fw-bold line-clamp-1">with 24" iMac® with Retina 4.5K display - Apple M1 8GB
                    Memory - 256GB SSD - w/Touch ID (Latest Model) - Blue</p>
                </div>
                <div class="border-dashed border-y py-4">
                  <div class="d-flex align-items-center mb-5">
                    <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                        checked="checked" /><label class="form-check-label"></label></div><a
                      href="product-details.html"> <img class="border rounded" src="../../../assets/img/products/2.png"
                        width="53" alt="" /></a>
                    <div class="ms-2"><a class="fs--1 fw-bold line-clamp-2 mb-2" href="product-details.html"> iPhone
                        13 pro max-Pacific Blue- 128GB</a>
                      <h5>$899.99</h5>
                    </div>
                  </div>
                  <div class="d-flex align-items-center mb-5">
                    <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                        checked="checked" /><label class="form-check-label"></label></div><a
                      href="product-details.html"> <img class="border rounded"
                        src="../../../assets/img/products/16.png" width="53" alt="" /></a>
                    <div class="ms-2"><a class="fs--1 fw-bold line-clamp-2 mb-2" href="product-details.html">Apple
                        AirPods Pro</a>
                      <h5>$59.00</h5>
                    </div>
                  </div>
                  <div class="d-flex align-items-center mb-0">
                    <div class="form-check mb-0"><input class="form-check-input" type="checkbox" /><label
                        class="form-check-label"></label></div><a href="product-details.html"> <img
                        class="border rounded" src="../../../assets/img/products/10.png" width="53"
                        alt="" /></a>
                    <div class="ms-2"><a class="fs--1 fw-bold line-clamp-2 mb-2" href="product-details.html">Apple
                        Magic Mouse (Wireless, Rechargable) - Silver, Worst mouse ever</a>
                      <h5>$89.00</h5>
                    </div>
                  </div>
                </div>
                <div class="d-flex align-items-end justify-content-between pt-3">
                  <div>
                    <h5 class="mb-2 text-600">Total</h5>
                    <h4 class="mb-0 text-1100">$958.99</h4>
                  </div>
                  <div class="btn btn-outline-warning">Add 3 items to cart<span
                      class="fas fa-shopping-cart ms-2"></span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->

  </div>

  <!-- ============================================-->
  <!-- <section> begin ============================-->
  <section class="py-0 mb-9">
    <div class="container">
      <div class="d-flex flex-between-center mb-3">
        <div>
          <h3>Similar Products</h3>
          <p class="mb-0 text-700 fw-semi-bold">Essential for a better life</p>
        </div><button class="btn btn-sm btn-phoenix-primary">View all</button>
      </div>
      <div class="swiper-theme-container products-slider">
        <div class="swiper swiper-container theme-slider"
          data-swiper='{"slidesPerView":1,"spaceBetween":16,"breakpoints":{"450":{"slidesPerView":2,"spaceBetween":16},"768":{"slidesPerView":3,"spaceBetween":16},"992":{"slidesPerView":4,"spaceBetween":16},"1200":{"slidesPerView":5,"spaceBetween":16},"1540":{"slidesPerView":6,"spaceBetween":16}}}'>
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
                        src="../../../assets/img/products/1.png" alt="" /></div><a class="stretched-link"
                      href="product-details.html">
                      <h6 class="mb-2 lh-sm line-clamp-3 product-name">Fitbit Sense Advanced Smartwatch with Tools for
                        Heart Health, Stress Management &amp;amp; Skin Temperature Trends Carbon/Graphite, One Size (S
                        &amp; L Bands)</h6>
                    </a>
                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                        class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                        class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                        class="text-500 fw-semi-bold ms-1">(59 people rated)</span></p>
                  </div>
                  <div>
                    <div class="d-flex align-items-center mb-1">
                      <p class="me-2 text-900 text-decoration-line-through mb-0">$49.99</p>
                      <h3 class="text-1100 mb-0">$34.99</h3>
                    </div>
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
                        src="../../../assets/img/products/3.png" alt="" /></div><a class="stretched-link"
                      href="product-details.html">
                      <h6 class="mb-2 lh-sm line-clamp-3 product-name">Apple MacBook Pro 13 inch-M1-8/256GB-Space Gray
                      </h6>
                    </a>
                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                        class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                        class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                        class="text-500 fw-semi-bold ms-1">(13 people rated)</span></p>
                  </div>
                  <div>
                    <p class="fs--1 text-1000 fw-bold mb-2">Apple care included</p>
                    <div class="d-flex align-items-center mb-1">
                      <p class="me-2 text-900 text-decoration-line-through mb-0">$1299.00</p>
                      <h3 class="text-1100 mb-0">$1149.00</h3>
                    </div>
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
                        src="../../../assets/img/products/5.png" alt="" /></div><a class="stretched-link"
                      href="product-details.html">
                      <h6 class="mb-2 lh-sm line-clamp-3 product-name">Razer Kraken v3 x Wired 7.1 Surroung Sound Gaming
                        headset</h6>
                    </a>
                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                        class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                        class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                        class="text-500 fw-semi-bold ms-1">(64 people rated)</span></p>
                  </div>
                  <div>
                    <h3 class="text-1100">$59.00</h3>
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
                        class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                        data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span
                          class="fas fa-heart d-block-hover"></span><span
                          class="far fa-heart d-none-hover"></span></button><img class="img-fluid"
                        src="../../../assets/img/products/2.png" alt="" /><span
                        class="badge bg-success fs--2 product-verified-badge">Verified<span
                          class="fas fa-check ms-1"></span></span></div><a class="stretched-link"
                      href="product-details.html">
                      <h6 class="mb-2 lh-sm line-clamp-3 product-name">iPhone 13 pro max-Pacific Blue, 128GB storage</h6>
                    </a>
                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                        class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                        class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                        class="text-500 fw-semi-bold ms-1">(32 people rated)</span></p>
                  </div>
                  <div>
                    <p class="fs--1 text-1000 fw-bold mb-2">Stock limited</p>
                    <div class="d-flex align-items-center mb-1">
                      <p class="me-2 text-900 text-decoration-line-through mb-0">$899.99</p>
                      <h3 class="text-1100 mb-0">$855.00</h3>
                    </div>
                    <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">5 colors</p>
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
                      href="product-details.html">
                      <h6 class="mb-2 lh-sm line-clamp-3 product-name">Apple AirPods Pro</h6>
                    </a>
                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                        class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                        class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                        class="text-500 fw-semi-bold ms-1">(39 people rated)</span></p>
                  </div>
                  <div>
                    <p class="fs--1 text-1000 fw-bold mb-1">free with iPhone 5s</p>
                    <p class="fs--1 text-700 mb-2">Ships to Canada</p>
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
                      href="product-details.html">
                      <h6 class="mb-2 lh-sm line-clamp-3 product-name">Apple Magic Mouse (Wireless, Rechargable) - Silver
                      </h6>
                    </a>
                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                        class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                        class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                        class="text-500 fw-semi-bold ms-1">(6 people rated)</span></p>
                  </div>
                  <div>
                    <p class="fs--1 text-1000 fw-bold mb-1">Bundle availabe</p>
                    <p class="fs--1 text-700 mb-2">Charger not included</p>
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
                        src="../../../assets/img/products/6.png" alt="" /></div><a class="stretched-link"
                      href="product-details.html">
                      <h6 class="mb-2 lh-sm line-clamp-3 product-name">PlayStation 5 DualSense Wireless Controller</h6>
                    </a>
                    <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                        class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                        class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                        class="text-500 fw-semi-bold ms-1">(67 people rated)</span></p>
                  </div>
                  <div>
                    <div class="d-flex align-items-center mb-1">
                      <p class="me-2 text-900 text-decoration-line-through mb-0">$125.00</p>
                      <h3 class="text-1100 mb-0">$89.00</h3>
                    </div>
                    <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">2 colors</p>
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
      </div>
    </div><!-- end of .container-->
  </section><!-- <section> close ============================-->
  <!-- ============================================-->

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
