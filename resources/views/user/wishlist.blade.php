@extends('layout_user.navbar')
@section('content')
    @include('Asset.SweetAlert')
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-5 pb-9">
        <div class="container-small cart">
            <h2 class="mb-5">Wishlist
                <span class="text-700 fw-normal ms-2">
                    <span>({{ $productsInWishlist->count() }})</span>
                </span>
            </h2>
            <div class="border-y" id="productWishlistTable"
                data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":5,"pagination":true}'>
                <div class="table-responsive scrollbar">
                    <table class="table fs--1 mb-0">
                        <thead>
                            <tr>
                                <th class="sort white-space-nowrap align-middle fs--2" scope="col" style="width:7%;"></th>
                                <th class="sort white-space-nowrap align-middle" scope="col"style="width:30%; min-width:250px;">PRODUCTS</th>
                                <th class="sort align-middle" scope="col" style="width:16%;">CATEGORY</th>
                                <th class="sort align-middle" scope="col" style="width:10%;">STOK</th>
                                <th class="sort align-middle text-center" scope="col" style="width:10%;">PRICE</th>
                                <th class="sort align-middle text-end pe-0" scope="col" style="width:35%;"> </th>
                            </tr>
                        </thead>
                        <tbody class="list" id="profile-wishlist-table-body">
                            @foreach ($productsInWishlist as $item)
                                @php
                                    $produk = $item->product;
                                @endphp
                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                    <td class="align-middle white-space-nowrap ps-0 py-0">
                                        <a class="border rounded-2 d-inline-block" href="product-details.html">
                                            <img src="{{ asset('storage/Product/' . $produk->path_produk) }}" alt=""
                                                width="53" />
                                        </a>
                                    </td>
                                    <td class="products align-middle pe-11">
                                        <a class="fw-semi-bold mb-0 line-clamp-1"
                                            href="{{ route('detail.produk', $produk->id) }}">{{ $produk->nama_produk }}</a>
                                    </td>
                                    <td class="color align-middle white-space-nowrap fs--1 text-900">
                                        {{ $produk->kategori ? $produk->kategori->nama_kategori : 'Tidak Ada Kategori' }}
                                    </td>
                                    <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">
                                        {{ $produk->stok }}</td>
                                    <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">
                                        Rp. {{ number_format($produk->harga, 0, ',', '.') }}</td>
                                    <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0">
                                        <div class="d-flex align-items- justify-content-end">
                                            <form action="{{ route('wishlist.delete', $produk->id) }}" method="POST" enctype="multipart/form-data" class="me-2">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm text-500 hover-text-600">
                                                    <span class="fas fa-trash"></span>
                                                </button>
                                            </form>
                                            <form action="{{ route('shop.order', $produk->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <button class="btn btn-primary fs--2" @if ($produk->stok <= 0) disabled @endif>
                                                    <span class="fas fa-shopping-cart me-1 fs--2"></span>Add to cart
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                    <div class="col-auto d-flex">
                        <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a
                            class="fw-semi-bold" href="#!" data-list-view="*">View all<span
                                class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a
                            class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span
                                class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                    </div>
                    <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span
                                class="fas fa-chevron-left"></span></button>
                        <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span
                                class="fas fa-chevron-right"></span></button>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->
    </section>
@endsection
