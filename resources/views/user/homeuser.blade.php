@extends('layout_user.navbar')
@section('content')
      <section class="py-0 px-xl-3">
        <div class="container px-xl-0 px-xxl-3">
          <div class="row g-3 mb-9">
            <div class="col-12">
              <div class="whooping-banner w-100 rounded-3 overflow-hidden">
                <div class="bg-holder z-index--1 product-bg"
                  style="background-image:url(assets/img/benner4.png);background-position: bottom right;"></div>
                <!--/.bg-holder-->
                <div class="bg-holder z-index--1 shape-bg"
                  style="background-image:url(assets/img/benner4.png);background-position: bottom left;"></div>
                <!--/.bg-holder-->
                <div class="banner-text light">
                  <h2 class="text-warning-300 fw-bolder fs-lg-5 fs-xxl-6">MacBook Pro M2 <span
                      class="gradient-text"></span></h2>
                  <h3 class="fw-bolder fs-lg-3 fs-xxl-5 text-white light">
                    <strike>Rp 13.000.000</strike>
                    <span class="small-text" style="color: red;"> (10.000.000)</span>
                  </h3>
                </div><a class="btn btn-lg btn-primary rounded-pill banner-button" href="#!">Shop Now</a>
              </div>
            </div>

          <div class="row g-4 mb-6">
              <div class="col-12 col-lg-9 col-xxl-10">
                  <div class="d-flex flex-between-center mb-3">
                      {{-- <div class="d-flex"><span class="fas fa-bolt text-warning fs-2"></span>
                        <h3 class="mx-2">Top Deals today</h3><span class="fas fa-bolt text-warning fs-2"></span>
                    </div>
                    <a class="btn btn-link btn-lg p-0 d-none d-md-block" href="#!">Explore more<span
                        class="fas fa-chevron-right fs--1 ms-1"></span></a> --}}
                    </div>
                </div>
            </div>

            <div class="swiper-theme-container products-slider">
                <div class="swiper swiper-container theme-slider"
                     data-swiper='{"slidesPerView":1,"spaceBetween":16,"breakpoints":{"450":{"slidesPerView":2,"spaceBetween":16},"768":{"slidesPerView":3,"spaceBetween":20},"1200":{"slidesPerView":4,"spaceBetween":16},"1540":{"slidesPerView":5,"spaceBetween":16}}}'>
                  <div class="swiper-wrapper">
                    @foreach ($produk as $product)
                    <div class="swiper-slide" style="margin-right: 20px !important;">
                        <div class="card" style="width: 300px;">
                          <div class="position-relative text-decoration-none product-card ">
                            <div class="d-flex flex-column justify-content-between ">

                                <div class="border border-1 rounded-3 position-relative ">
                                  <button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist">
                                    <span class="fas fa-heart d-block-hover"></span>
                                    <span class="far fa-heart d-none-hover"></span>
                                  </button>
                                  <img class="" src="{{ asset('storage/Product/'. $product->path_produk) }}" alt="{{ $product->nama_produk }}" style="width: 298px; height: 200px; border-radius: 6px; object-fit: cover" />
                                </div>
                                <div class="card-body ">
                                  <a href="{{ route ('detail.produk',$product->id) }}" class="stretched-link">
                                    <h6 class="card-title mb-2 lh-sm line-clamp-3 product-name">{{ $product->nama_produk }}</h6>
                                </a>
                                <p class="fs--1 text-1000 fw-bold ">Stock {{ $product->stok }}</p>
                                  <p class="fs--1">
                                    <span class="fa fa-star text-warning"></span>
                                    <span class="fa fa-star text-warning"></span>
                                    <span class="fa fa-star text-warning"></span>
                                    <span class="fa fa-star text-warning"></span>
                                    <span class="fa fa-star text-warning"></span>
                                    <span class="text-500 fw-semi-bold ms-1">(67 people rated)</span>
                                  </p>
                                </div>

                              <div class="card-footer">
                                <div class="d-flex align-items-center mb-1">
                                    <h3 class="text-1100 mb-0">Rp {{ number_format($product->harga, 0, ',', '.') }}</h3>
                                    <div class="flex-grow-1"></div> <!-- Untuk memberikan jarak antara harga dan ikon keranjang -->
                                    <button class="fas fa-shopping-cart me-2 cart-icon"></button>
                                </div>
                            </div>
                            </div>
                          </div>

                      </div>
                    @endforeach
                  </div>
                </div>
              </div>
    </section><!-- <section> close ============================-->
    <!-- ============================================-->
@endsection
