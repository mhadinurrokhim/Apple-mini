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
                                aria-label="Close"></button>
                        </div>
                        <div class="dropdown-menu border border-300 font-base start-0 py-0 overflow-hidden w-100">
                            <div class="scrollbar-overlay" style="max-height: 30rem;">
                                <div class="list pb-3">
                                    <h6 class="dropdown-header text-1000 fs--2 py-2">24 <span
                                            class="text-500">results</span></h6>
                                    <hr class="text-200 my-0" />
                                    <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Recently
                                        Searched </h6>
                                    <div class="py-2"><a class="dropdown-item"
                                            href="apps/e-commerce/landing/product-details.html">
                                            <div class="d-flex align-items-center">
                                                <div class="fw-normal text-1000 title"><span
                                                        class="fa-solid fa-clock-rotate-left"
                                                        data-fa-transform="shrink-2"></span> Store Macbook</div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
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
                                            href="apps/e-commerce/landing/product-details.html">
                                            <div class="file-thumbnail me-2"><img class="h-100 w-100 fit-cover rounded-3"
                                                    src="assets/img/products/60x60/3.png" alt="" /></div>
                                            <div class="flex-1">
                                                <h6 class="mb-0 text-1000 title">MacBook Air - 13″</h6>
                                                <p class="fs--2 mb-0 d-flex text-700"><span class="fw-medium text-600">8GB
                                                        Memory - 1.6GHz - 128GB
                                                        Storage</span></p>
                                            </div>
                                        </a>
                                        <a class="dropdown-item py-2 d-flex align-items-center"
                                            href="apps/e-commerce/landing/product-details.html">
                                            <div class="file-thumbnail me-2"><img class="img-fluid"
                                                    src="assets/img/products/60x60/3.png" alt="" /></div>
                                            <div class="flex-1">
                                                <h6 class="mb-0 text-1000 title">MacBook Pro - 13″</h6>
                                                <p class="fs--2 mb-0 d-flex text-700"><span
                                                        class="fw-medium text-600 ms-2">30 Sep at 12:30
                                                        PM</span></p>
                                            </div>
                                        </a>
                                    </div>
                                    <hr class="text-200 my-0" />
                                    <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Quick
                                        Links</h6>
                                    <div class="py-2"><a class="dropdown-item"
                                            href="apps/e-commerce/landing/product-details.html">
                                            <div class="d-flex align-items-center">
                                                <div class="fw-normal text-1000 title"><span
                                                        class="fa-solid fa-link text-900"
                                                        data-fa-transform="shrink-2"></span> Support MacBook House</div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
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
                                    <div class="py-2"><a class="dropdown-item"
                                            href="apps/e-commerce/landing/product-details.html">
                                            <div class="d-flex align-items-center">
                                                <div class="fw-normal text-1000 title"><span
                                                        class="fa-solid fa-file-zipper text-900"
                                                        data-fa-transform="shrink-2"></span> Library MacBook folder.rar
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
                                            <div class="d-flex align-items-center">
                                                <div class="fw-normal text-1000 title"> <span
                                                        class="fa-solid fa-file-lines text-900"
                                                        data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
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
                                            href="pages/members.html">
                                            <div class="avatar avatar-l status-online  me-2 text-900">
                                                <img class="rounded-circle " src="assets/img/team/40x40/10.webp"
                                                    alt="" />
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-0 text-1000 title">Carry Anna</h6>
                                                <p class="fs--2 mb-0 d-flex text-700">anna@technext.it</p>
                                            </div>
                                        </a>
                                        <a class="dropdown-item py-2 d-flex align-items-center" href="pages/members.html">
                                            <div class="avatar avatar-l  me-2 text-900">
                                                <img class="rounded-circle " src="assets/img/team/40x40/12.webp"
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
                                    <div class="py-2"><a class="dropdown-item"
                                            href="apps/e-commerce/landing/product-details.html">
                                            <div class="d-flex align-items-center">
                                                <div class="fw-normal text-1000 title"><span
                                                        class="fa-brands fa-firefox-browser text-900"
                                                        data-fa-transform="shrink-2"></span> Search in the Web MacBook
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="apps/e-commerce/landing/product-details.html">
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

    <div class="content">
        <div class="pb-5">
            <div class="row g-4">
                <div class="col-12 col-xxl-6">
                    <div class="mb-8">
                        <h2 class="mb-2">Dashboard</h2>
                    </div>
                    <div class="row align-items-center g-4">
                        <div class="col-12 col-md-auto">
                            <div class="d-flex align-items-center"><span class="fa-stack"
                                    style="min-height: 46px; min-width: 46px;"><span
                                        class="fa-solid fa-square fa-stack-2x text-primary-300"
                                        data-fa-transform="down-4 rotate--10 left-4"></span><span
                                        class="fa-solid fa-circle fa-stack-2x stack-circle text-primary-100"
                                        data-fa-transform="up-4 right-3 grow-2"></span><span
                                        class="fa-stack-1x fa-solid fa-shopping-bag text-primary"
                                        data-fa-transform="shrink-2 up-8 right-6"></span></span>
                                <div class="ms-3">
                                    <h4 class="mb-0">{{ $totalProduct }} Product</h4>
                                    <p class="text-800 fs--1 mb-0">Total amount</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-auto">
                            <div class="d-flex align-items-center"><span class="fa-stack"
                                    style="min-height: 46px; min-width: 46px;"><span
                                        class="fa-solid fa-square fa-stack-2x text-success-300"
                                        data-fa-transform="down-4 rotate--10 left-4"></span><span
                                        class="fa-solid fa-circle fa-stack-2x stack-circle text-success-100"
                                        data-fa-transform="up-4 right-3 grow-2"></span><span
                                        class="fa-stack-1x fa-solid fa-bell text-success"
                                        data-fa-transform="shrink-2 up-8 right-6"></span></span>
                                <div class="ms-3">
                                    <h4 class="mb-0"> {{ $totalUser }} Users</h4>
                                    <p class="text-800 fs--1 mb-0">Registered users total</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-auto">
                            <div class="d-flex align-items-center"><span class="fa-stack"
                                    style="min-height: 46px; min-width: 46px;"><span
                                        class="fa-solid fa-square fa-stack-2x text-warning-300"
                                        data-fa-transform="down-4 rotate--10 left-4"></span><span
                                        class="fa-solid fa-circle fa-stack-2x stack-circle text-warning-100"
                                        data-fa-transform="up-4 right-3 grow-2"></span><span
                                        class="fa-stack-1x fa-brands fa-sellsy text-warning"
                                        data-fa-transform="shrink-2 up-8 right-6"></span></span>
                                <div class="ms-3">
                                    <h4 class="mb-0">5 Product Pending</h4>
                                    <p class="text-800 fs--1 mb-0">Pending</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-auto">
                            <div class="d-flex align-items-center"><span class="fa-stack"
                                    style="min-height: 46px;min-width: 46px;"><span
                                        class="fa-solid fa-square fa-stack-2x text-danger-300"
                                        data-fa-transform="down-4 rotate--10 left-4"></span><span
                                        class="fa-solid fa-circle fa-stack-2x stack-circle text-danger-100"
                                        data-fa-transform="up-4 right-3 grow-2"></span><span
                                        class="fa-stack-1x fa-solid fa-xmark text-danger "
                                        data-fa-transform="shrink-2 up-8 right-6"></span></span>
                                <div class="ms-3">
                                    <h4 class="mb-0">
                                        {{ $produk->count() }} Products
                                    </h4>
                                    <p class="text-800 fs--1 mb-0">Out of stock</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="bg-200 mb-6 mt-4" />
                    <div class="row bg-tax">
                        <div class="col-md-12 col-lg-12">
                          <div class="card card-tax">
                            <div class="tax-title d-flex justify-content-between px-4 pt-3">
                              <p> Income</p>
                              <i class="fi fi-sr-chart-line-up"></i>
                            </div>
                            <canvas id="ChartTax"></canvas>
                          </div>
                        </div>
                      </div>

                      <script>
                        document.addEventListener('DOMContentLoaded', function() {
                          const fetchData = async () => {
                            try {
                              // Mengambil data dari server melalui endpoint '/getTaxData'
                              const response = await fetch('/getTaxData');
                              const data = await response.json();
                              console.log(data);

                              data.forEach(entry => {
                                entry.total_tax = parseInt(entry.total_tax);
                              });

                              // Mengambil data yang diperlukan untuk labels dan dataset dari respons JSON
                              const months = data.map(entry => entry.month);

                              // Mengambil elemen canvas dengan id 'ChartTax'
                              const ctx = document.getElementById('ChartTax').getContext('2d');

                              // Membuat gradient untuk warna chart
                              var gradientStroke1 = ctx.createLinearGradient(0, 230, 0, 50);
                              gradientStroke1.addColorStop(1, 'rgba(81, 100, 255, 0.5)');
                              gradientStroke1.addColorStop(0.2, 'rgba(81, 100, 255, 0.2)');
                              gradientStroke1.addColorStop(0, 'rgba(81, 100, 255, 0.1)');

                              // Membuat objek Chart menggunakan data yang diambil dari server
                              const myChart = new Chart(ctx, {
                                type: 'line',
                                data: {
                                  labels: data.map(entry => entry.month),
                                  datasets: [{
                                    label: 'Total Tax (Rp)',
                                    data: data.map(entry => entry.total_tax),
                                    backgroundColor: gradientStroke1,
                                    borderColor: '#5164FF',
                                    borderWidth: 3,
                                    fill: true,
                                  }]
                                },
                                options: {
                                  onComplete: function() {
                                    console.log('Chart rendered:', this);
                                  },
                                  responsive: true,
                                  scales: {
                                    y: {
                                      beginAtZero: true,
                                      grid: {
                                        drawBorder: false,
                                        display: true,
                                        drawOnChartArea: true,
                                        drawTicks: false,
                                        borderDash: [5, 5]
                                      },
                                      ticks: {
                                        display: true,
                                        padding: 10,
                                        color: '#000000',
                                        font: {
                                          size: 11,
                                          family: "Poppins",
                                          style: 'normal',
                                          lineHeight: 2
                                        },
                                      }
                                    },
                                    x: {
                                      grid: {
                                        drawBorder: false,
                                        display: false,
                                        drawOnChartArea: false,
                                        drawTicks: false,
                                        borderDash: [5, 5]
                                      },
                                      ticks: {
                                        display: true,
                                        color: '#000000',
                                        padding: 20,
                                        font: {
                                          size: 11,
                                          family: "Poppins",
                                          style: 'normal',
                                          lineHeight: 2
                                        },
                                      }
                                    },
                                  },
                                },
                              });
                            } catch (error) {
                              // Tangani kesalahan saat mengambil atau mengolah data
                              console.error('Error fetching data:', error);
                            }
                          };

                          // Panggil fungsi fetchData setelah DOM sepenuhnya dimuat
                          fetchData();
                        });
                      </script>
                </div>
            </div>

            <footer class="footer position-absolute">
                <div class="row g-0 justify-content-between align-items-center h-100">
                    <div class="col-12 col-sm-auto text-center">
                        <p class="mb-0 mt-2 mt-sm-0 text-900">Copyright © iVibe<span
                                class="d-none d-sm-inline-block"></span><span
                                class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2023</p>

                    </div>
                    <div class="col-12 col-sm-auto text-center">
                    </div>
                </div>
            </footer>
        </div>
    </div>
    </div>
    </div>
@endsection
