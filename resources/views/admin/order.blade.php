@extends('layout_admin.app')

@section('content')
    @include('Asset.SweetAlert')
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
        <nav class="mb-2" aria-label="breadcrumb">
        </nav>
        <div class="mb-9">
            <div class="row g-3 mb-4">
                <div class="col-auto">
                    <h2 class="mb-0">Order</h2>
                </div>
            </div>
            <div id="products"
                data-list='{"valueNames":["product","price","category","tags","vendor","time"],"page":10,"pagination":true}'>
                <div class="mb-4">
                    <div class="d-flex flex-wrap gap-3">
                        {{-- <div class="search-box">
                            <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                                    class="form-control search-input search" type="search" placeholder="Search products"
                                    aria-label="Search" />
                                <span class="fas fa-search search-box-icon"></span>
                            </form>
                        </div> --}}
                        <div class="scrollbar overflow-hidden-y">
                            <div class="btn-group position-static" role="group">
                                <div class="ms-xxl-auto">
                                    <button class="btn btn-link text-900 me-4 px-0"></button>
                                    <a href="{{ route('tambah.produk') }}" class="btn btn-primary" id="addBtn">
                                        <span class="fas fa-plus me-2"></span>Add order
                                    </a>
                                </div>
                            </div>
                        </div>

                        {{-- {{ TABLE }} --}}
                        <div class="table-responsive scrollbar mx-n1 px-1">
                            <table class="table fs-1 mb-0">
                                <thead>
                                    <tr class="text-center">
                                        <th class="white-space-nowrap align-middle ps-4 fs--1 text-dark"
                                            style="width:350px;" data-sort="no">NO</th>
                                        <th class="white-space-nowrap align-middle ps-4 fs--1 text-dark"
                                            style="width:350px;" data-sort="pelanggan">INVOICE</th>
                                        <th class="white-space-nowrap align-middle ps-4 fs--1 text-dark"
                                            style="width:350px;" data-sort="pelanggan">NAME CUSTOMERS</th>
                                        <th class="white-space-nowrap align-middle ps-4 fs--1 text-dark"
                                            style="width:350px;" data-sort="email">EMAIL</th>
                                        <th class="white-space-nowrap align-middle fs--1 ps-4 text-dark"
                                            style="width:150px;" data-sort="detail">ORDER DETAILS</th>
                                        <th class="white-space-nowrap align-middle fs--1 ps-4 text-dark"
                                            style="width:150px;" data-sort="status">STATUS</th>
                                        <th class="white-space-nowrap align-middle fs--1 ps-4 text-dark"
                                            style="width:50px;" data-sort="action">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="products-table-body">
                                    @if ($order->count() > 0)
                                        @php
                                            $detail_pesananid = 0;
                                            $no = 0;
                                            $totalproduktiappesanan = [];
                                        @endphp
                                        @foreach ($order as $orders)
                                            @if ($orders->id != $detail_pesananid)
                                                @php
                                                    $detail_pesananid = $orders->id;
                                                    $no += 1;
                                                    $totalproduktiappesanan[$orders->id] = 1;
                                                @endphp
                                                <tr class="position-static text-center">
                                                    <td class="align-middle review fs-0 text-center ps-4">
                                                        {{ $no }}</td>
                                                    <td class="align-middle review fs-0 text-center ps-4">
                                                        <img src="{{ asset('storage/Invoice/' . $orders->invoice) }}"
                                                        alt="" width="50%" height="50" style="object-fit: cover"
                                                        class="mx-auto" /></td>
                                                    <td class="align-middle white-space-nowrap mx-auto py-0">
                                                        <button type="button" class="btn btn-link primary"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#useridModal{{ $orders->user_id }}">
                                                            <span
                                                                class="fw-semi-bold fs--1  line-clamp-3 mb-0">{{ $orders->name }}</span>
                                                        </button>
                                                    </td>
                                                    <td class="align-middle white-space-nowrap py-0">
                                                        <span
                                                            class="fw-semi-bold fs--1 line-clamp-3 mb-0">{{ $orders->email }}</span>
                                                    </td>
                                                    <td class="produks align-middle ps-4">
                                                        <button type="button" class="btn btn-link primary"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#productDetailModal{{ $orders->id }}">
                                                            Detail
                                                        </button>
                                                    </td>
                                                    <td
                                                        class="price align-middle white-space-nowrap fw-bold fs--1 text-700 ps-4">
                                                        <span
                                                            class="badge badge-phoenix fs--2
                                                        @if ($orders->status == 'pending') badge-phoenix-warning
                                                        @elseif($orders->status == 'shipped')
                                                            badge-phoenix-info
                                                        @elseif($orders->status == 'delivered')
                                                            badge-phoenix-success
                                                        @elseif($orders->status == 'completed')
                                                        badge-phoenix-success @endif
                                                        ">
                                                            {{ $orders->status }}
                                                        </span>
                                                    </td>
                                                    <td class="tags align-middle review pb-2 ps-3 fs--1"
                                                        style="width: 200px;">
                                                        @if ($orders->status == 'pending' or $orders->status == 'delivered')
                                                            <form action="{{ route('order.update', $orders->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('put')
                                                                <input type="hidden" name="status"
                                                                    value="{{ $orders->status }}">
                                                                <button type="submit"
                                                                    class="btn btn-link dropdown-item text-primary">
                                                                    @if ($orders->status == 'pending')
                                                                    Set Shipping
                                                                    @else
                                                                    Completed
                                                                    @endif
                                                                </button>
                                                            </form>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @else
                                                @php
                                                    $totalproduktiappesanan[$orders->id] += 1;
                                                @endphp
                                            @endif
                                        @endforeach
                                </tbody>
                            </table>

                            @php
                                $detail = '';
                                $counter = 1;
                            @endphp

                            @foreach ($order as $orders)
                                @if ($counter < $totalproduktiappesanan[$orders->id])
                                    @php
                                        $detail .=
                                            '<tr><td class="text-center product align-middle ps-4">' .
                                            $counter .
                                            '</td><td class="text-center product align-middle ps-4">' .
                                            '<img src="' .
                                            asset('storage/Product/' . $orders->path_produk) .
                                            '"
                                                                alt="" width="50%" height="50%"
                                                                style="object-fit: cover" class="mx-auto" />' .
                                            '</td><td class="text-center product align-middle ps-4">' .
                                            $orders->nama_produk .
                                            '</td><td class="text-center product align-middle ps-4">' .
                                            $orders->jumlah .
                                            '</td><td class="text-center product align-middle ps-4">' .
                                            $orders->total .
                                            '</td></tr>';
                                        $counter += 1;
                                    @endphp
                                @else
                                    @php
                                        $detail .=
                                            '<tr><td class="text-center product align-middle ps-4">' .
                                            $counter .
                                            '</td><td class="text-center product align-middle ps-4">' .
                                            '<img src="' .
                                            asset('storage/Product/' . $orders->path_produk) .
                                            '"
                                                                alt="" width="50%" height="50%"
                                                                style="object-fit: cover" class="mx-auto" />' .
                                            '</td><td class="text-center product align-middle ps-4">' .
                                            $orders->nama_produk .
                                            '</td><td class="text-center product align-middle ps-4">' .
                                            $orders->jumlah .
                                            '</td><td class="text-center product align-middle ps-4">' .
                                            $orders->total .
                                            '</td></tr>';
                                        $counter = 1;
                                    @endphp

                                    <!-- Modal -->
                                    <div class="modal fade" id="productDetailModal{{ $orders->id }}" tabindex="-1"
                                        aria-labelledby="productDetailModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="productDetailModalLabel">
                                                        Product Detail</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div>
                                                        <table class="table fs--1 mb-0">
                                                            <thead>
                                                                <tr>
                                                                    <th class="sort text-center white-space-nowrap align-middle ps-4"
                                                                        style="width: 250px">
                                                                        <span>NO</span>
                                                                    </th>
                                                                    <th class="sort text-center white-space-nowrap align-middle ps-4"
                                                                        scope="col" style="width:350px;">
                                                                    </th>
                                                                    <th class="sort text-center white-space-nowrap align-middle ps-4"
                                                                        scope="col" style="width:350px;">
                                                                        PRODUCT NAME</th>
                                                                    <th class="sort text-center white-space-nowrap align-middle ps-4"
                                                                        scope="col" style="width:250px;">
                                                                        JUMLAH</th>
                                                                    <th class="sort text-center white-space-nowrap align-middle ps-4"
                                                                        scope="col" style="width:350px;">
                                                                        TOTAL HARGA</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="list" id="products-table-body">
                                                                @php
                                                                    echo $detail;
                                                                @endphp
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <!-- Jika diperlukan, tambahkan tombol lain di sini -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @php
                                        $detail = '';
                                    @endphp
                                @endif
                            @endforeach

                            @php
                                $user_id = 0;
                            @endphp
                            @foreach ($order as $orders)
                                @if ($orders->user_id != $user_id)
                                    @php
                                        $user_id = $orders->user_id;
                                    @endphp
                                    <div class="modal fade" id="useridModal{{ $orders->user_id }}" tabindex="-1"
                                        aria-labelledby="useridModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="useridModalLabel">
                                                        Customer Detail</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div>
                                                        <table class="table fs--1 mb-0">
                                                            <thead>
                                                                <tr>
                                                                    <th class="sort text-center white-space-nowrap align-middle ps-4"
                                                                        scope="col" style="width:350px;">
                                                                        CUSTOMER NAME
                                                                    </th>
                                                                    <th class="sort text-center white-space-nowrap align-middle ps-4"
                                                                        scope="col" style="width:350px;">
                                                                        EMAIL</th>
                                                                    <th class="sort text-center white-space-nowrap align-middle ps-4"
                                                                        scope="col" style="width:250px;">
                                                                        ADDRESS</th>
                                                                    <th class="sort text-center white-space-nowrap align-middle ps-4"
                                                                        scope="col" style="width:350px;">
                                                                        PHONE NUMBER</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="list" id="products-table-body">
                                                                <tr>
                                                                    <td class="text-center product align-middle ps-4">{{ $orders->name }}</td>
                                                                    <td class="text-center product align-middle ps-4">{{ $orders->email }}</td>
                                                                    <td class="text-center product align-middle ps-4">{{ $orders->address }}</td>
                                                                    <td class="text-center product align-middle ps-4">{{ $orders->telp }}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <!-- Jika diperlukan, tambahkan tombol lain di sini -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            @endif
                        </div>
                        {{-- @php
                            print_r($totalproduktiappesanan);
                        @endphp --}}
                    </div>
                @endsection
