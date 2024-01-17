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
                            data-bs-dismiss="search"><button class="btn btn-link btn-close-falcon p-0"
                                aria-label="Close"></button></div>
                        <div class="dropdown-menu border border-300 font-base start-0 py-0 overflow-hidden w-100">
                            <div class="scrollbar-overlay" style="max-height: 30rem;">
                                <div class="list pb-3">
                                    <h6 class="dropdown-header text-1000 fs--2 py-2">24 <span
                                            class="text-500">results</span></h6>
                                    <hr class="text-200 my-0" />
                                    <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Recently
                                        Searched </h6>
                                    <div class="py-2"><a class="dropdown-item" href="../landing/product-details.html">
                                            <div class="d-flex align-items-center">
                                                <div class="fw-normal text-1000 title"><span
                                                        class="fa-solid fa-clock-rotate-left"
                                                        data-fa-transform="shrink-2"></span> Store Macbook</div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="../landing/product-details.html">
                                            <div class="d-flex align-items-center">
                                                <div class="fw-normal text-1000 title"> <span
                                                        class="fa-solid fa-clock-rotate-left"
                                                        data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                                            </div>
                                        </a>
                                    </div>
                                    <hr class="text-200 my-0" />
                                    <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Products
                                    </h6>
                                    <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center"
                                            href="../landing/product-details.html">
                                            <div class="file-thumbnail me-2"><img class="h-100 w-100 fit-cover rounded-3"
                                                    src="../../../assets/img/products/60x60/3.png" alt="" /></div>
                                            <div class="flex-1">
                                                <h6 class="mb-0 text-1000 title">MacBook Air - 13″</h6>
                                                <p class="fs--2 mb-0 d-flex text-700"><span class="fw-medium text-600">8GB
                                                        Memory - 1.6GHz - 128GB Storage</span></p>
                                            </div>
                                        </a>
                                        <a class="dropdown-item py-2 d-flex align-items-center"
                                            href="../landing/product-details.html">
                                            <div class="file-thumbnail me-2"><img class="img-fluid"
                                                    src="../../../assets/img/products/60x60/3.png" alt="" /></div>
                                            <div class="flex-1">
                                                <h6 class="mb-0 text-1000 title">MacBook Pro - 13″</h6>
                                                <p class="fs--2 mb-0 d-flex text-700"><span
                                                        class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span></p>
                                            </div>
                                        </a>
                                    </div>
                                    <hr class="text-200 my-0" />
                                    <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Quick
                                        Links</h6>
                                    <div class="py-2"><a class="dropdown-item" href="../landing/product-details.html">
                                            <div class="d-flex align-items-center">
                                                <div class="fw-normal text-1000 title"><span
                                                        class="fa-solid fa-link text-900"
                                                        data-fa-transform="shrink-2"></span> Support MacBook House</div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="../landing/product-details.html">
                                            <div class="d-flex align-items-center">
                                                <div class="fw-normal text-1000 title"> <span
                                                        class="fa-solid fa-link text-900"
                                                        data-fa-transform="shrink-2"></span> Store MacBook″</div>
                                            </div>
                                        </a>
                                    </div>
                                    <hr class="text-200 my-0" />
                                    <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Files
                                    </h6>
                                    <div class="py-2"><a class="dropdown-item" href="../landing/product-details.html">
                                            <div class="d-flex align-items-center">
                                                <div class="fw-normal text-1000 title"><span
                                                        class="fa-solid fa-file-zipper text-900"
                                                        data-fa-transform="shrink-2"></span> Library MacBook folder.rar
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="../landing/product-details.html">
                                            <div class="d-flex align-items-center">
                                                <div class="fw-normal text-1000 title"> <span
                                                        class="fa-solid fa-file-lines text-900"
                                                        data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="../landing/product-details.html">
                                            <div class="d-flex align-items-center">
                                                <div class="fw-normal text-1000 title"> <span
                                                        class="fa-solid fa-image text-900"
                                                        data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                                            </div>
                                        </a>
                                    </div>
                                    <hr class="text-200 my-0" />
                                    <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Members
                                    </h6>
                                    <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center"
                                            href="../../../pages/members.html">
                                            <div class="avatar avatar-l status-online  me-2 text-900">
                                                <img class="rounded-circle " src="../../../assets/img/team/40x40/10.webp"
                                                    alt="" />
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-0 text-1000 title">Carry Anna</h6>
                                                <p class="fs--2 mb-0 d-flex text-700">anna@technext.it</p>
                                            </div>
                                        </a>
                                        <a class="dropdown-item py-2 d-flex align-items-center"
                                            href="../../../pages/members.html">
                                            <div class="avatar avatar-l  me-2 text-900">
                                                <img class="rounded-circle " src="../../../assets/img/team/40x40/12.webp"
                                                    alt="" />
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-0 text-1000 title">John Smith</h6>
                                                <p class="fs--2 mb-0 d-flex text-700">smith@technext.it</p>
                                            </div>
                                        </a>
                                    </div>
                                    <hr class="text-200 my-0" />
                                    <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Related
                                        Searches</h6>
                                    <div class="py-2"><a class="dropdown-item" href="../landing/product-details.html">
                                            <div class="d-flex align-items-center">
                                                <div class="fw-normal text-1000 title"><span
                                                        class="fa-brands fa-firefox-browser text-900"
                                                        data-fa-transform="shrink-2"></span> Search in the Web MacBook
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="../landing/product-details.html">
                                            <div class="d-flex align-items-center">
                                                <div class="fw-normal text-1000 title"> <span
                                                        class="fa-brands fa-chrome text-900"
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
       {{-- {{ TAMBAH }} --}}
    <form class="mb-9" action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row g-5">
          <div class="col-12 col-xl-8">
            <h4 class="mb-3">Product Title</h4><input class="form-control mb-5" type="text" name="nama_produk"
              placeholder="Write title here..." />
            <div class="mb-6">
              <h4 class="mb-3"> Product Description</h4>
              <textarea class="tinymce" name="deskripsi"
                data-tinymce='{"height":"15rem","placeholder":"Write a description here...","plugins": "nonbreaking"}'></textarea>
            </div>
            <h4 class="mb-3">Display images</h4>
            <div>
          <input type="file" name="path_produk" id=""
              placeholder=""
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white "
              required>
          </div>

            {{-- <div class="dropzone dropzone-multiple p-0" id="dropzone" data-dropzone="data-dropzone"
              data-options='{"url":"valid/url","maxFiles":1,"dictDefaultMessage":"Choose or Drop a file here"}'>
              <div class="fallback"><input type="file" name="image" /></div>
              <div class="dz-message" data-dz-message="data-dz-message">
                <div class="dz-message-text"><img class="me-2" src="../../../assets/img/icons/cloud-upload.svg"
                    width="25" alt="" />Drop your file here</div>
              </div>
              <div class="dz-preview dz-preview-multiple m-0 d-flex flex-column">
                <div class="d-flex pb-3 border-bottom media px-2">
                  <div class="border border-300 p-2 rounded-2 me-2"><img class="rounded-2 dz-image"
                      src="../../../assets/img/icons/file.png" alt="..." data-dz-thumbnail="data-dz-thumbnail" />
                  </div>
                  <div class="flex-1 d-flex flex-between-center">
                    <div>
                      <h6 data-dz-name="data-dz-name"></h6>
                      <div class="d-flex align-items-center">
                        <p class="mb-0 fs--1 text-400 lh-1" data-dz-size="data-dz-size"></p>
                        <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                      </div><span class="fs--2 text-danger" data-dz-errormessage="data-dz-errormessage"></span>
                    </div>
                    <div class="dropdown font-sans-serif"><button
                        class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                          class="fas fa-ellipsis-h"></span></button>
                      <div class="dropdown-menu dropdown-menu-end border py-2"><a class="dropdown-item" href="#!"
                          data-dz-remove="data-dz-remove">Remove File</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}

          </div>
          <div class="col-12 col-xl-4">
            <div class="row g-2">
              <div class="col-12 col-xl-12">
                <div class="card mb-3">
                  <div class="card-body">
                    <h4 class="card-title mb-4">Organize</h4>
                    <div class="row gx-3">
                      <div class="col-12 col-sm-6 col-xl-12">
                        <div class="mb-4">
                          <div class="d-flex flex-wrap mb-2">
                            <h5 class="mb-0 text-1000 me-2">kategori</h5><a class="fw-bold fs--1" href="#!"></a>
                          </div>
                          <select class="form-select mb-3 @error('kategori_id') is-invalid @enderror"name="kategori_id" value="{{ old('kategori_id') }}"aria-label="category">
                          @foreach ($kategori as $kategoris)
                              <option value="{{ $kategoris->id }}">
                                  {{ $kategoris->nama_kategori }}
                              </option>
                          @endforeach
                      </select>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-xl-12">
                        <div class="mb-4">
                          <h5 class="mb-2 text-1000">stcok</h5><input class="form-control mb-xl-3" type="number"
                            name="stok" placeholder="stock" />
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 col-xl-12">
                        <div class="mb-4">
                          <h5 class="mb-2 text-1000">price</h5><input class="form-control mb-xl-3" type="number"
                            name="harga" placeholder="price" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row gx-3">
                  <div class="col-12">
                    <div class="d-flex justify-content-center">
                      <button class="btn btn-danger me-2 mb-2 mb-sm-0" type="button">
                        <i class="fas fa-trash-alt"></i> Discard
                      </button>
                      <button class="btn btn-primary mb-2 mb-sm-0" type="submit">
                        <i class="fas fa-check"></i> Publish product
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </form>
@endsection