@extends('layout_user.navbar')
@section('content')
    @include('Asset.SweetAlert')
    <style>
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type="number"] {
            -moz-appearance: textfield;
            appearance: textfield;
        }
    </style>
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-5 pb-9">
        <div class="product-filter-container"><button class="btn btn-sm btn-phoenix-secondary text-700 mb-5 d-lg-none"
                data-phoenix-toggle="offcanvas" data-phoenix-target="#productFilterColumn"> <span
                    class="fa-solid fa-filter me-2"></span>Filter</button>
            <div class="row">
                <div class="col-lg-3 col-xxl-2 ps-2 ps-xxl-3">
                    <form action="">
                        <div class="product-filter-offcanvas bg-soft scrollbar phoenix-offcanvas phoenix-offcanvas-fixed"
                            id="productFilterColumn">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h3 class="mb-0">Filters</h3><button class="btn d-lg-none p-0"
                                    data-phoenix-dismiss="offcanvas"><span class="uil uil-times fs-0"></span></button>
                            </div><a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse"
                                href="#collapseDevice" role="button" aria-expanded="true" aria-controls="collapseDevice">
                                <div class="d-flex align-items-center justify-content-between w-100">
                                    <div class="fs-0 text-1000">Category</div><span
                                        class="fa-solid fa-angle-down toggle-icon text-500"></span>
                                </div>
                            </a>
                            <div class="collapse show" id="collapseDevice">
                                <div class="mb-2">
                                    @foreach ($kategori as $kategoris)
                                        <div class="form-check mb-0">
                                            <input class="form-check-input mt-0" id="flexCheck{{ $kategoris->id }}"
                                                type="checkbox" name="device[]" value="{{ $kategoris->id }}">
                                            <label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0"
                                                for="flexCheck{{ $kategoris->id }}">
                                                {{ $kategoris->nama_kategori }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div><a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse"
                                href="#collapsePriceRange" role="button" aria-expanded="true"
                                aria-controls="collapsePriceRange">
                                <div class="d-flex align-items-center justify-content-between w-100">
                                    <div class="fs-0 text-1000">Price range</div><span
                                        class="fa-solid fa-angle-down toggle-icon text-500"></span>
                                </div>
                            </a>
                            <div class="collapse show" id="collapsePriceRange">
                                <div class="d-flex justify-content-between mb-3">
                                    <div class="input-group me-2"><input class="form-control" type="number"
                                            aria-label="First name" placeholder="Min" name="min"
                                            value="{{ $minPrice }}"><input class="form-control" type="number"
                                            aria-label="Last name" placeholder="Max" name="max"
                                            value="{{ $maxPrice }}"></div><button
                                        class="btn btn-phoenix-primary border-300 px-3" type="submit ">Go</button>
                                </div>
                            </div><a class="btn px-0 y-4 d-block collapse-indicator" data-bs-toggle="collapse"
                                href="#collapseRating" role="button" aria-expanded="true" aria-controls="collapseRating">
                                <div class="d-flex align-items-center justify-content-between w-100">
                                    <div class="fs-0 text-1000">Rating</div><span
                                        class="fa-solid fa-angle-down toggle-icon text-500"></span>
                                </div>
                            </a>
                            <div class="collapse show" id="collapseRating">
                                <div class="d-flex align-items-center mb-1"><input class="form-check-input me-3"
                                        id="flexRadio1" type="radio" name="flexRadio"><span
                                        class="fa fa-star text-warning fs--1 me-1"></span><span
                                        class="fa fa-star text-warning fs--1 me-1"></span><span
                                        class="fa fa-star text-warning fs--1 me-1"></span><span
                                        class="fa fa-star text-warning fs--1 me-1"></span><span
                                        class="fa fa-star text-warning fs--1 me-1"></span></div>
                                <div class="d-flex align-items-center mb-1"><input class="form-check-input me-3"
                                        id="flexRadio2" type="radio" name="flexRadio"><span
                                        class="fa fa-star text-warning fs--1 me-1"></span><span
                                        class="fa fa-star text-warning fs--1 me-1"></span><span
                                        class="fa fa-star text-warning fs--1 me-1"></span><span
                                        class="fa fa-star text-warning fs--1 me-1"></span><span
                                        class="fa-regular fa-star text-warning-300 fs--1 me-1"></span>
                                    <p class="ms-1 mb-0">&amp; above</p>
                                </div>
                                <div class="d-flex align-items-center mb-1"><input class="form-check-input me-3"
                                        id="flexRadio3" type="radio" name="flexRadio"><span
                                        class="fa fa-star text-warning fs--1 me-1"></span><span
                                        class="fa fa-star text-warning fs--1 me-1"></span><span
                                        class="fa fa-star text-warning fs--1 me-1"></span><span
                                        class="fa-regular fa-star text-warning-300 fs--1 me-1"></span><span
                                        class="fa-regular fa-star text-warning-300 fs--1 me-1"></span>
                                    <p class="ms-1 mb-0">&amp; above </p>
                                </div>
                                <div class="d-flex align-items-center mb-1"><input class="form-check-input me-3"
                                        id="flexRadio4" type="radio" name="flexRadio"><span
                                        class="fa fa-star text-warning fs--1 me-1"></span><span
                                        class="fa fa-star text-warning fs--1 me-1"></span><span
                                        class="fa-regular fa-star text-warning-300 fs--1 me-1"></span><span
                                        class="fa-regular fa-star text-warning-300 fs--1 me-1"></span><span
                                        class="fa-regular fa-star text-warning-300 fs--1 me-1"></span>
                                    <p class="ms-1 mb-0">&amp; above</p>
                                </div>
                                <div class="d-flex align-items-center mb-3"><input class="form-check-input me-3"
                                        id="flexRadio5" type="radio" name="flexRadio"><span
                                        class="fa fa-star text-warning fs--1 me-1"></span><span
                                        class="fa-regular fa-star text-warning-300 fs--1 me-1"></span><span
                                        class="fa-regular fa-star text-warning-300 fs--1 me-1"></span><span
                                        class="fa-regular fa-star text-warning-300 fs--1 me-1"></span><span
                                        class="fa-regular fa-star text-warning-300 fs--1 me-1"></span>
                                    <p class="ms-1 mb-0">&amp; above </p>
                                </div>
                            </div>
                        </div>
                        <div class="phoenix-offcanvas-backdrop d-lg-none" data-phoenix-backdrop></div>
                    </form>
                </div>
                <div class="col-lg-9 col-xxl-10">
                    <div class="row">
                        @foreach ($produk as $pf)
                            <div class="col-12 col-xl-4 mt-2">
                                <div class="card mr-3">
                                    <div class="position-relative text-decoration-none product-card h-100">
                                        <div class="d-flex flex-column justify-content-between h-100">
                                            <div>
                                                <div class="border border-1 rounded-3 position-relative mb-3">
                                                    <a href="{{ route('wishlist.add', $pf->id) }}"
                                                        class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                                                        {{-- data-bs-toggle="tooltip" data-bs-placement="top" --}}
                                                        title="Add to wishlist">
                                                        <span class="fas fa-heart d-block-hover"></span>
                                                        <span class="far fa-heart d-none-hover"></span>
                                                    </a>
                                                    <img class="card-img-top img-fluid"
                                                        src="{{ asset('storage/Product/' . $pf->path_produk) }}"
                                                        alt="{{ $pf->nama_produk }}"
                                                        style="width: 300px; height: 200px; object-fit: cover" />
                                                </div>
                                                <div class="card-body">
                                                    <a href="{{ route('detail.produk', $pf->id) }}"
                                                        class="stretched-link"></a>
                                                    <h6 class="card-title mb-2 lh-sm line-clamp-3 product-name">
                                                        {{ Str::limit($pf->nama_produk, 33, $end = '...') }}</h6>
                                                    </a>
                                                    <p class="fs--1 text-1000 fw-bold mb-2">Stock {{ $pf->stok }}</p>
                                                    <p class="fs--1">
                                                        @if (!is_null($pf->rating))
                                                            @if ($pf->rating - floor($pf->rating) < 0.5)
                                                                @for ($i = 0; $i < floor($pf->rating); $i++)
                                                                    <span class="fa fa-star text-warning"></span>
                                                                @endfor
                                                            @else
                                                                @for ($i = 0; $i < ceil($pf->rating); $i++)
                                                                    <span class="fa fa-star text-warning"></span>
                                                                @endfor
                                                            @endif
                                                            <span
                                                                class="text-500 fw-semi-bold ms-1">({{ $pf->totalulasan }}
                                                                people rated)</span>
                                                        @else
                                                            <p>There are no reviews</p>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="d-flex align-items-center mb-1">
                                                    <h3 class="text-1100 mb-0">
                                                        Rp.{{ number_format($pf->harga, 0, ',', '.') }}</h3>
                                                    <div class="flex-grow-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
