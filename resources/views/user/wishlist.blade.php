@extends('layout_user.navbar')
@section('content')
@include('Asset.SweetAlert')
<!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-5 pb-9">
        <div class="container-small cart">
          <h2 class="mb-5">Wishlist<span class="text-700 fw-normal ms-2">(43)</span></h2>
          <div class="border-y" id="productWishlistTable" data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":5,"pagination":true}'>
            <div class="table-responsive scrollbar">
              <table class="table fs--1 mb-0">
                <thead>
                  <tr>
                    <th class="sort white-space-nowrap align-middle fs--2" scope="col" style="width:7%;"></th>
                    <th class="sort white-space-nowrap align-middle" scope="col" style="width:30%; min-width:250px;" data-sort="products">PRODUCTS</th>
                    <th class="sort align-middle" scope="col" data-sort="color" style="width:16%;">COLOR</th>
                    <th class="sort align-middle" scope="col" data-sort="size" style="width:10%;">SIZE</th>
                    <th class="sort align-middle text-end" scope="col" data-sort="price" style="width:10%;">PRICE</th>
                    <th class="sort align-middle text-end pe-0" scope="col" style="width:35%;"> </th>
                  </tr>
                </thead>
                <tbody class="list" id="profile-wishlist-table-body">
                    @foreach ($productsInWishlist as $produk)
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                            <td class="align-middle white-space-nowrap ps-0 py-0">
                                <a class="border rounded-2 d-inline-block" href="product-details.html">
                                    <img src="{{ asset('storage/Product/' . $produk->path_produk) }}" alt="" width="53" />
                                </a>
                            </td>
                            <td class="products align-middle pe-11">
                                <a class="fw-semi-bold mb-0 line-clamp-1" href="product-details.html">{{ $produk->nama_produk }}</a>
                            </td>
                            <td class="color align-middle white-space-nowrap fs--1 text-900">{{ $produk->kategori ? $produk->kategori->nama_kategori : 'Tidak Ada Kategori' }}</td>
                            <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">{{ $produk->stok }}</td>
                            <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">Rp.{{ $produk->harga }}</td>
                            <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0">
                                <form action="{{ route('shop.order', $produk->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <button class="btn btn-sm text-500 hover-text-600 me-2" @if ($produk->stok <= 0) disabled @endif>
                                        <span class="fas fa-trash"></span>
                                    </button>
                                    <button class="btn btn-primary fs--2">
                                        <span class="fas fa-shopping-cart me-1 fs--2"></span>Add to cart
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
              <div class="col-auto d-flex">
                <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
              </div>
              <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-100 dark__bg-1100 py-9">
        <div class="container-small">
          <div class="row justify-content-between gy-4">
            <div class="col-12 col-lg-4">
              <div class="d-flex align-items-center mb-3"><img src="/assets/img/logoapple.png" alt="phoenix" width="27" />
                <p class="logo-text ms-2">iVibe</p>
              </div>
              <p class="text-700 mb-1 fw-semi-bold lh-sm fs--1">
                iVibe is a leading retailer in Indonesia that provides the latest technology products and premium accessories. They offer a complete range of innovative products and invite customers to experience and test products in their stores. Apart from that, iVibe also provides training services and after-sales support through an experienced team.</p>
            </div>
            <div class="col-6 col-md-auto">
              <h5 class="fw-bolder mb-3">About iVibe</h5>
              <div class="d-flex flex-column"><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Careers</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Affiliate Program</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Privacy Policy</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Terms & Conditions</a></div>
            </div>
            <div class="col-6 col-md-auto">
              <h5 class="fw-bolder mb-3">Stay Connected</h5>
              <div class="d-flex flex-column"><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Jalan Ijen No. 123 Kota Malang, Indonesia</a><a class="mb-1 fw-semi-bold fs--1 d-flex" href="#!"><span class="fab fa-facebook-square text-primary me-2 fs-0"></span><span class="text-800">+62 823-3107-9449</span></a><a class="mb-1 fw-semi-bold fs--1 d-flex" href="#!"><span class="fab fa-twitter-square text-info me-2 fs-0"></span><span class="text-800">Email : info@ivibe.com</span></a></div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->
  @endsection
