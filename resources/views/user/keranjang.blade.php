@extends('layout_user.navbar')
@section('content')
    @include('Asset.SweetAlert')
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-5 pb-9">
        <div class="container-small cart">
            <nav class="mb-2" aria-label="breadcrumb">

            </nav>
            <h2 class="mb-6">Cart</h2>
            <div class="row g-5">
                <div class="col-12 col-lg-8">
                    <div id="cartTable"
                        data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":10}'>
                        <div class="table-responsive scrollbar mx-n1 px-1">
                            <table class="table fs--1 mb-0 border-top border-200">
                                <thead>
                                    <tr>
                                        <th class="white-space-nowrap align-middle text-center ps-4 fs--1 text-dark"
                                            style="width: 20%; padding-right: 10px;" data-sort="path_produk">IMAGE</th>
                                        <th class="sort white-space-nowrap align-middle text-center" scope="col"
                                            style="max-width: 10%; padding-right: 10px;">PRODUCTS</th>
                                        <th class="sort align-middle text-center" scope="col"
                                            style="width: 10%; padding-right: 10px;">CATEGORY</th>
                                        <th class="sort align-middle text-center" scope="col"
                                            style="width: 20%; padding-right: 10px;">PRICE</th>
                                        <th class="sort align-middle text-center ps-5" scope="col" style="width: 10%;">QUANTITY
                                        </th>
                                        <th class="sort align-middle text-center" scope="col" style="width: 20%;">TOTAL
                                        </th>
                                        <th class="sort align-middle text-center" scope="col" style="width: 10%;">ACTION
                                        </th>
                                        <th class="sort align-middle text-center pe-0" scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="cart-table-body">
                                    @php
                                        $subtotal = 0;
                                        $pesanan_id = [];
                                    @endphp
                                    @if ($pesanans->count() > 0)
                                        @foreach ($pesanans as $pesanan)
                                            @php
                                                array_push($pesanan_id, $pesanan->id);
                                            @endphp
                                            <tr class="cart-table-row btn-reveal-trigger">
                                                <td class="align-middle text-center white-space-nowrap py-0"><a
                                                        class="d-block border rounded-2" href="#"><img
                                                            src="{{ asset('storage/Product/' . $pesanan->produk->path_produk) }}"
                                                            alt="" width="100" /></a></td>
                                                <td class="products align-middle text-center col-2" style="max-width: 50px;">
                                                    <a class="fw-semi-bold mb-0 text-truncate d-inline-block"
                                                        href="#">
                                                        {{ ucfirst(Str::limit($pesanan->produk->nama_produk, 10, $end = '...')) }}
                                                    </a>
                                                </td>
                                                <td class="color align-middle text-center white-space-nowrap fs--1 text-900">
                                                    {{ ucfirst($pesanan->produk->kategori->nama_kategori) }}</td>
                                                <td class="price align-middle text-center text-900 fs--1 fw-semi-bold text-end">Rp.
                                                    {{ number_format($pesanan->produk->harga, 0, ',', '.') }}
                                                </td>
                                                <td class="quantity align-middle text-center fs-0 ps-5">
                                                    <div class="input-group input-group-sm flex-nowrap"
                                                        data-quantity="data-quantity"><button class="btn btn-sm px-2"
                                                            data-type="minus">-</button><input
                                                            class="form-control text-center input-spin-none bg-transparent border-0 px-0"
                                                            type="number" min="1" value="{{ $pesanan->jumlah }}"
                                                            name="jumlah[{{ $pesanan->id }}]"
                                                            aria-label="Amount (to the nearest dollar)" /><button
                                                            class="btn btn-sm px-2" data-type="plus">+</button></div>
                                                </td>
                                                <td class="total align-middle text-center fw-bold text-1000">
                                                    Rp.{{ number_format($pesanan->produk->harga * $pesanan->jumlah, 0, ',', '.') }}
                                                </td>
                                                <td class="align-middle white-space-nowrap pe-0 ps-3">
                                                    <form action="{{ route('keranjang.destroy', $pesanan->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit"
                                                            class="btn btn-sm text-500 hover-text-600 me-2">
                                                            <span class="fas fa-trash"></span>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @php
                                                $subtotal += $pesanan->produk->harga * $pesanan->jumlah;
                                            @endphp
                                        @endforeach
                                        @else
                                            <tr>
                                                <td colspan="8" class="text-center py-4">
                                                    <h3 class="mb-0">There are no item in the cart</h3>
                                                    <img src="{{ asset('assets/img/No data-amico.svg') }}" alt="" style="width: 200px; height: auto; max-width: 100%; display: block; margin: 0 auto;">
                                                    <a href="{{ route('produk.filter') }}" class="btn btn-primary">Continue Shopping</a>
                                                </td>
                                            </tr>
                                        @endif
                                </tbody>
                            </table>
                            @if ($pesanans->count() > 0)
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="{{ route('produk.filter') }}" class="btn btn-secondary mt-2">
                                        <span class="fas fa-chevron-left me-1"></span>
                                        Continue Shopping
                                    </a>
                                </div>
                                <form id="updateCartForm" action="{{ route('keranjang.update') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="quantities" value="">
                                    <button type="submit" class="btn btn-success mt-2 ml-auto">
                                        Update Cart
                                        <span class="fas fa-undo ms-1 order-2"></span>
                                    </button>
                                </form>
                            </div>
                            @else
                            @endif
                        </div>
                    </div>
                </div>


                <div class="col-12 col-lg-4">
                    <div class="card">
                        <form action="{{ route('checkout-keranjang') }}" method="POST">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                                <div class="d-flex flex-between-center mb-3">
                                    <h3 class="card-title mb-0">Summary</h3>
                                </div>
                                {{-- <select class="form-select mb-3 @error('metode_pembayaran') is-invalid @enderror"
                                    name="metode_pembayaran" value="{{ old('metode_pembayaran') }}"
                                    aria-label="delivery type">
                                    <option value="">Select payment metode</option>
                                    @foreach ($pembayaran as $pembayarans)
                                        <option value="{{ $pembayarans->id }}">{{ $pembayarans->metode_pembayaran }}
                                        </option>
                                    @endforeach
                                </select> --}}
                                <div>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-900 fw-semi-bold">Total Quantity :</p>
                                        <p class="text-1100 fw-semi-bold">{{ $pesanans->sum('jumlah') }}</p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-900 fw-semi-bold">Subtotal :</p>
                                        <p class="text-1100 fw-semi-bold">Rp. {{ number_format($subtotal, 0, ',', '.') }}
                                        </p>
                                    </div>
                                </div>
                                <div>
                                </div>
                                <div class="d-flex justify-content-between border-y border-dashed py-3 mb-4">
                                    <h4 class="mb-0">Total Price:</h4>
                                    <h4 class="mb-">Rp. {{ number_format($subtotal, 0, ',', '.') }}</h4>
                                </div>
                                <button class="btn btn-primary w-100">Proceed to check out<span
                                        class="fas fa-chevron-right ms-1 fs--2"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        function updateCart() {
            // Collect the values of quantity inputs and order IDs
            event.preventDefault();
            var quantities = {};
            $('input[name^="jumlah"]').each(function() {
                var id = $(this).attr('name').match(/\[(\d+)\]/)[1];
                quantities[id] = $(this).val();
            });

            // Assign the object of quantities to a hidden input field
            $('input[name="quantities"]').val(JSON.stringify(quantities));

            // Submit the form
            $('#updateCartForm').submit();
        }
    </script>
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ambil elemen-elemen yang diperlukan
            var cartTable = document.getElementById('cartTable');
            var quantityInputs = cartTable.querySelectorAll('[data-quantity] input');
            var totalCells = cartTable.querySelectorAll('.total');
            var summaryTotalElement = document.querySelector('.card-body .justify-content-between h4:last-child');

            // Fungsi untuk menghitung total dan memperbarui tampilan
            function updateTotals() {
                var total = 0;

                totalCells.forEach(function(totalCell, index) {
                    var quantity = parseInt(quantityInputs[index].value, 10);
                    var price = parseFloat(totalCell.textContent.replace('Rp. ', '').replace('.', '')
                        .replace(',', ''));
                    var subtotal = quantity * price;

                    total += subtotal;

                    // Update total di tabel
                    totalCell.textContent = 'Rp. ' + subtotal.toLocaleString();
                });

                // Update total di card summary
                summaryTotalElement.textContent = 'Rp. ' + total.toLocaleString();
            }

            // Tambahkan event listener untuk setiap input jumlah
            quantityInputs.forEach(function(input) {
                input.addEventListener('input', updateTotals);
            });

            // Panggil fungsi pertama kali untuk inisialisasi
            updateTotals();
        });
    </script> --}}



@endsection
