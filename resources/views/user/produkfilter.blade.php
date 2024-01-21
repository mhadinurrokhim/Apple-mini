@extends('layout_user.navbar')
@section('content')
      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-5 pb-9">
        <div class="product-filter-container"><button class="btn btn-sm btn-phoenix-secondary text-700 mb-5 d-lg-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#productFilterColumn"> <span class="fa-solid fa-filter me-2"></span>Filter</button>
          <div class="row">
            <div class="col-lg-3 col-xxl-2 ps-2 ps-xxl-3">
              <div class="product-filter-offcanvas bg-soft scrollbar phoenix-offcanvas phoenix-offcanvas-fixed" id="productFilterColumn">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h3 class="mb-0">Filters</h3><button class="btn d-lg-none p-0" data-phoenix-dismiss="offcanvas"><span class="uil uil-times fs-0"></span></button>
                </div><a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseDevice" role="button" aria-expanded="true" aria-controls="collapseDevice">
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="fs-0 text-1000">Device</div><span class="fa-solid fa-angle-down toggle-icon text-500"></span>
                  </div>
                </a>
                <div class="collapse show" id="collapseDevice">
                  <div class="mb-2">
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="flexCheckBlackberry" type="checkbox" name="device" checked><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="flexCheckBlackberry">Handphone
                      </label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="flexCheckApple" type="checkbox" name="device"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="flexCheckApple">Laptop
                      </label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="flexCheckNokia" type="checkbox" name="device"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="flexCheckNokia">Tab
                      </label></div>
                    <div class="form-check mb-0"><input class="form-check-input mt-0" id="flexCheckSony" type="checkbox" name="device"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="flexCheckSony">Komputer
                      </label></div>
                  </div>
                </div><a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapsePriceRange" role="button" aria-expanded="true" aria-controls="collapsePriceRange">
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="fs-0 text-1000">Price range</div><span class="fa-solid fa-angle-down toggle-icon text-500"></span>
                  </div>
                </a>
                <div class="collapse show" id="collapsePriceRange">
                  <div class="d-flex justify-content-between mb-3">
                    <div class="input-group me-2"><input class="form-control" type="text" aria-label="First name" placeholder="Min"><input class="form-control" type="text" aria-label="Last name" placeholder="Max"></div><button class="btn btn-phoenix-primary border-300 px-3" type="button">Go</button>
                  </div>
                </div><a class="btn px-0 y-4 d-block collapse-indicator" data-bs-toggle="collapse" href="#collapseRating" role="button" aria-expanded="true" aria-controls="collapseRating">
                  <div class="d-flex align-items-center justify-content-between w-100">
                    <div class="fs-0 text-1000">Rating</div><span class="fa-solid fa-angle-down toggle-icon text-500"></span>
                  </div>
                </a>
                <div class="collapse show" id="collapseRating">
                  <div class="d-flex align-items-center mb-1"><input class="form-check-input me-3" id="flexRadio1" type="radio" name="flexRadio"><span class="fa fa-star text-warning fs--1 me-1"></span><span class="fa fa-star text-warning fs--1 me-1"></span><span class="fa fa-star text-warning fs--1 me-1"></span><span class="fa fa-star text-warning fs--1 me-1"></span><span class="fa fa-star text-warning fs--1 me-1"></span></div>
                  <div class="d-flex align-items-center mb-1"><input class="form-check-input me-3" id="flexRadio2" type="radio" name="flexRadio"><span class="fa fa-star text-warning fs--1 me-1"></span><span class="fa fa-star text-warning fs--1 me-1"></span><span class="fa fa-star text-warning fs--1 me-1"></span><span class="fa fa-star text-warning fs--1 me-1"></span><span class="fa-regular fa-star text-warning-300 fs--1 me-1"></span>
                    <p class="ms-1 mb-0">&amp; above</p>
                  </div>
                  <div class="d-flex align-items-center mb-1"><input class="form-check-input me-3" id="flexRadio3" type="radio" name="flexRadio"><span class="fa fa-star text-warning fs--1 me-1"></span><span class="fa fa-star text-warning fs--1 me-1"></span><span class="fa fa-star text-warning fs--1 me-1"></span><span class="fa-regular fa-star text-warning-300 fs--1 me-1"></span><span class="fa-regular fa-star text-warning-300 fs--1 me-1"></span>
                    <p class="ms-1 mb-0">&amp; above </p>
                  </div>
                  <div class="d-flex align-items-center mb-1"><input class="form-check-input me-3" id="flexRadio4" type="radio" name="flexRadio"><span class="fa fa-star text-warning fs--1 me-1"></span><span class="fa fa-star text-warning fs--1 me-1"></span><span class="fa-regular fa-star text-warning-300 fs--1 me-1"></span><span class="fa-regular fa-star text-warning-300 fs--1 me-1"></span><span class="fa-regular fa-star text-warning-300 fs--1 me-1"></span>
                    <p class="ms-1 mb-0">&amp; above</p>
                  </div>
                  <div class="d-flex align-items-center mb-3"><input class="form-check-input me-3" id="flexRadio5" type="radio" name="flexRadio"><span class="fa fa-star text-warning fs--1 me-1"></span><span class="fa-regular fa-star text-warning-300 fs--1 me-1"></span><span class="fa-regular fa-star text-warning-300 fs--1 me-1"></span><span class="fa-regular fa-star text-warning-300 fs--1 me-1"></span><span class="fa-regular fa-star text-warning-300 fs--1 me-1"></span>
                    <p class="ms-1 mb-0">&amp; above </p>
                  </div>
                </div>
              </div>
              <div class="phoenix-offcanvas-backdrop d-lg-none" data-phoenix-backdrop></div>
            </div>
            <div class="col-lg-9 col-xxl-10">
              <div class="row gx-3 gy-6 mb-8">
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/6.png" alt="" /></div><a class="stretched-link" href="product-details.html">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">PlayStation 5 DualSense Wireless Controller</h6>
                          </a>
                          <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-500 fw-semi-bold ms-1">(67 people rated)</span></p>
                        </div>
                        <div>
                          <p class="fs--1 text-700 mb-2">dbrand skin available</p>
                          <div class="d-flex align-items-center mb-1">
                            <p class="me-2 text-900 text-decoration-line-through mb-0">$125.00</p>
                            <h3 class="text-1100 mb-0">$89.00</h3>
                          </div>
                          <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">2 colors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/1.png" alt="" /><span class="badge bg-success fs--2 product-verified-badge">Verified<span class="fas fa-check ms-1"></span></span></div><a class="stretched-link" href="product-details.html">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management &amp;amp; Skin Temperature ...</h6>
                          </a>
                          <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-500 fw-semi-bold ms-1">(74 people rated)</span></p>
                        </div>
                        <div>
                          <div class="d-flex align-items-center mb-1">
                            <p class="me-2 text-900 text-decoration-line-through mb-0">$49.99</p>
                            <h3 class="text-1100 mb-0">$34.99</h3>
                          </div>
                          <p class="text-success fw-bold fs--1 lh-1 mb-0">Deal time ends in days</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/2.png" alt="" /></div><a class="stretched-link" href="product-details.html">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">iPhone 13 pro max-Pacific Blue, 128GB storage</h6>
                          </a>
                          <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-500 fw-semi-bold ms-1">(33 people rated)</span></p>
                        </div>
                        <div>
                          <p class="fs--1 text-1000 fw-bold mb-2">Stock limited</p>
                          <div class="d-flex align-items-center mb-1">
                            <p class="me-2 text-900 text-decoration-line-through mb-0">$899.99</p>
                            <h3 class="text-1100 mb-0">$850.99</h3>
                          </div>
                          <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">5 colors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/3.png" alt="" /></div><a class="stretched-link" href="product-details.html">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">Apple MacBook Pro 13 inch-M1-8/256GB-Space Gray</h6>
                          </a>
                          <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-500 fw-semi-bold ms-1">(97 people rated)</span></p>
                        </div>
                        <div>
                          <p class="fs--1 text-1000 fw-bold mb-2">Apple care included</p>
                          <div class="d-flex align-items-center mb-1">
                            <p class="me-2 text-900 text-decoration-line-through mb-0">$12.00</p>
                            <h3 class="text-1100 mb-0">$11.00</h3>
                          </div>
                          <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">2 colors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/4.png" alt="" /></div><a class="stretched-link" href="product-details.html">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">Apple iMac 24&quot; 4K Retina Display M1 8 Core CPU, 7 Core GPU, 256GB SSD, Green (MJV83ZP/A) 2021</h6>
                          </a>
                          <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-500 fw-semi-bold ms-1">(134 people rated)</span></p>
                        </div>
                        <div>
                          <p class="fs--1 text-1000 fw-bold mb-2">Exchange with kidney</p>
                          <div class="d-flex align-items-center mb-1">
                            <p class="me-2 text-900 text-decoration-line-through mb-0">$1499.00</p>
                            <h3 class="text-1100 mb-0">$1399.00</h3>
                          </div>
                          <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">7 colors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/5.png" alt="" /></div><a class="stretched-link" href="product-details.html">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">Razer Kraken v3 x Wired 7.1 Surroung Sound Gaming headset</h6>
                          </a>
                          <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-500 fw-semi-bold ms-1">(59 people rated)</span></p>
                        </div>
                        <div>
                          <h3 class="text-1100">$59.00</h3>
                          <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">2 colors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/7.png" alt="" /></div><a class="stretched-link" href="product-details.html">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">2021 Apple 12.9-inch iPad Pro (Wi‑Fi, 128GB) - Space Gray</h6>
                          </a>
                          <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-500 fw-semi-bold ms-1">(13 people rated)</span></p>
                        </div>
                        <div>
                          <h3 class="text-1100">$799.00</h3>
                          <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">2 colors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/12.png" alt="" /></div><a class="stretched-link" href="product-details.html">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">HORI Racing Wheel Apex for PlayStation 4/3, and PC</h6>
                          </a>
                          <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-500 fw-semi-bold ms-1">(64 people rated)</span></p>
                        </div>
                        <div>
                          <h3 class="text-1100">$299.00</h3>
                          <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">1 colors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove from wishlist"><span class="fas fa-heart"></span></button><img class="img-fluid" src="../../../assets/img/products/1.png" alt="" /><span class="badge bg-success fs--2 product-verified-badge">Verified<span class="fas fa-check ms-1"></span></span></div><a class="stretched-link" href="product-details.html">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">Amazfit T-Rex Pro Smart Watch with GPS, Outdoor Fitness Watch for Men, Military Standard Certified</h6>
                          </a>
                          <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-500 fw-semi-bold ms-1">(32 people rated)</span></p>
                        </div>
                        <div>
                          <h3 class="text-1100">$20.00</h3>
                          <p class="text-success fw-bold fs--1 lh-1 mb-0">Deal time ends in 24 hours</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/16.png" alt="" /></div><a class="stretched-link" href="product-details.html">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">Apple AirPods Pro</h6>
                          </a>
                          <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-500 fw-semi-bold ms-1">(39 people rated)</span></p>
                        </div>
                        <div>
                          <h3 class="text-1100">$59.00</h3>
                          <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">3 colors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/10.png" alt="" /></div><a class="stretched-link" href="product-details.html">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">Apple Magic Mouse (Wireless, Rechargable) - Silver</h6>
                          </a>
                          <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-500 fw-semi-bold ms-1">(6 people rated)</span></p>
                        </div>
                        <div>
                          <h3 class="text-1100">$89.00</h3>
                          <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">2 colors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/25.png" alt="" /></div><a class="stretched-link" href="product-details.html">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">RESPAWN 200 Racing Style Gaming Chair, in Gray RSP 200 GRY</h6>
                          </a>
                          <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-500 fw-semi-bold ms-1">(8 people rated)</span></p>
                        </div>
                        <div>
                          <h3 class="text-1100">$499.00</h3>
                          <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">2 colors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/27.png" alt="" /></div><a class="stretched-link" href="product-details.html">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">LEVOIT Humidifiers for Bedroom Large Room 6L Warm and Cool Mist for...</h6>
                          </a>
                          <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-500 fw-semi-bold ms-1">(3 people rated)</span></p>
                        </div>
                        <div>
                          <h3 class="text-1100">$299.00</h3>
                          <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">3 colors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/26.png" alt="" /></div><a class="stretched-link" href="product-details.html">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">NETGEAR Nighthawk Pro Gaming XR500 Wi-Fi Router with 4 Ethernet Ports...</h6>
                          </a>
                          <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-500 fw-semi-bold ms-1">(8 people rated)</span></p>
                        </div>
                        <div>
                          <h3 class="text-1100">$49.00</h3>
                          <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">4 colors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/18.png" alt="" /></div><a class="stretched-link" href="product-details.html">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">Rachael Ray Cucina Bakeware Set Includes Nonstick Bread Baking Cookie Sheet...</h6>
                          </a>
                          <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-500 fw-semi-bold ms-1">(1 people rated)</span></p>
                        </div>
                        <div>
                          <h3 class="text-1100">$29.00</h3>
                          <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">3 colors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/17.png" alt="" /></div><a class="stretched-link" href="product-details.html">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">Xbox Series S</h6>
                          </a>
                          <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-500 fw-semi-bold ms-1">(6 people rated)</span></p>
                        </div>
                        <div>
                          <h3 class="text-1100">$19.00</h3>
                          <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">2 colors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/24.png" alt="" /></div><a class="stretched-link" href="product-details.html">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">FURINNO Computer Writing Desk, Walnut</h6>
                          </a>
                          <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-500 fw-semi-bold ms-1">(8 people rated)</span></p>
                        </div>
                        <div>
                          <h3 class="text-1100">$199.00</h3>
                          <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">2 colors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                  <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div>
                          <div class="border border-1 rounded-3 position-relative mb-3"><button class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span></button><img class="img-fluid" src="../../../assets/img/products/20.png" alt="" /></div><a class="stretched-link" href="product-details.html">
                            <h6 class="mb-2 lh-sm line-clamp-3 product-name">ASUS TUF Gaming F15 Gaming Laptop</h6>
                          </a>
                          <p class="fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span><span class="text-500 fw-semi-bold ms-1">(3 people rated)</span></p>
                        </div>
                        <div>
                          <h3 class="text-1100">$150.00</h3>
                          <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">2 colors</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-flex justify-content-end">
                <nav aria-label="Page navigation example">
                  <ul class="pagination mb-0">
                    <li class="page-item">
                      <a class="page-link" href="#">
                        <span class="fas fa-chevron-left"> </span>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item active" aria-current="page">
                      <a class="page-link" href="#">4</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">5</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#"> <span class="fas fa-chevron-right"></span></a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      @endsection
