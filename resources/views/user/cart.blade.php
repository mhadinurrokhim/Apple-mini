@extends('layout_user.navbar')
@section('content')
      <nav class="ecommerce-navbar navbar-expand navbar-light bg-white justify-content-between">
        <div class="container-small d-flex flex-between-center" data-navbar="data-navbar">
          <div class="dropdown"><button class="btn text-900 ps-0 pe-5 text-nowrap dropdown-toggle dropdown-caret-none" data-category-btn="data-category-btn" data-bs-toggle="dropdown"><span class="fas fa-bars me-2"></span>Category</button>
            <div class="dropdown-menu border py-0 category-dropdown-menu">
              <div class="card border-0 scrollbar" style="max-height: 657px;">
                <div class="card-body p-6 pb-3">
                  <div class="row gx-7 gy-5 mb-5">
                    <div class="col-12 col-sm-6 col-md-4">
                      <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="pocket" style="stroke-width:3;"></span>
                        <h6 class="text-1000 mb-0 text-nowrap">Collectibles &amp; Art</h6>
                      </div>
                      <div class="ms-n2"><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Collectibles</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Antiques</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Sports memorabilia </a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Art</a></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                      <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="home" style="stroke-width:3;"></span>
                        <h6 class="text-1000 mb-0 text-nowrap">Home &amp; Gardan</h6>
                      </div>
                      <div class="ms-n2"><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Yard, Garden &amp; Outdoor</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Crafts</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Home Improvement</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Pet Supplies</a></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                      <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="globe" style="stroke-width:3;"></span>
                        <h6 class="text-1000 mb-0 text-nowrap">Sporting Goods</h6>
                      </div>
                      <div class="ms-n2"><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Outdoor Sports</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Team Sports</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Exercise &amp; Fitness</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Golf</a></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                      <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="monitor" style="stroke-width:3;"></span>
                        <h6 class="text-1000 mb-0 text-nowrap">Electronics</h6>
                      </div>
                      <div class="ms-n2"><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Computers &amp; Tablets</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Camera &amp; Photo</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">TV, Audio &amp; Surveillance</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Cell Ohone &amp; Accessories</a></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                      <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="truck" style="stroke-width:3;"></span>
                        <h6 class="text-1000 mb-0 text-nowrap">Auto Parts &amp; Accessories</h6>
                      </div>
                      <div class="ms-n2"><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">GPS &amp; Security Devices</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Rader &amp; Laser Detectors</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Care &amp; Detailing</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Scooter Parts &amp; Accessories</a></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                      <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="codesandbox" style="stroke-width:3;"></span>
                        <h6 class="text-1000 mb-0 text-nowrap">Toys &amp; Hobbies</h6>
                      </div>
                      <div class="ms-n2"><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Radio Control</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Kids Toys</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Action Figures</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Dolls &amp; Bears</a></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                      <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="watch" style="stroke-width:3;"></span>
                        <h6 class="text-1000 mb-0 text-nowrap">Fashion</h6>
                      </div>
                      <div class="ms-n2"><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Women</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Men</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Jewelry &amp; Watches</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Shoes</a></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                      <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="music" style="stroke-width:3;"></span>
                        <h6 class="text-1000 mb-0 text-nowrap">Musical Instruments &amp; Gear</h6>
                      </div>
                      <div class="ms-n2"><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Guitar</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Pro Audio Equipment</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">String</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Stage Lighting &amp; Effects</a></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                      <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="grid" style="stroke-width:3;"></span>
                        <h6 class="text-1000 mb-0 text-nowrap">Other Categories</h6>
                      </div>
                      <div class="ms-n2"><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Video Games &amp; Consoles</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Health &amp; Beauty</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Baby</a><a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2" href="#!">Business &amp; Industrial</a></div>
                    </div>
                  </div>
                  <div class="text-center border-top pt-3"><a class="fw-bold" href="#!">See all Categories<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a></div>
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
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
              <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
              <li class="breadcrumb-item active" aria-current="page">Default</li>
            </ol>
          </nav>
          <h2 class="mb-6">Cart</h2>
          <div class="row g-5">
            <div class="col-12 col-lg-8">
              <div id="cartTable" data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":10}'>
                <div class="table-responsive scrollbar mx-n1 px-1">
                  <table class="table fs--1 mb-0 border-top border-200">
                    <thead>
                      <tr>
                        <th class="sort white-space-nowrap align-middle fs--2" scope="col"></th>
                        <th class="sort white-space-nowrap align-middle" scope="col" style="min-width:250px;">PRODUCTS</th>
                        <th class="sort align-middle" scope="col" style="width:80px;">COLOR</th>
                        <th class="sort align-middle" scope="col" style="width:150px;">SIZE</th>
                        <th class="sort align-middle text-end" scope="col" style="width:300px;">PRICE</th>
                        <th class="sort align-middle ps-5" scope="col" style="width:200px;">QUANTITY</th>
                        <th class="sort align-middle text-end" scope="col" style="width:250px;">TOTAL</th>
                        <th class="sort text-end align-middle pe-0" scope="col"></th>
                      </tr>
                    </thead>
                    <tbody class="list" id="cart-table-body">
                      <tr class="cart-table-row btn-reveal-trigger">
                        <td class="align-middle white-space-nowrap py-0"><a class="d-block border rounded-2" href="product-details.html"><img src="../../../assets/img/products/1.png" alt="" width="53" /></a></td>
                        <td class="products align-middle"><a class="fw-semi-bold mb-0 line-clamp-2" href="product-details.html">Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management &amp; Skin Temperature Trends, Carbon/Graphite, One Size (S &amp; L Bands)</a></td>
                        <td class="color align-middle white-space-nowrap fs--1 text-900">Glossy black</td>
                        <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">XL</td>
                        <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$199</td>
                        <td class="quantity align-middle fs-0 ps-5">
                          <div class="input-group input-group-sm flex-nowrap" data-quantity="data-quantity"><button class="btn btn-sm px-2" data-type="minus">-</button><input class="form-control text-center input-spin-none bg-transparent border-0 px-0" type="number" min="1" value="2" aria-label="Amount (to the nearest dollar)" /><button class="btn btn-sm px-2" data-type="plus">+</button></div>
                        </td>
                        <td class="total align-middle fw-bold text-1000 text-end">$398</td>
                        <td class="align-middle white-space-nowrap text-end pe-0 ps-3"><button class="btn btn-sm text-500 hover-text-600 me-2"><span class="fas fa-trash"></span></button></td>
                      </tr>
                      <tr class="cart-table-row btn-reveal-trigger">
                        <td class="align-middle white-space-nowrap py-0"><a class="d-block border rounded-2" href="product-details.html"><img src="../../../assets/img/products/2.png" alt="" width="53" /></a></td>
                        <td class="products align-middle"><a class="fw-semi-bold mb-0 line-clamp-2" href="product-details.html">iPhone 13 pro max-Pacific Blue-128GB storage</a></td>
                        <td class="color align-middle white-space-nowrap fs--1 text-900">Glossy black</td>
                        <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">XL</td>
                        <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$150</td>
                        <td class="quantity align-middle fs-0 ps-5">
                          <div class="input-group input-group-sm flex-nowrap" data-quantity="data-quantity"><button class="btn btn-sm px-2" data-type="minus">-</button><input class="form-control text-center input-spin-none bg-transparent border-0 px-0" type="number" min="1" value="2" aria-label="Amount (to the nearest dollar)" /><button class="btn btn-sm px-2" data-type="plus">+</button></div>
                        </td>
                        <td class="total align-middle fw-bold text-1000 text-end">$300</td>
                        <td class="align-middle white-space-nowrap text-end pe-0 ps-3"><button class="btn btn-sm text-500 hover-text-600 me-2"><span class="fas fa-trash"></span></button></td>
                      </tr>
                      <tr class="cart-table-row btn-reveal-trigger">
                        <td class="align-middle white-space-nowrap py-0"><a class="d-block border rounded-2" href="product-details.html"><img src="../../../assets/img/products/3.png" alt="" width="53" /></a></td>
                        <td class="products align-middle"><a class="fw-semi-bold mb-0 line-clamp-2" href="product-details.html">Apple MacBook Pro 13 inch-M1-8/256GB-space</a></td>
                        <td class="color align-middle white-space-nowrap fs--1 text-900">Glossy Golden</td>
                        <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">34mm</td>
                        <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$65</td>
                        <td class="quantity align-middle fs-0 ps-5">
                          <div class="input-group input-group-sm flex-nowrap" data-quantity="data-quantity"><button class="btn btn-sm px-2" data-type="minus">-</button><input class="form-control text-center input-spin-none bg-transparent border-0 px-0" type="number" min="1" value="2" aria-label="Amount (to the nearest dollar)" /><button class="btn btn-sm px-2" data-type="plus">+</button></div>
                        </td>
                        <td class="total align-middle fw-bold text-1000 text-end">$130</td>
                        <td class="align-middle white-space-nowrap text-end pe-0 ps-3"><button class="btn btn-sm text-500 hover-text-600 me-2"><span class="fas fa-trash"></span></button></td>
                      </tr>
                      <tr class="cart-table-row btn-reveal-trigger">
                        <td class="text-1100 fw-semi-bold ps-0 fs-0" colspan="6">Items subtotal :</td>
                        <td class="text-1100 fw-bold text-end fs-0">$691</td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-between-center mb-3">
                    <h3 class="card-title mb-0">Summary</h3><a class="btn btn-link p-0" href="#!">Edit cart </a>
                  </div><select class="form-select mb-3" aria-label="delivery type">
                    <option value="cod">Cash on Delivery</option>
                    <option value="card">Card</option>
                    <option value="paypal">Paypal</option>
                  </select>
                  <div>
                    <div class="d-flex justify-content-between">
                      <p class="text-900 fw-semi-bold">Items subtotal :</p>
                      <p class="text-1100 fw-semi-bold">$691</p>
                    </div>
                    <div class="d-flex justify-content-between">
                      <p class="text-900 fw-semi-bold">Discount :</p>
                      <p class="text-danger fw-semi-bold">-$59</p>
                    </div>
                    <div class="d-flex justify-content-between">
                      <p class="text-900 fw-semi-bold">Tax :</p>
                      <p class="text-1100 fw-semi-bold">$126.20</p>
                    </div>
                    <div class="d-flex justify-content-between">
                      <p class="text-900 fw-semi-bold">Subtotal :</p>
                      <p class="text-1100 fw-semi-bold">$665</p>
                    </div>
                    <div class="d-flex justify-content-between">
                      <p class="text-900 fw-semi-bold">Shipping Cost :</p>
                      <p class="text-1100 fw-semi-bold">$30</p>
                    </div>
                  </div>
                  <div class="input-group mb-3"><input class="form-control" type="text" placeholder="Voucher" /><button class="btn btn-phoenix-primary px-5">Apply</button></div>
                  <div class="d-flex justify-content-between border-y border-dashed py-3 mb-4">
                    <h4 class="mb-0">Total :</h4>
                    <h4 class="mb-">$695.20</h4>
                  </div><button class="btn btn-primary w-100">Proceed to check out<span class="fas fa-chevron-right ms-1 fs--2"></span></button>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

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

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-100 dark__bg-1100 py-9">
        <div class="container-small">
          <div class="row justify-content-between gy-4">
            <div class="col-12 col-lg-4">
              <div class="d-flex align-items-center mb-3"><img src="../../../assets/img/icons/logo.png" alt="phoenix" width="27" />
                <p class="logo-text ms-2">phoenix</p>
              </div>
              <p class="text-700 mb-1 fw-semi-bold lh-sm fs--1">Phoenix is an admin dashboard template with fascinating features and amazing layout. The template is responsive to all major browsers and is compatible with all available devices and screen sizes.</p>
            </div>
            <div class="col-6 col-md-auto">
              <h5 class="fw-bolder mb-3">About Phoenix</h5>
              <div class="d-flex flex-column"><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Careers</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Affiliate Program</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Privacy Policy</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Terms & Conditions</a></div>
            </div>
            <div class="col-6 col-md-auto">
              <h5 class="fw-bolder mb-3">Stay Connected</h5>
              <div class="d-flex flex-column"><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Blogs</a><a class="mb-1 fw-semi-bold fs--1 d-flex" href="#!"><span class="fab fa-facebook-square text-primary me-2 fs-0"></span><span class="text-800">Facebook</span></a><a class="mb-1 fw-semi-bold fs--1 d-flex" href="#!"><span class="fab fa-twitter-square text-info me-2 fs-0"></span><span class="text-800">Twitter</span></a></div>
            </div>
            <div class="col-6 col-md-auto">
              <h5 class="fw-bolder mb-3">Customer Service</h5>
              <div class="d-flex flex-column"><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Help Desk</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Support, 24/7</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Community of Phoenix</a></div>
            </div>
            <div class="col-6 col-md-auto">
              <h5 class="fw-bolder mb-3">Payment Method</h5>
              <div class="d-flex flex-column"><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Cash on Delivery</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Online Payment</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">PayPal</a><a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Installment</a></div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->
@endsection
