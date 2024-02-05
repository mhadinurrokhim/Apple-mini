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
    <form action="{{ route('profil.update', ['id' => $user->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <section class="pt-5 pb-9">
            <div class="container-small">
                @if (is_null($user->address) and is_null($user->telp))
                <h3 class="text-danger">Silahkan isi informasi pribadi anda</h3>
                @endif
                <div class="row align-items-center justify-content-between g-3 mb-4">
                    <div class="col-auto">
                        <h2 class="mb-0">Profile</h2>
                    </div>
                </div>
                <div class="row g-3 mb-5">
                    <div class="col-12 col-lg-8">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="border-bottom border-dashed border-300 pb-4">
                                    <div class="row align-items-center g-3 g-sm-5 text-center text-sm-start">

                                        <div class="col-12 col-sm-auto">
                                            <input class="d-none" id="avatarFile" type="file" name="profile"
                                                accept="image/*" onchange="previewImage(event)" />
                                            <label class="cursor-pointer avatar avatar-5xl" for="avatarFile">
                                                @if ($user->profile)
                                                    <img class="rounded-circle" id="avatarPreview"
                                                        src="{{ asset('storage/' . $user->profile) }}" alt="" />
                                                @else
                                                    <!-- Tampilkan foto default jika tidak ada foto profil -->
                                                    <img class="rounded-circle" id="avatarPreview"
                                                        src="{{ asset('assets/storage/apple.jpg') }}"
                                                        alt="Default Avatar" />
                                                @endif
                                            </label>
                                        </div>

                                        <div class="col-12 col-sm-auto flex-1">
                                            <h3>{{ Auth::user()->name }}</h3>
                                           Since date : @isset(Auth::user()->created_at)
                                            {{ Auth::user()->created_at->translatedFormat('d F Y') }}
                                        @endisset
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-between-center pt-1">
                                    <div>
                                        <h6 class="mb-2 text-800">Total Spent</h6>
                                        <h4 class="fs-1 text-1000 mb-0">Rp.
                                            {{ number_format($totalpembayaran[0]->total, 0, ',', '.') }}</h4>
                                    </div>
                                    <div class="text-end">
                                        @php
                                            use Carbon\Carbon;
                                        @endphp
                                        <h6 class="mb-2 text-800 text-center">Last Order</h6>
                                        <h4 class="fs-1 text-1000 mb-0 text-center">
                                            @if ($lastorder->count() > 0)
                                                {{ Carbon::now()->diffInDays($lastorder[0]->created_at) }} Days Ago</h4>
                                            @else
                                                <h4 class="fs-1 text-1000 mb-0">User has never placed an order.</h4>
                                            @endif
                                    </div>
                                    <div class="text-end">
                                        <h6 class="mb-2 text-800">Total Orders</h6>
                                        <h4 class="fs-1 text-1000 mb-0">{{ $totalorder }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="border-bottom border-dashed border-300">
                                    <h4 class="mb-3 lh-sm lh-xl-1">Default Address<button class="btn btn-link p-0"
                                            type="button"> <span class="fas fa-edit fs--1 ms-3 text-500"></span></button>
                                    </h4>
                                </div>
                                <div class="pt-4 mb-7 mb-lg-4 mb-xl-7">
                                    <div class="row justify-content-between">
                                        <div class="col-auto">
                                            <h5 class="text-1000">Address</h5>
                                        </div>
                                        <div class="col-auto">
                                            <p class="text-800">{{ $user->address }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top border-dashed border-300 pt-4">
                                    <div class="row flex-between-center mb-2">
                                        <div class="col-auto">
                                            <h5 class="text-1000 mb-0">Email</h5>
                                        </div>
                                        <div class="col-auto"><a class="lh-1"
                                                href="mailto:{{ $user->email }}">{{ $user->email }}</a></div>
                                    </div>
                                    <div class="row flex-between-center">
                                        <div class="col-auto">
                                            <h5 class="text-1000 mb-0">Phone</h5>
                                        </div>
                                        <div class="col-auto"><a href="https://wa.me/{{ $user->telp }}/">{{ $user->telp }}</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="scrollbar">
                            <ul class="nav nav-underline flex-nowrap mb-3 pb-1" id="myTab" role="tablist">
                                <li class="nav-item me-3"><a class="nav-link text-nowrap active" id="orders-tab"
                                        data-bs-toggle="tab" href="#tab-orders" role="tab" aria-controls="tab-orders"
                                        aria-selected="true"><span class="fas fa-shopping-cart me-2"></span>Orders <span
                                            class="text-700 fw-normal">({{ $totalorder }})</span></a></li>
                                <li class="nav-item"><a class="nav-link text-nowrap" id="personal-info-tab"
                                        data-bs-toggle="tab" href="#tab-personal-info" role="tab"
                                        aria-controls="tab-personal-info" aria-selected="true"><span
                                            class="fas fa-user me-2"></span>Personal info</a></li>
                            </ul>
                        </div>
                        <div class="tab-content" id="profileTabContent">
                            <div class="tab-pane fade show active" id="tab-orders" role="tabpanel"
                                aria-labelledby="orders-tab">
                                <div class="border-top border-bottom border-200" id="profileOrdersTable"
                                    data-list='{"valueNames":["order","status","delivery","date","total"],"page":6,"pagination":true}'>
                                    <div class="table-responsive scrollbar">
                                        <table class="table fs--1 mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="sort white-space-nowrap align-middle text-center pe-3 ps-0"
                                                        scope="col" style="width:15%; min-width:140px">NO</th>
                                                    <th class="sort align-middle pe-3 text-center" scope="col"
                                                        style="width:15%; min-width:180px">STATUS</th>
                                                    <th class="sort align-middle text-center" scope="col"
                                                        style="width:20%; min-width:160px">DELIVERY METHOD</th>
                                                    <th class="sort align-middle pe-0 text-center" scope="col"
                                                        style="width:15%; min-width:160px">SHIPPED DATE</th>
                                                    <th class="sort align-middle pe-0 text-center" scope="col"
                                                        style="width:15%; min-width:160px">RECEIVED DATE</th>
                                                    <th class="sort align-middle text-center" scope="col"
                                                        style="width:15%; min-width:160px">TOTAL</th>
                                                    <th class="align-middle pe-0 text-center" scope="col"
                                                        style="width:15%;">ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list" id="profile-order-table-body">
                                                @if ($order->count() > 0)
                                                    @php
                                                        $detail_pesananid = 0;
                                                        $no = 0;
                                                        // $totalproduktiappesanan = [];
                                                    @endphp
                                                    @foreach ($order as $orders)
                                                        @if ($orders->id != $detail_pesananid)
                                                            @php
                                                                $detail_pesananid = $orders->id;
                                                                $no += 1;
                                                                // $totalproduktiappesanan[$orders->id] = 1;
                                                            @endphp
                                                            <tr class="position-static text-center">
                                                                <td class="align-middle review fs-0 text-center ps-4">
                                                                    {{ $no }}</td>
                                                                <td class="align-middle white-space-nowrap mx-auto py-0">
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
                                                                <td class="align-middle white-space-nowrap py-0">
                                                                    <span
                                                                        class="fw-semi-bold fs--1 line-clamp-3 mb-0">{{ $orders->metode_pengiriman }}</span>
                                                                </td>
                                                                <td class="produks align-middle ps-4">
                                                                    <span
                                                                        class="fw-semi-bold fs--1 line-clamp-3 mb-0">{{ is_null($orders->tanggal_pengiriman) ? '-' : date('d F Y', strtotime($orders->tanggal_pengiriman)) }}</span>
                                                                </td>
                                                                <td class="produks align-middle ps-4">
                                                                    <span
                                                                        class="fw-semi-bold fs--1 line-clamp-3 mb-0">{{ is_null($orders->tanggal_menerima) ? '-' : date('d F Y', strtotime($orders->tanggal_menerima)) }}</span>
                                                                </td>
                                                                <td class="produks align-middle ps-4">
                                                                    <span class="fw-semi-bold fs--1 line-clamp-3 mb-0">Rp.
                                                                        {{ number_format($orders->total, 0, ',', '.') }}</span>
                                                                </td>
                                                                <td class="produks align-middle ps-4">
                                                                    @if ($orders->status == 'shipped')
                                                                        {{-- <form action="{{ route('diterima', $orders->id) }}">
                                                                            @csrf
                                                                            @method('put')
                                                                            <input type="hidden" name="status" value="{{ $orders->status }}">
                                                                            <button type="submit"
                                                                                class="btn btn-link dropdown-item text-primary">
                                                                                Diterima
                                                                            </button>
                                                                        </form> --}}
                                                                        <a class="btn btn-link dropdown-item text-primary"
                                                                            href="{{ route('diterima', $orders->id) }}">Accepted</a>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @else
                                                            {{-- @php
                                                                $totalproduktiappesanan[$orders->id] += 1;
                                                            @endphp --}}
                                                        @endif
                                                    @endforeach
                                                @endif
                                                {{-- <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                    <td class="order align-middle white-space-nowrap py-2 ps-0"><a
                                                            class="fw-semi-bold text-primary" href="#!">#2453</a>
                                                    </td>
                                                    <td
                                                        class="status align-middle white-space-nowrap text-start fw-bold text-700 py-2">
                                                        <span class="badge badge-phoenix fs--2 badge-phoenix-success"><span
                                                                class="badge-label">Shipped</span><span class="ms-1"
                                                                data-feather="check"
                                                                style="height:12.8px;width:12.8px;"></span></span>
                                                    </td>
                                                    <td class="delivery align-middle white-space-nowrap text-900 py-2">Cash
                                                        on delivery</td>
                                                    <td class="total align-middle text-700 text-end py-2">Dec 12, 12:56 PM
                                                    </td>
                                                    <td class="date align-middle fw-semi-bold text-end py-2 text-1000">$87
                                                    </td>
                                                    <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                                                        <div class="font-sans-serif btn-reveal-trigger position-static">
                                                            <button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs--2"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                    <td class="order align-middle white-space-nowrap py-2 ps-0"><a
                                                            class="fw-semi-bold text-primary" href="#!">#2452</a>
                                                    </td>
                                                    <td
                                                        class="status align-middle white-space-nowrap text-start fw-bold text-700 py-2">
                                                        <span class="badge badge-phoenix fs--2 badge-phoenix-info"><span
                                                                class="badge-label">Ready to pickup</span><span
                                                                class="ms-1" data-feather="info"
                                                                style="height:12.8px;width:12.8px;"></span></span>
                                                    </td>
                                                    <td class="delivery align-middle white-space-nowrap text-900 py-2">Free
                                                        shipping</td>
                                                    <td class="total align-middle text-700 text-end py-2">Dec 9, 2:28PM
                                                    </td>
                                                    <td class="date align-middle fw-semi-bold text-end py-2 text-1000">
                                                        $7264</td>
                                                    <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                                                        <div class="font-sans-serif btn-reveal-trigger position-static">
                                                            <button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs--2"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                    <td class="order align-middle white-space-nowrap py-2 ps-0"><a
                                                            class="fw-semi-bold text-primary" href="#!">#2451</a>
                                                    </td>
                                                    <td
                                                        class="status align-middle white-space-nowrap text-start fw-bold text-700 py-2">
                                                        <span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span
                                                                class="badge-label">Partially fulfilled</span><span
                                                                class="ms-1" data-feather="clock"
                                                                style="height:12.8px;width:12.8px;"></span></span>
                                                    </td>
                                                    <td class="delivery align-middle white-space-nowrap text-900 py-2">
                                                        Local pickup</td>
                                                    <td class="total align-middle text-700 text-end py-2">Dec 4, 12:56 PM
                                                    </td>
                                                    <td class="date align-middle fw-semi-bold text-end py-2 text-1000">$375
                                                    </td>
                                                    <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                                                        <div class="font-sans-serif btn-reveal-trigger position-static">
                                                            <button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs--2"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                    <td class="order align-middle white-space-nowrap py-2 ps-0"><a
                                                            class="fw-semi-bold text-primary" href="#!">#2450</a>
                                                    </td>
                                                    <td
                                                        class="status align-middle white-space-nowrap text-start fw-bold text-700 py-2">
                                                        <span
                                                            class="badge badge-phoenix fs--2 badge-phoenix-secondary"><span
                                                                class="badge-label">Canceled</span><span class="ms-1"
                                                                data-feather="x"
                                                                style="height:12.8px;width:12.8px;"></span></span>
                                                    </td>
                                                    <td class="delivery align-middle white-space-nowrap text-900 py-2">
                                                        Standard shipping</td>
                                                    <td class="total align-middle text-700 text-end py-2">Dec 1, 4:07 AM
                                                    </td>
                                                    <td class="date align-middle fw-semi-bold text-end py-2 text-1000">$657
                                                    </td>
                                                    <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                                                        <div class="font-sans-serif btn-reveal-trigger position-static">
                                                            <button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs--2"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                    <td class="order align-middle white-space-nowrap py-2 ps-0"><a
                                                            class="fw-semi-bold text-primary" href="#!">#2449</a>
                                                    </td>
                                                    <td
                                                        class="status align-middle white-space-nowrap text-start fw-bold text-700 py-2">
                                                        <span class="badge badge-phoenix fs--2 badge-phoenix-success"><span
                                                                class="badge-label">fulfilled</span><span class="ms-1"
                                                                data-feather="check"
                                                                style="height:12.8px;width:12.8px;"></span></span>
                                                    </td>
                                                    <td class="delivery align-middle white-space-nowrap text-900 py-2">
                                                        Express</td>
                                                    <td class="total align-middle text-700 text-end py-2">Nov 28, 7:28 PM
                                                    </td>
                                                    <td class="date align-middle fw-semi-bold text-end py-2 text-1000">
                                                        $9562</td>
                                                    <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                                                        <div class="font-sans-serif btn-reveal-trigger position-static">
                                                            <button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs--2"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                    <td class="order align-middle white-space-nowrap py-2 ps-0"><a
                                                            class="fw-semi-bold text-primary" href="#!">#2448</a>
                                                    </td>
                                                    <td
                                                        class="status align-middle white-space-nowrap text-start fw-bold text-700 py-2">
                                                        <span class="badge badge-phoenix fs--2 badge-phoenix-danger"><span
                                                                class="badge-label">Unfulfilled</span><span class="ms-1"
                                                                data-feather="check"
                                                                style="height:12.8px;width:12.8px;"></span></span>
                                                    </td>
                                                    <td class="delivery align-middle white-space-nowrap text-900 py-2">
                                                        Local delivery</td>
                                                    <td class="total align-middle text-700 text-end py-2">Nov 24, 10:16 AM
                                                    </td>
                                                    <td class="date align-middle fw-semi-bold text-end py-2 text-1000">$256
                                                    </td>
                                                    <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                                                        <div class="font-sans-serif btn-reveal-trigger position-static">
                                                            <button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs--2"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div><a
                                                                    class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr> --}}
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                                        <div class="col-auto d-flex">
                                            <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900"
                                                data-list-info="data-list-info"></p><a class="fw-semi-bold"
                                                href="#!" data-list-view="*">View all<span
                                                    class="fas fa-angle-right ms-1"
                                                    data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none"
                                                href="#!" data-list-view="less">View Less<span
                                                    class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                                        </div>
                                        <div class="col-auto d-flex"><button class="page-link"
                                                data-list-pagination="prev"><span
                                                    class="fas fa-chevron-left"></span></button>
                                            <ul class="mb-0 pagination"></ul><button class="page-link pe-0"
                                                data-list-pagination="next"><span
                                                    class="fas fa-chevron-right"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-personal-info" role="tabpanel"
                                aria-labelledby="personal-info-tab">
                                <div class="row g-3 mb-5">
                                    <div class="col-12 col-lg-6">
                                        <label class="form-label text-1000 fs-0 ps-0 text-capitalize lh-sm"
                                            for="name">Name</label>
                                        <input class="form-control" id="name" name="name" type="text"
                                            placeholder="Full name" value="{{ old('name', $user->name) }}" />
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <label class="form-label text-1000 fw-bold fs-0 ps-0 text-capitalize lh-sm"
                                            for="telp">Phone</label>
                                        <input class="form-control" id="telp" name="telp" type="number"
                                            placeholder="Phone" value="{{ old('name', $user->telp) }}" />
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label text-1000 fs-0 ps-0 text-capitalize lh-sm"
                                            for="address">Address</label>
                                        <textarea class="form-control" id="address" name="address" placeholder="Address">{{ old('description', $user->address) }}</textarea>
                                    </div>
                                </div>
                                <div class="text-end"><button type="submit" class="btn btn-primary px-7">Save
                                        changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->
        </section>
    </form><!-- <section> close ============================-->
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
@endsection

<script>
    const fileInput = document.getElementById('profil');
    const imagePreview = document.getElementById('imagePreview');

    function imagePreview() {
        const file = fileInput.files[0];

        if (file) {
            const reader = new FileReader();

            reader.onload = function (e) {
                imagePreview.style.backgroundImage = `url(${e.target.result})`;
                imagePreview.style.backgroundSize = 'cover';
                imagePreview.style.backgroundPosition = 'center';
            };

            reader.readAsDataURL(file);
        } else {
            // Clear the image preview if no file is selected
            imagePreview.style.backgroundImage = 'none';
        }
    }
    // const previewImage = (event)={
    //     const imagefile = event.target.files;
    //     const imagefilelength = imagefile.length;
    //     if (imagefilelength > 0) {
    //         const imagesrc = URL.createObjectURL(imagefile[0]);
    //         const imagepriview = document.querySelector('#avatarPreview');
    //         imagepriview.src = imagesrc;
    //         imagepriview.style.display = 'block';
    //     }
    // }
</script>
