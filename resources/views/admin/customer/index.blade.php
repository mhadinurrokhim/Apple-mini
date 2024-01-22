@extends('layout_admin.app')
@section('content')
    <div class="modal fade" id="searchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true" data-phoenix-modal="data-phoenix-modal" style="--phoenix-backdrop-opacity: 1;">
      <div class="modal-dialog">
        <div class="modal-content mt-15 rounded-pill">
          <div class="modal-body p-0">
            <div class="search-box navbar-top-search-box" data-list='{"valueNames":["title"]}' style="width: auto;">
              <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input fuzzy-search rounded-pill form-control-lg" type="search" placeholder="Search..." aria-label="Search" />
                <span class="fas fa-search search-box-icon"></span>
              </form>
              <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search"><button class="btn btn-link btn-close-falcon p-0" aria-label="Close"></button></div>
              <div class="dropdown-menu border border-300 font-base start-0 py-0 overflow-hidden w-100">
                <div class="scrollbar-overlay" style="max-height: 30rem;">
                  <div class="list pb-3">
                    <h6 class="dropdown-header text-1000 fs--2 py-2">24 <span class="text-500">results</span></h6>
                    <hr class="text-200 my-0" />
                    <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Recently Searched </h6>
                    <div class="py-2"><a class="dropdown-item" href="../landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-1000 title"><span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> Store Macbook</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-1000 title"> <span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                        </div>
                      </a>
                    </div>
                    <hr class="text-200 my-0" />
                    <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Products</h6>
                    <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../landing/product-details.html">
                        <div class="file-thumbnail me-2"><img class="h-100 w-100 fit-cover rounded-3" src="../../../assets/img/products/60x60/3.png" alt="" /></div>
                        <div class="flex-1">
                          <h6 class="mb-0 text-1000 title">MacBook Air - 13″</h6>
                          <p class="fs--2 mb-0 d-flex text-700"><span class="fw-medium text-600">8GB Memory - 1.6GHz - 128GB Storage</span></p>
                        </div>
                      </a>
                      <a class="dropdown-item py-2 d-flex align-items-center" href="../landing/product-details.html">
                        <div class="file-thumbnail me-2"><img class="img-fluid" src="../../../assets/img/products/60x60/3.png" alt="" /></div>
                        <div class="flex-1">
                          <h6 class="mb-0 text-1000 title">MacBook Pro - 13″</h6>
                          <p class="fs--2 mb-0 d-flex text-700"><span class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span></p>
                        </div>
                      </a>
                    </div>
                    <hr class="text-200 my-0" />
                    <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Quick Links</h6>
                    <div class="py-2"><a class="dropdown-item" href="../landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-1000 title"><span class="fa-solid fa-link text-900" data-fa-transform="shrink-2"></span> Support MacBook House</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-1000 title"> <span class="fa-solid fa-link text-900" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                        </div>
                      </a>
                    </div>
                    <hr class="text-200 my-0" />
                    <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Files</h6>
                    <div class="py-2"><a class="dropdown-item" href="../landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-1000 title"><span class="fa-solid fa-file-zipper text-900" data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-1000 title"> <span class="fa-solid fa-file-lines text-900" data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-1000 title"> <span class="fa-solid fa-image text-900" data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                        </div>
                      </a>
                    </div>
                    <hr class="text-200 my-0" />
                    <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Members</h6>
                    <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../../../pages/members.html">
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
                          <div class="fw-normal text-1000 title"><span class="fa-brands fa-firefox-browser text-900" data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                        </div>
                      </a>
                      <a class="dropdown-item" href="../landing/product-details.html">
                        <div class="d-flex align-items-center">
                          <div class="fw-normal text-1000 title"> <span class="fa-brands fa-chrome text-900" data-fa-transform="shrink-2"></span> Store MacBook″</div>
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
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
          <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
          <li class="breadcrumb-item active">Default</li>
        </ol>
      </nav>
      <div class="mb-9">
        <div class="row g-2 mb-4">
          <div class="col-auto">
            <h2 class="mb-0">Customers</h2>
          </div>
        </div>
        <ul class="nav nav-links mb-3 mb-lg-2 mx-n3">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="#"><span>All </span><span class="text-700 fw-semi-bold">(68817)</span></a></li>
          <li class="nav-item"><a class="nav-link" href="#"><span>New </span><span class="text-700 fw-semi-bold">(6)</span></a></li>
          <li class="nav-item"><a class="nav-link" href="#"><span>Abandoned checkouts </span><span class="text-700 fw-semi-bold">(17)</span></a></li>
          <li class="nav-item"><a class="nav-link" href="#"><span>Locals </span><span class="text-700 fw-semi-bold">(6,810)</span></a></li>
          <li class="nav-item"><a class="nav-link" href="#"><span>Email subscribers </span><span class="text-700 fw-semi-bold">(8)</span></a></li>
          <li class="nav-item"><a class="nav-link" href="#"><span>Top reviews </span><span class="text-700 fw-semi-bold">(2)</span></a></li>
        </ul>
        <div id="products" data-list='{"valueNames":["customer","email","total-orders","total-spent","city","last-seen","last-order"],"page":10,"pagination":true}'>
          <div class="mb-4">
            <div class="row g-3">
              <div class="col-auto">
                <div class="search-box">
                  <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search" type="search" placeholder="Search customers" aria-label="Search" />
                    <span class="fas fa-search search-box-icon"></span>
                  </form>
                </div>
              </div>
              <div class="col-auto scrollbar overflow-hidden-y flex-grow-1">
                <div class="btn-group position-static" role="group">
                  <div class="btn-group position-static text-nowrap"><button class="btn btn--secondary px-7 flex-shrink-0" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"> Country<span class="fas fa-angle-down ms-2"></span></button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">US</a></li>
                      <li><a class="dropdown-item" href="#">Uk</a></li>
                      <li><a class="dropdown-item" href="#">Australia</a></li>
                    </ul>
                  </div>
                  <div class="btn-group position-static text-nowrap"><button class="btn btn-sm btn-phoenix-secondary px-7 flex-shrink-0" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"> VIP<span class="fas fa-angle-down ms-2"></span></button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">VIP 1</a></li>
                      <li><a class="dropdown-item" href="#">VIP 2</a></li>
                      <li><a class="dropdown-item" href="#">VIP 3</a></li>
                      <li></li>
                    </ul>
                  </div><button class="btn btn-phoenix-secondary px-7 flex-shrink-0">More filters</button>
                </div>
              </div>
              <div class="col-auto"><button class="btn btn-link text-900 me-4 px-0"><span class="fa-solid fa-file-export fs--1 me-2"></span>Export</button><button class="btn btn-primary"><span class="fas fa-plus me-2"></span>Add customer</button></div>
            </div>
          </div>
          <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white border-top border-bottom border-200 position-relative top-1">
            <div class="table-responsive scrollbar-overlay mx-n1 px-1">
              <table class="table table-sm fs--1 mb-0">
                <thead>
                  <tr>
                    <th class="white-space-nowrap fs--1 align-middle ps-0">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" id="checkbox-bulk-customers-select" type="checkbox" data-bulk-select='{"body":"customers-table-body"}' /></div>
                    </th>
                    <th class="sort align-middle pe-5" scope="col" data-sort="customer" style="width:10%;">CUSTOMER</th>
                    <th class="sort align-middle pe-5" scope="col" data-sort="email" style="width:20%;">EMAIL</th>
                    <th class="sort align-middle text-end" scope="col" data-sort="total-orders" style="width:10%">ORDERS</th>
                    <th class="sort align-middle text-end ps-3" scope="col" data-sort="total-spent" style="width:10%">TOTAL SPENT</th>
                    <th class="sort align-middle ps-7" scope="col" data-sort="city" style="width:25%;">CITY</th>
                    <th class="sort align-middle text-end" scope="col" data-sort="last-seen" style="width:15%;">LAST SEEN</th>
                    <th class="sort align-middle text-end pe-0" scope="col" data-sort="last-order" style="width:10%;min-width: 150px;">LAST ORDER</th>
                  </tr>
                </thead>
                <tbody class="list" id="customers-table-body">
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="fs--1 align-middle ps-0 py-3">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"customer":{"avatar":"/team/32.webp","name":"Carry Anna"},"email":"annac34@gmail.com","city":"Budapest","totalOrders":89,"totalSpent":23987,"lastSeen":"34 min ago","lastOrder":"Dec 12, 12:56 PM"}' /></div>
                    </td>
                    <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center text-1100" href="../landing/profile.html">
                        <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/32.webp" alt="" /></div>
                        <p class="mb-0 ms-3 text-1100 fw-bold">Carry Anna</p>
                      </a></td>
                    <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:annac34@gmail.com">annac34@gmail.com</a></td>
                    <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">89</td>
                    <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 23987</td>
                    <td class="city align-middle white-space-nowrap text-1000 ps-7">Budapest</td>
                    <td class="last-seen align-middle white-space-nowrap text-700 text-end">34 min ago</td>
                    <td class="last-order align-middle white-space-nowrap text-700 text-end">Dec 12, 12:56 PM</td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="fs--1 align-middle ps-0 py-3">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"customer":{"avatar":"/team/avatar.webp","name":"Milind Mikuja","placeholder":true},"email":"mimiku@yahoo.com","city":"Manchester","totalOrders":76,"totalSpent":21567,"lastSeen":"6 hours ago","lastOrder":"Dec 9, 2:28 PM"}' /></div>
                    </td>
                    <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center text-1100" href="../landing/profile.html">
                        <div class="avatar avatar-m"><img class="rounded-circle avatar-placeholder" src="../../../assets/img/team/avatar.webp" alt="" /></div>
                        <p class="mb-0 ms-3 text-1100 fw-bold">Milind Mikuja</p>
                      </a></td>
                    <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:mimiku@yahoo.com">mimiku@yahoo.com</a></td>
                    <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">76</td>
                    <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 21567</td>
                    <td class="city align-middle white-space-nowrap text-1000 ps-7">Manchester</td>
                    <td class="last-seen align-middle white-space-nowrap text-700 text-end">6 hours ago</td>
                    <td class="last-order align-middle white-space-nowrap text-700 text-end">Dec 9, 2:28 PM</td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="fs--1 align-middle ps-0 py-3">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"customer":{"avatar":"/team/35.webp","name":"Stanly Drinkwater"},"email":"stnlwasser@hotmail.com","city":"Smallville","totalOrders":69,"totalSpent":19872,"lastSeen":"43 min ago","lastOrder":"Dec 4, 12:56 PM"}' /></div>
                    </td>
                    <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center text-1100" href="../landing/profile.html">
                        <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/35.webp" alt="" /></div>
                        <p class="mb-0 ms-3 text-1100 fw-bold">Stanly Drinkwater</p>
                      </a></td>
                    <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:stnlwasser@hotmail.com">stnlwasser@hotmail.com</a></td>
                    <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">69</td>
                    <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 19872</td>
                    <td class="city align-middle white-space-nowrap text-1000 ps-7">Smallville</td>
                    <td class="last-seen align-middle white-space-nowrap text-700 text-end">43 min ago</td>
                    <td class="last-order align-middle white-space-nowrap text-700 text-end">Dec 4, 12:56 PM</td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="fs--1 align-middle ps-0 py-3">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"customer":{"avatar":"/team/57.webp","name":"Josef Stravinsky"},"email":"Josefsky@sni.it","city":"Metropolis","totalOrders":67,"totalSpent":17996,"lastSeen":"2 hours ago","lastOrder":"Dec 1,  4:07 AM"}' /></div>
                    </td>
                    <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center text-1100" href="../landing/profile.html">
                        <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/57.webp" alt="" /></div>
                        <p class="mb-0 ms-3 text-1100 fw-bold">Josef Stravinsky</p>
                      </a></td>
                    <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:Josefsky@sni.it">Josefsky@sni.it</a></td>
                    <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">67</td>
                    <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 17996</td>
                    <td class="city align-middle white-space-nowrap text-1000 ps-7">Metropolis</td>
                    <td class="last-seen align-middle white-space-nowrap text-700 text-end">2 hours ago</td>
                    <td class="last-order align-middle white-space-nowrap text-700 text-end">Dec 1, 4:07 AM</td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="fs--1 align-middle ps-0 py-3">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"customer":{"avatar":"/team/58.webp","name":"Igor Borvibson"},"email":"vibigorr@technext.it","city":"Central city","totalOrders":61,"totalSpent":16785,"lastSeen":"5 days ago","lastOrder":"Nov 28, 7:28 PM"}' /></div>
                    </td>
                    <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center text-1100" href="../landing/profile.html">
                        <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/58.webp" alt="" /></div>
                        <p class="mb-0 ms-3 text-1100 fw-bold">Igor Borvibson</p>
                      </a></td>
                    <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:vibigorr@technext.it">vibigorr@technext.it</a></td>
                    <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">61</td>
                    <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 16785</td>
                    <td class="city align-middle white-space-nowrap text-1000 ps-7">Central city</td>
                    <td class="last-seen align-middle white-space-nowrap text-700 text-end">5 days ago</td>
                    <td class="last-order align-middle white-space-nowrap text-700 text-end">Nov 28, 7:28 PM</td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="fs--1 align-middle ps-0 py-3">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"customer":{"avatar":"/team/59.webp","name":"Katerina Karenin"},"email":"karkat99@gmail.com","city":"Gotham","totalOrders":58,"totalSpent":14956,"lastSeen":"2 weeks ago","lastOrder":"Nov 24, 10:16 AM"}' /></div>
                    </td>
                    <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center text-1100" href="../landing/profile.html">
                        <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/59.webp" alt="" /></div>
                        <p class="mb-0 ms-3 text-1100 fw-bold">Katerina Karenin</p>
                      </a></td>
                    <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:karkat99@gmail.com">karkat99@gmail.com</a></td>
                    <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">58</td>
                    <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 14956</td>
                    <td class="city align-middle white-space-nowrap text-1000 ps-7">Gotham</td>
                    <td class="last-seen align-middle white-space-nowrap text-700 text-end">2 weeks ago</td>
                    <td class="last-order align-middle white-space-nowrap text-700 text-end">Nov 24, 10:16 AM</td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="fs--1 align-middle ps-0 py-3">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"customer":{"avatar":"","name":"Roy Anderson"},"email":"andersonroy@netflix.chill","city":"Vancouver","totalOrders":52,"totalSpent":12509,"lastSeen":"4 days ago","lastOrder":"Nov 18, 5:43 PM"}' /></div>
                    </td>
                    <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center text-1100" href="../landing/profile.html">
                        <div class="avatar avatar-m">
                          <div class="avatar-name rounded-circle"><span>R</span></div>
                        </div>
                        <p class="mb-0 ms-3 text-1100 fw-bold">Roy Anderson</p>
                      </a></td>
                    <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:andersonroy@netflix.chill">andersonroy@netflix.chill</a></td>
                    <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">52</td>
                    <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 12509</td>
                    <td class="city align-middle white-space-nowrap text-1000 ps-7">Vancouver</td>
                    <td class="last-seen align-middle white-space-nowrap text-700 text-end">4 days ago</td>
                    <td class="last-order align-middle white-space-nowrap text-700 text-end">Nov 18, 5:43 PM</td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="fs--1 align-middle ps-0 py-3">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"customer":{"avatar":"/team/31.webp","name":"Martina scorcese"},"email":"cesetina1@gmail.com","city":"Viena","totalOrders":49,"totalSpent":11003,"lastSeen":"6 min ago","lastOrder":"Nov 18, 2:09 AM"}' /></div>
                    </td>
                    <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center text-1100" href="../landing/profile.html">
                        <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/31.webp" alt="" /></div>
                        <p class="mb-0 ms-3 text-1100 fw-bold">Martina scorcese</p>
                      </a></td>
                    <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:cesetina1@gmail.com">cesetina1@gmail.com</a></td>
                    <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">49</td>
                    <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 11003</td>
                    <td class="city align-middle white-space-nowrap text-1000 ps-7">Viena</td>
                    <td class="last-seen align-middle white-space-nowrap text-700 text-end">6 min ago</td>
                    <td class="last-order align-middle white-space-nowrap text-700 text-end">Nov 18, 2:09 AM</td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="fs--1 align-middle ps-0 py-3">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"customer":{"avatar":"/team/33.webp","name":"Luis Bunuel"},"email":"luisuel@live.com","city":"Bangalore","totalOrders":44,"totalSpent":7897,"lastSeen":"56 min ago","lastOrder":"Nov 16, 3:22 PM"}' /></div>
                    </td>
                    <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center text-1100" href="../landing/profile.html">
                        <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/33.webp" alt="" /></div>
                        <p class="mb-0 ms-3 text-1100 fw-bold">Luis Bunuel</p>
                      </a></td>
                    <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:luisuel@live.com">luisuel@live.com</a></td>
                    <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">44</td>
                    <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 7897</td>
                    <td class="city align-middle white-space-nowrap text-1000 ps-7">Bangalore</td>
                    <td class="last-seen align-middle white-space-nowrap text-700 text-end">56 min ago</td>
                    <td class="last-order align-middle white-space-nowrap text-700 text-end">Nov 16, 3:22 PM</td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="fs--1 align-middle ps-0 py-3">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"customer":{"avatar":"/team/34.webp","name":"Jean Renoir"},"email":"renoirjean1836@gmail.com","city":"Chittagong","totalOrders":37,"totalSpent":7781,"lastSeen":"Yesterday","lastOrder":"Nov 09, 8:49 AM"}' /></div>
                    </td>
                    <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center text-1100" href="../landing/profile.html">
                        <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/34.webp" alt="" /></div>
                        <p class="mb-0 ms-3 text-1100 fw-bold">Jean Renoir</p>
                      </a></td>
                    <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:renoirjean1836@gmail.com">renoirjean1836@gmail.com</a></td>
                    <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">37</td>
                    <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 7781</td>
                    <td class="city align-middle white-space-nowrap text-1000 ps-7">Chittagong</td>
                    <td class="last-seen align-middle white-space-nowrap text-700 text-end">Yesterday</td>
                    <td class="last-order align-middle white-space-nowrap text-700 text-end">Nov 09, 8:49 AM</td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="fs--1 align-middle ps-0 py-3">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"customer":{"avatar":"/team/29.webp","name":"Ricky Antony"},"email":"ricky@example.com","city":"New Jersey","totalOrders":33,"totalSpent":7825,"lastSeen":"1 hour ago","lastOrder":"Oct 19, 8:00 AM"}' /></div>
                    </td>
                    <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center text-1100" href="../landing/profile.html">
                        <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/29.webp" alt="" /></div>
                        <p class="mb-0 ms-3 text-1100 fw-bold">Ricky Antony</p>
                      </a></td>
                    <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:ricky@example.com">ricky@example.com</a></td>
                    <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">33</td>
                    <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 7825</td>
                    <td class="city align-middle white-space-nowrap text-1000 ps-7">New Jersey</td>
                    <td class="last-seen align-middle white-space-nowrap text-700 text-end">1 hour ago</td>
                    <td class="last-order align-middle white-space-nowrap text-700 text-end">Oct 19, 8:00 AM</td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="fs--1 align-middle ps-0 py-3">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"customer":{"avatar":"/team/3.webp","name":"Emma Watson"},"email":"emma@example.com","city":"New York","totalOrders":45,"totalSpent":18975,"lastSeen":"6 hours ago","lastOrder":"Oct 15, 12:00 PM"}' /></div>
                    </td>
                    <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center text-1100" href="../landing/profile.html">
                        <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/3.webp" alt="" /></div>
                        <p class="mb-0 ms-3 text-1100 fw-bold">Emma Watson</p>
                      </a></td>
                    <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:emma@example.com">emma@example.com</a></td>
                    <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">45</td>
                    <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 18975</td>
                    <td class="city align-middle white-space-nowrap text-1000 ps-7">New York</td>
                    <td class="last-seen align-middle white-space-nowrap text-700 text-end">6 hours ago</td>
                    <td class="last-order align-middle white-space-nowrap text-700 text-end">Oct 15, 12:00 PM</td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="fs--1 align-middle ps-0 py-3">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"customer":{"avatar":"/team/avatar.webp","name":"Jennifer Schramm","placeholder":true},"email":"jennifer@example.com","city":"Charlotte","totalOrders":39,"totalSpent":8967,"lastSeen":"12 hours ago","lastOrder":"Oct 12, 11:00 AM"}' /></div>
                    </td>
                    <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center text-1100" href="../landing/profile.html">
                        <div class="avatar avatar-m"><img class="rounded-circle avatar-placeholder" src="../../../assets/img/team/avatar.webp" alt="" /></div>
                        <p class="mb-0 ms-3 text-1100 fw-bold">Jennifer Schramm</p>
                      </a></td>
                    <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:jennifer@example.com">jennifer@example.com</a></td>
                    <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">39</td>
                    <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 8967</td>
                    <td class="city align-middle white-space-nowrap text-1000 ps-7">Charlotte</td>
                    <td class="last-seen align-middle white-space-nowrap text-700 text-end">12 hours ago</td>
                    <td class="last-order align-middle white-space-nowrap text-700 text-end">Oct 12, 11:00 AM</td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="fs--1 align-middle ps-0 py-3">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"customer":{"avatar":"/team/32.webp","name":"Raymond Mims"},"email":"raymond@example.com","city":"Artesia","totalOrders":30,"totalSpent":14587,"lastSeen":"2 day ago","lastOrder":"Oct 10, 8:30 AM"}' /></div>
                    </td>
                    <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center text-1100" href="../landing/profile.html">
                        <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/32.webp" alt="" /></div>
                        <p class="mb-0 ms-3 text-1100 fw-bold">Raymond Mims</p>
                      </a></td>
                    <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:raymond@example.com">raymond@example.com</a></td>
                    <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">30</td>
                    <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 14587</td>
                    <td class="city align-middle white-space-nowrap text-1000 ps-7">Artesia</td>
                    <td class="last-seen align-middle white-space-nowrap text-700 text-end">2 day ago</td>
                    <td class="last-order align-middle white-space-nowrap text-700 text-end">Oct 10, 8:30 AM</td>
                  </tr>
                  <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                    <td class="fs--1 align-middle ps-0 py-3">
                      <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"customer":{"avatar":"/team/25.webp","name":"Michael Jenkins"},"email":"jenkins@example.com","city":"Philadelphia","totalOrders":43,"totalSpent":45697,"lastSeen":"12 hours ago","lastOrder":"Oct 3, 8:30 AM"}' /></div>
                    </td>
                    <td class="customer align-middle white-space-nowrap pe-5"><a class="d-flex align-items-center text-1100" href="../landing/profile.html">
                        <div class="avatar avatar-m"><img class="rounded-circle" src="../../../assets/img/team/25.webp" alt="" /></div>
                        <p class="mb-0 ms-3 text-1100 fw-bold">Michael Jenkins</p>
                      </a></td>
                    <td class="email align-middle white-space-nowrap pe-5"><a class="fw-semi-bold" href="mailto:jenkins@example.com">jenkins@example.com</a></td>
                    <td class="total-orders align-middle white-space-nowrap fw-semi-bold text-end text-1000">43</td>
                    <td class="total-spent align-middle white-space-nowrap fw-bold text-end ps-3 text-1100">$ 45697</td>
                    <td class="city align-middle white-space-nowrap text-1000 ps-7">Philadelphia</td>
                    <td class="last-seen align-middle white-space-nowrap text-700 text-end">12 hours ago</td>
                    <td class="last-order align-middle white-space-nowrap text-700 text-end">Oct 3, 8:30 AM</td>
                  </tr>
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
        </div>
      </div>
      <footer class="footer position-absolute">
        <div class="row g-0 justify-content-between align-items-center h-100">
          <div class="col-12 col-sm-auto text-center">
            <p class="mb-0 mt-2 mt-sm-0 text-900">Thank you for creating with iVibe<span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2023 &copy;<a class="mx-1" href="https://themewagon.com/">Themewagon</a></p>
          </div>
          <div class="col-12 col-sm-auto text-center">
            <p class="mb-0 text-600">v1.13.0</p>
          </div>
        </div>
      </footer>
    </div>
    <div class="support-chat-container">
      <div class="container-fluid support-chat">
        <div class="card bg-white">
          <div class="card-header d-flex flex-between-center px-4 py-3 border-bottom">
            <h5 class="mb-0 d-flex align-items-center gap-2">Demo widget<span class="fa-solid fa-circle text-success fs--3"></span></h5>
            <div class="btn-reveal-trigger"><button class="btn btn-link p-0 dropdown-toggle dropdown-caret-none transition-none d-flex" type="button" id="support-chat-dropdown" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h text-900"></span></button>
              <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="support-chat-dropdown"><a class="dropdown-item" href="#!">Request a callback</a><a class="dropdown-item" href="#!">Search in chat</a><a class="dropdown-item" href="#!">Show history</a><a class="dropdown-item" href="#!">Report to Admin</a><a class="dropdown-item btn-support-chat" href="#!">Close Support</a></div>
            </div>
          </div>
          <div class="card-body chat p-0">
            <div class="d-flex flex-column-reverse scrollbar h-100 p-3">
              <div class="text-end mt-6"><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                  <p class="mb-0 fw-semi-bold fs--1">I need help with something</p><span class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
                </a><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                  <p class="mb-0 fw-semi-bold fs--1">I can’t reorder a product I previously ordered</p><span class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
                </a><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                  <p class="mb-0 fw-semi-bold fs--1">How do I place an order?</p><span class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
                </a><a class="false d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                  <p class="mb-0 fw-semi-bold fs--1">My payment method not working</p><span class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
                </a></div>
              <div class="text-center mt-auto">
                <div class="avatar avatar-3xl status-online"><img class="rounded-circle border border-3 border-white" src="../../../assets/img/team/30.webp" alt="" /></div>
                <h5 class="mt-2 mb-3">Eric</h5>
                <p class="text-center text-black mb-0">Ask us anything – we’ll get back to you here or by email within 24 hours.</p>
              </div>
            </div>
          </div>
          <div class="card-footer d-flex align-items-center gap-2 border-top ps-3 pe-4 py-3">
            <div class="d-flex align-items-center flex-1 gap-3 border rounded-pill px-4"><input class="form-control outline-none border-0 flex-1 fs--1 px-0" type="text" placeholder="Write message" /><label class="btn btn-link d-flex p-0 text-500 fs--1 border-0" for="supportChatPhotos"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="supportChatPhotos" /><label class="btn btn-link d-flex p-0 text-500 fs--1 border-0" for="supportChatAttachment"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="supportChatAttachment" /></div><button class="btn p-0 border-0 send-btn"><span class="fa-solid fa-paper-plane fs--1"></span></button>
          </div>
        </div>
      </div><button class="btn p-0 border border-200 btn-support-chat"><span class="fs-0 btn-text text-primary text-nowrap">Chat demo</span><span class="fa-solid fa-circle text-success fs--1 ms-2"></span><span class="fa-solid fa-chevron-down text-primary fs-1"></span></button>
    </div>
    @endsection

