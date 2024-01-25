@extends('layout_user.navbar')
@section('content')
    <nav class="ecommerce-navbar navbar-expand navbar-light bg-white justify-content-between">
        <div class="container-small d-flex flex-between-center" data-navbar="data-navbar">
            <div class="dropdown-menu border py-0 category-dropdown-menu">
                <div class="card border-0 scrollbar" style="max-height: 657px;">
                    <div class="card-body p-6 pb-3">
                        <div class="row gx-7 gy-5 mb-5">
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="d-flex align-items-center mb-3"><span class="text-primary me-2"
                                        data-feather="pocket" style="stroke-width:3;"></span>
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
                                <div class="d-flex align-items-center mb-3"><span class="text-primary me-2"
                                        data-feather="home" style="stroke-width:3;"></span>
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
                                <div class="d-flex align-items-center mb-3"><span class="text-primary me-2"
                                        data-feather="globe" style="stroke-width:3;"></span>
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
                                <div class="d-flex align-items-center mb-3"><span class="text-primary me-2"
                                        data-feather="monitor" style="stroke-width:3;"></span>
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
                                <div class="d-flex align-items-center mb-3"><span class="text-primary me-2"
                                        data-feather="truck" style="stroke-width:3;"></span>
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
                                <div class="d-flex align-items-center mb-3"><span class="text-primary me-2"
                                        data-feather="codesandbox" style="stroke-width:3;"></span>
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
                                <div class="d-flex align-items-center mb-3"><span class="text-primary me-2"
                                        data-feather="watch" style="stroke-width:3;"></span>
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
                                <div class="d-flex align-items-center mb-3"><span class="text-primary me-2"
                                        data-feather="music" style="stroke-width:3;"></span>
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
                                <div class="d-flex align-items-center mb-3"><span class="text-primary me-2"
                                        data-feather="grid" style="stroke-width:3;"></span>
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
                        <div class="text-center border-top pt-3"><a class="fw-bold" href="#!">See all
                                Categories<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </nav>

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
                                        <th class="white-space-nowrap align-middle ps-4 fs--1 text-dark" style="width:50;"
                                            data-sort="path_produk">IMAGE</th>
                                        <th class="sort white-space-nowrap align-middle" scope="col"
                                            style="max-width: 50px">PRODUCTS</th>
                                        <th class="sort align-middle" scope="col" style="width:80px;">CATEGORY</th>
                                        <th class="sort align-middle text-end" scope="col" style="width:300px;">PRICE
                                        </th>
                                        <th class="sort align-middle ps-5" scope="col" style="width:200px;">QUANTITY
                                        </th>
                                        <th class="sort align-middle text-end" scope="col" style="width:250px;">TOTAL
                                        </th>
                                        <th class="sort align-middle text-end" scope="col" style="width:250px;">ACTION
                                        </th>
                                        <th class="sort text-end align-middle pe-0" scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="cart-table-body">
                                    @if ($pesanans->count() > 0)
                                        @php
                                            $subtotal = 0;
                                            $pesanan_id = [];
                                        @endphp
                                        @foreach ($pesanans as $pesanan)
                                            @php
                                                array_push($pesanan_id, $pesanan->id);
                                            @endphp
                                            <tr class="cart-table-row btn-reveal-trigger">
                                                <td class="align-middle white-space-nowrap py-0"><a
                                                        class="d-block border rounded-2" href="#"><img
                                                            src="{{ asset('storage/Product/' . $pesanan->produk->path_produk) }}"
                                                            alt="" width="100" /></a></td>
                                                <td class="products align-middle col-2" style="max-width: 50px;">
                                                    <a class="fw-semi-bold mb-0 text-truncate d-inline-block"
                                                        href="#">
                                                        {{ ucfirst(Str::limit($pesanan->produk->nama_produk, 10, $end = '...')) }}
                                                    </a>
                                                </td>
                                                <td class="color align-middle white-space-nowrap fs--1 text-900">
                                                    {{ ucfirst($pesanan->produk->kategori->nama_kategori) }}</td>
                                                <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">Rp.
                                                    {{ number_format($pesanan->produk->harga, 0, ',', '.') }}
                                                </td>
                                                <td class="quantity align-middle fs-0 ps-5">
                                                    <div class="input-group input-group-sm flex-nowrap"
                                                        data-quantity="data-quantity"><button class="btn btn-sm px-2"
                                                            data-type="minus">-</button><input
                                                            class="form-control text-center input-spin-none bg-transparent border-0 px-0"
                                                            type="number" min="1" value="{{ $pesanan->jumlah }}"
                                                            name="jumlah[{{ $pesanan->id }}]"
                                                            aria-label="Amount (to the nearest dollar)" /><button
                                                            class="btn btn-sm px-2" data-type="plus">+</button></div>
                                                </td>
                                                <td class="total align-middle fw-bold text-1000 text-end">Rp.
                                                    {{ number_format($pesanan->produk->harga * $pesanan->jumlah, 0, ',', '.') }}
                                                </td>
                                                <td class="align-middle white-space-nowrap text-end pe-0 ps-3">
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
                                    @endif
                                </tbody>
                            </table>
                            <form id="updateCartForm" action="{{ route('keranjang.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="quantities" value="">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <a href="{{ route('produkfilter') }}">
                                            <button class="btn btn-secondary mt-2">
                                                <span class="fas fa-chevron-left me-1"></span>
                                                Continue Shopping
                                            </button>
                                        </a>
                                    </div>
                                    <button class="btn btn-success mt-2 ml-auto" onclick="updateCart()">
                                        Update Cart
                                        <span class="fas fa-undo ms-1 order-2"></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-lg-4">
                    <div class="card">
                        <form action="{{ route('checkout') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="d-flex flex-between-center mb-3">
                                    <h3 class="card-title mb-0">Summary</h3>
                                </div>
                                <select class="form-select mb-3 @error('metode_pembayaran') is-invalid @enderror" name="metode_pembayaran" value="{{ old('metode_pembayaran') }}" aria-label="delivery type">
                                    <option value="">Select payment metode</option>
                                    @foreach ($pembayaran as $pembayarans)
                                    <option value="{{ $pembayarans->id }}">{{ $pembayarans->metode_pembayaran }}</option>
                                    @endforeach
                                </select>
                                <div>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-900 fw-semi-bold">Total Quantity :</p>
                                        <p class="text-1100 fw-semi-bold">{{ $pesanans->sum('jumlah') }}</p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="text-900 fw-semi-bold">Subtotal :</p>
                                        <p class="text-1100 fw-semi-bold">Rp. {{ number_format($subtotal, 0, ',', '.') }}</p>
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
