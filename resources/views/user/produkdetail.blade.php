@extends('layout_user.navbar')
@section('content')
      <!-- ============================================-->
      <!-- <section> begin ============================-->
        @foreach ($produk as $detail )
        <section class="py-0 mt-5">
          <div class="container-small">
            <div class="row g-5 mb-5 mb-lg-8" data-product-details="data-product-details">
              <div class="col-12 col-lg-6">
                <div class="row g-3 mb-3">
                  <div class="col-12 col-md-2 col-lg-12 col-xl-2">
                    <div class="swiper-products-thumb swiper swiper-container theme-slider overflow-visible"
                      id="swiper-products-thumb"></div>
                  </div>
                  <div class="col-12 col-md-10 col-lg-12 col-xl-10">
                    <div class="d-flex align-items-center border rounded-3 text-center p-5 h-100">
                      <div style="position: relative; width: 100%; height: 100%;">
                        <img src="{{ asset('storage/Product/' . $detail->path_produk) }}" alt=""
                          style="object-fit: cover; width: 100%; height: 100%; position: absolute; top: 0; left: 0;" />
                      </div>
                      <div class="swiper swiper-container theme-slider" data-thumb-target="swiper-products-thumb"
                        data-products-swiper='{"slidesPerView":1,"spaceBetween":16,"thumbsEl":".swiper-products-thumb"}'>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="d-flex">
                    <button class="btn btn-lg btn-outline-primary rounded-pill w-100 me-3 px-2 px-sm-4 fs--1 fs-sm-0">
                      <span class="fa-solid fa-dollar-sign me-2"></span>Buy Now
                    </button>
                    <button class="btn btn-lg btn-primary rounded-pill w-100 fs--1 fs-sm-0">
                      <span class="fas fa-shopping-cart me-2"></span>Add to Cart
                    </button>
                  </div>
              </div>
              <div class="col-12 col-lg-6">
                <div class="d-flex flex-column justify-content-between h-100">
                  <div class="">
                    <div class="d-flex flex-wrap">
                      <div class="me-2"><span class="fa fa-star text-warning"></span><span
                          class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                          class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span>
                        </div>
                      <p class="text-primary fw-semi-bold mb-2">6548 People rated and reviewed </p>
                    </div>
                    <h3 class="mb-3 lh-sm">{{ $detail->nama_produk }}</h3>
                    <div class="d-flex flex-wrap align-items-center">
                      <h1 class="me-3">Rp.{{ number_format($detail->harga, 0, ',', '.') }}</h1>
                    </div>
                    <p class="text-success fw-semi-bold fs-1 mb-2">Stock {{ $detail->stok }}</p>
                    <p class="mb-2 text-800"><strong class="text-1000">Description:</strong>
                    <p class="mb-2 text-800"><strong class="text-1000">{{ strip_tags($detail->deskripsi) }}</strong>
                    </p>
                    <a class="fw-bold" href="ulasanproduk">Ulasan-></a>
                  </div>
                  <div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        @endforeach
      <!-- ============================================-->

@endsection
