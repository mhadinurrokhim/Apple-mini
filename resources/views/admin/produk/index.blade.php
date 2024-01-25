@extends('layout_admin.app')

@section('content')
  <div class="modal fade" id="searchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true"
    data-phoenix-modal="data-phoenix-modal" style="--phoenix-backdrop-opacity: 1;">
    <div class="modal-dialog">
      <div class="modal-content mt-15 rounded-pill">
        <div class="modal-body p-0">
          <div class="search-box navbar-top-search-box" data-list='{"valueNames":["title"]}' style="width: auto;">
            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                class="form-control search-input fuzzy-search rounded-pill form-control-lg" type="search"
                placeholder="Search..." aria-label="Search" />
              <span class="fas fa-search search-box-icon"></span>
            </form>
            <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none"
              data-bs-dismiss="search"><button class="btn btn-link btn-close-falcon p-0" aria-label="Close"></button>
            </div>
            <div class="dropdown-menu border border-300 font-base start-0 py-0 overflow-hidden w-100">
              <div class="scrollbar-overlay" style="max-height: 30rem;">
                <div class="list pb-3">
                  <h6 class="dropdown-header text-1000 fs--2 py-2">24 <span class="text-500">results</span></h6>
                  <hr class="text-200 my-0" />
                  <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Recently Searched </h6>
                  <div class="py-2"><a class="dropdown-item" href="../landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"><span class="fa-solid fa-clock-rotate-left"
                            data-fa-transform="shrink-2"></span> Store Macbook</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"> <span class="fa-solid fa-clock-rotate-left"
                            data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                      </div>
                    </a>
                  </div>
                  <hr class="text-200 my-0" />
                  <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Products</h6>
                  <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center"
                      href="../landing/product-details.html">
                      <div class="file-thumbnail me-2"><img class="h-100 w-100 fit-cover rounded-3"
                          src="../../../assets/img/products/60x60/3.png" alt="" /></div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-1000 title">MacBook Air - 13″</h6>
                        <p class="fs--2 mb-0 d-flex text-700"><span class="fw-medium text-600">8GB Memory - 1.6GHz - 128GB
                            Storage</span></p>
                      </div>
                    </a>
                    <a class="dropdown-item py-2 d-flex align-items-center" href="../landing/product-details.html">
                      <div class="file-thumbnail me-2"><img class="img-fluid"
                          src="../../../assets/img/products/60x60/3.png" alt="" /></div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-1000 title">MacBook Pro - 13″</h6>
                        <p class="fs--2 mb-0 d-flex text-700"><span class="fw-medium text-600 ms-2">30 Sep at 12:30
                            PM</span></p>
                      </div>
                    </a>
                  </div>
                  <hr class="text-200 my-0" />
                  <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Quick Links</h6>
                  <div class="py-2"><a class="dropdown-item" href="../landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"><span class="fa-solid fa-link text-900"
                            data-fa-transform="shrink-2"></span> Support MacBook House</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"> <span class="fa-solid fa-link text-900"
                            data-fa-transform="shrink-2"></span> Store MacBook″</div>
                      </div>
                    </a>
                  </div>
                  <hr class="text-200 my-0" />
                  <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Files</h6>
                  <div class="py-2"><a class="dropdown-item" href="../landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"><span class="fa-solid fa-file-zipper text-900"
                            data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"> <span class="fa-solid fa-file-lines text-900"
                            data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"> <span class="fa-solid fa-image text-900"
                            data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                      </div>
                    </a>
                  </div>
                  <hr class="text-200 my-0" />
                  <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Members</h6>
                  <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center"
                      href="../../../pages/members.html">
                      <div class="avatar avatar-l status-online  me-2 text-900">
                        <img class="rounded-circle " src="../../../assets/img/team/40x40/10.webp" alt="" />
                      </div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-1000 title">Carry Anna</h6>
                        <p class="fs--2 mb-0 d-flex text-700">anna@technext.it</p>
                      </div>
                    </a>
                    <a class="dropdown-item py-2 d-flex align-items-center" href="../../../pages/members.html">
                      <div class="avatar avatar-l  me-2 text-900">
                        <img class="rounded-circle " src="../../../assets/img/team/40x40/12.webp" alt="" />
                      </div>
                      <div class="flex-1">
                        <h6 class="mb-0 text-1000 title">John Smith</h6>
                        <p class="fs--2 mb-0 d-flex text-700">smith@technext.it</p>
                      </div>
                    </a>
                  </div>
                  <hr class="text-200 my-0" />
                  <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Related Searches</h6>
                  <div class="py-2"><a class="dropdown-item" href="../landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"><span class="fa-brands fa-firefox-browser text-900"
                            data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                      </div>
                    </a>
                    <a class="dropdown-item" href="../landing/product-details.html">
                      <div class="d-flex align-items-center">
                        <div class="fw-normal text-1000 title"> <span class="fa-brands fa-chrome text-900"
                            data-fa-transform="shrink-2"></span> Store MacBook″</div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="text-center">
                  <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script>
    var navbarTopShape = window.config.config.phoenixNavbarTopShape;
    var navbarPosition = window.config.config.phoenixNavbarPosition;
    var body = document.querySelector('body');
    var navbarDefault = document.querySelector('#navbarDefault');
    var navbarTop = document.querySelector('#navbarTop');
    var topNavSlim = document.querySelector('#topNavSlim');
    var navbarTopSlim = document.querySelector('#navbarTopSlim');
    var navbarCombo = document.querySelector('#navbarCombo');
    var navbarComboSlim = document.querySelector('#navbarComboSlim');
    var dualNav = document.querySelector('#dualNav');

    var documentElement = document.documentElement;
    var navbarVertical = document.querySelector('.navbar-vertical');

    if (navbarPosition === 'dual-nav') {
      topNavSlim.remove();
      navbarTop.remove();
      navbarVertical.remove();
      navbarTopSlim.remove();
      navbarCombo.remove();
      navbarComboSlim.remove();
      navbarDefault.remove();
      dualNav.removeAttribute('style');
      documentElement.classList.add('dual-nav');
    } else if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
      navbarDefault.remove();
      navbarTop.remove();
      navbarTopSlim.remove();
      navbarCombo.remove();
      navbarComboSlim.remove();
      topNavSlim.style.display = 'block';
      navbarVertical.style.display = 'inline-block';
      body.classList.add('nav-slim');
    } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
      navbarDefault.remove();
      navbarVertical.remove();
      navbarTop.remove();
      topNavSlim.remove();
      navbarCombo.remove();
      navbarComboSlim.remove();
      navbarTopSlim.removeAttribute('style');
      body.classList.add('nav-slim');
    } else if (navbarTopShape === 'slim' && navbarPosition === 'combo') {
      navbarDefault.remove();
      //- navbarVertical.remove();
      navbarTop.remove();
      topNavSlim.remove();
      navbarCombo.remove();
      navbarTopSlim.remove();
      navbarComboSlim.removeAttribute('style');
      navbarVertical.removeAttribute('style');
      body.classList.add('nav-slim');
    } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
      navbarDefault.remove();
      topNavSlim.remove();
      navbarVertical.remove();
      navbarTopSlim.remove();
      navbarCombo.remove();
      navbarComboSlim.remove();
      navbarTop.removeAttribute('style');
      documentElement.classList.add('navbar-horizontal');
    } else if (navbarTopShape === 'default' && navbarPosition === 'combo') {
      topNavSlim.remove();
      navbarTop.remove();
      navbarTopSlim.remove();
      navbarDefault.remove();
      navbarComboSlim.remove();
      navbarCombo.removeAttribute('style');
      navbarVertical.removeAttribute('style');
      documentElement.classList.add('navbar-combo')

    } else {
      topNavSlim.remove();
      navbarTop.remove();
      navbarTopSlim.remove();
      navbarCombo.remove();
      navbarComboSlim.remove();
      navbarDefault.removeAttribute('style');
      navbarVertical.removeAttribute('style');
    }

    var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
    var navbarTop = document.querySelector('.navbar-top');
    if (navbarTopStyle === 'darker') {
      navbarTop.classList.add('navbar-darker');
    }

    var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
    var navbarVertical = document.querySelector('.navbar-vertical');
    if (navbarVerticalStyle === 'darker') {
      navbarVertical.classList.add('navbar-darker');
    }
  </script>
  <div class="content">
    <nav class="mb-2" aria-label="breadcrumb">
    </nav>
    <nav class="mb-2" aria-label="breadcrumb">
    </nav>
    <div class="mb-9">
      <div class="row g-3 mb-4">
        <div class="col-auto">
          <h2 class="mb-0">Products</h2>
        </div>
      </div>
      <div id="products"
        data-list='{"valueNames":["product","price","category","tags","vendor","time"],"page":10,"pagination":true}'>
        <div class="mb-4">
          <div class="d-flex flex-wrap gap-3">
            <div class="search-box">
                <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search" type="search" placeholder="Search products" aria-label="Search" />
                  <span class="fas fa-search search-box-icon"></span>
                </form>
              </div>
            <div class="scrollbar overflow-hidden-y">
              <div class="btn-group position-static" role="group">
                <div class="ms-xxl-auto">
                  <button class="btn btn-link text-900 me-4 px-0"></button>
                  <a href="{{ route('tambah.produk') }}" class="btn btn-primary" id="addBtn">
                    <span class="fas fa-plus me-2"></span>Add product
                  </a>
                </div>
              </div>
            </div>

            {{-- {{ TABLE }} --}}
            <div class="table-responsive scrollbar mx-n1 px-1">
              <table class="table fs-1 mb-0">
                <thead>
                  <tr class="text-center">

                    <th class="white-space-nowrap align-middle ps-4 fs--1 text-dark" style="width:350px;"
                      data-sort="no">NO</th>
                    <th class="white-space-nowrap align-middle ps-4 fs--1 text-dark" style="width:350px;"
                      data-sort="path_produk">IMAGE</th>
                    <th class="white-space-nowrap align-middle ps-4 fs--1 text-dark" style="width:350px;"
                      data-sort="path_nama">PRODUCT NAME</th>
                    <th class="white-space-nowrap align-middle text-end fs--1 ps-4 text-dark" style="width:150px;"
                      data-sort="harga">PRICE</th>
                    <th class="white-space-nowrap align-middle fs--1 ps-4 text-dark" style="width:150px;"
                      data-sort="categori">CATEGORY</th>
                    <th class="white-space-nowrap align-middle fs--1 ps-4 text-dark" style="width:200px;"
                      data-sort="stok">PRODUCT STOCK</th>
                    <th class="white-space-nowrap align-middle fs--1 ps-4 text-dark" style="width:10px;"
                      data-sort="deskripsi">PRODUCT DESCRIPTION</th>
                    <th class="white-space-nowrap align-middle fs--1 ps-4 text-dark" style="width:50px;"
                      data-sort="ACTION">ACTION</th>
                  </tr>
                </thead>
                <tbody class="list" id="products-table-body text-center">
                  @foreach ($produk as $no => $produks)
                    <tr class="position-static text-center">
                      <td class="align-middle review fs-0 text-center ps-4">
                        {{ $loop->iteration }}
                      </td>
                      <td class="align-middle white-space-nowrap mx-auto text-center py-0">
                        <a class="d-block border rounded-2 mx-auto" href="">
                          <img src="{{ asset('storage/Product/' . $produks->path_produk) }}" alt=""
                            width="100%" height="100" style="object-fit: cover" class="mx-auto" />
                        </a>
                      </td>
                      <td class="ellipsis-text col-1">
                        <p class="fw-semi-bold fs--1  line-clamp-3 mb-0">{{ $produks->nama_produk }}</p>
                      </td>
                      <td class="price align-middle white-space-nowrap text-end fw-bold fs--1  text-700 ps-4">
                        {{ 'Rp ' . number_format($produks->harga, 0, ',', '.') }}</td>

                      <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">
                        {{ $produks->kategori ? $produks->kategori->nama_kategori : 'Tidak Ada Kategori' }}</td>
                      <td class="tags align-middle review pb-2 ps-3 fs--1 " style="width:200px;">{{ $produks->stok }}
                      </td>

                      <td class="ellipsis-text col-1">{{ strip_tags($produks->deskripsi) }}</td>
                      <td class="align-middle review fs-0 text-center ps-4">
                        <a href="{{ route('produk.edit', $produks->id) }}"method="POST" enctype="multipart/form-data"
                          class="btn btn-primary">
                          edit
                        </a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <style>
            .ellipsis-text {
              max-width: 200px;
              /* Sesuaikan dengan lebar maksimum yang diinginkan */
              white-space: nowrap;
              overflow: hidden;
              text-overflow: ellipsis;
              font-size: 14px;
              /* Sesuaikan dengan ukuran font yang diinginkan */
            }
          </style>
          {{-- {{ END }} --}}
        @endsection
