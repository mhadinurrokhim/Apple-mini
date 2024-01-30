@extends('layout_user.navbar')
@section('content')
@include('Asset.SweetAlert')
@if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: "{{ session('success') }}"
            });
        </script>
    @endif
      <!-- ============================================-->
      <!-- <section> begin ============================-->

        <form action="{{ route('profil.update', ['id' => $user->id]) }}" method="POST" enctype="multipart/form-data" >
            @csrf
            @method('PUT')
        <section class="pt-5 pb-9">
        <div class="container-small">
          <div class="row align-items-center justify-content-between g-3 mb-4">
            <div class="col-auto">
              <h2 class="mb-0">Profile</h2>
            </div>
          </div>
          <div class="row g-3 mb-5">
            <div class="col-12 col-lg-8">
              <div class="card h-90">
                <div class="card-body">
                  <div class="border-bottom border-dashed border-300 pb-4">
                    <div class="row align-items-center g-3 g-sm-5 text-center text-sm-start">

                        <div class="col-12 col-sm-auto">
                            <input class="d-none" id="avatarFile" type="file" name="profile" accept="image/*" onchange="previewImage()" />
                            <label class="cursor-pointer avatar avatar-5xl" for="avatarFile">
                                @if ($user->profile)
                                    <img class="rounded-circle" id="avatarPreview" src="{{ asset('storage/' . $user->profile) }}" alt="" />
                                @else
                                    <!-- Tampilkan foto default jika tidak ada foto profil -->
                                    <img class="rounded-circle" id="avatarPreview" src="{{ asset('assets/storage/apple.jpg') }}" alt="Default Avatar" />
                                @endif
                            </label>
                        </div>

                      <div class="col-12 col-sm-auto flex-1">
                        <h3>{{ Auth::user()->name }}</h3>
                        <p class="text-800">{{ Auth::user()->created_at }}</p>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex flex-between-center pt-1">
                    <div>
                      <h6 class="mb-2 text-800">Total Spent</h6>
                      <h4 class="fs-1 text-1000 mb-0">$894</h4>
                    </div>
                    <div class="text-end">
                      <h6 class="mb-2 text-800">Last Order</h6>
                      <h4 class="fs-1 text-1000 mb-0">1 week ago</h4>
                    </div>
                    <div class="text-end">
                      <h6 class="mb-2 text-800">Total Orders</h6>
                      <h4 class="fs-1 text-1000 mb-0">97 </h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-4">
              <div class="card h-80">
                <div class="card-body">
                  <div class="border-bottom border-dashed border-300">
                    <h4 class="mb-3 lh-sm lh-xl-1">More Info</h4>
                  </div>
                <div class="border-top border-dashed border-300 pt-2">
                      <div class="row flex-between-center mb-2">
                        <div class="col-auto">
                            <h5 class="text-1000 mb-0">Address : <p class="text-1000">{{$user->address}}</p></h5>
                        </div>
                      </div>
                    <div class="row flex-between-center mb-2">
                      <div class="col-auto">
                        <h5 class="text-1000 mb-0">Email : <p class="text-800">{{ Auth::user()->email }}</p></h5>
                      </div>
                    </div>
                    <div class="row flex-between-center">
                      <div class="col-auto">
                        <h5 class="text-1000 mb-0">Phone : <p class="text-800">+{{$user->telp}}</p></h5>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="scrollbar">
              <ul class="nav nav-underline flex-nowrap mb-3 pb-1" id="myTab" role="tablist">
                <li class="nav-item me-3"><a class="nav-link text-nowrap active" id="orders-tab" data-bs-toggle="tab" href="#tab-orders" role="tab" aria-controls="tab-orders" aria-selected="true"><span class="fas fa-shopping-cart me-2"></span>Orders <span class="text-700 fw-normal"> (35)</span></a></li>
                <li class="nav-item"><a class="nav-link text-nowrap" id="personal-info-tab" data-bs-toggle="tab" href="#tab-personal-info" role="tab" aria-controls="tab-personal-info" aria-selected="true"><span class="fas fa-user me-2"></span>Personal info</a></li>
              </ul>
            </div>
            <div class="tab-content" id="profileTabContent">
              <div class="tab-pane fade show active" id="tab-orders" role="tabpanel" aria-labelledby="orders-tab">
                <div class="border-top border-bottom border-200" id="profileOrdersTable" data-list='{"valueNames":["order","status","delivery","date","total"],"page":6,"pagination":true}'>
                  <div class="table-responsive scrollbar">
                    <table class="table fs--1 mb-0">
                      <thead>
                        <tr>
                          <th class="sort white-space-nowrap align-middle pe-3 ps-0" scope="col" data-sort="order" style="width:15%; min-width:140px">ORDER</th>
                          <th class="sort align-middle pe-3" scope="col" data-sort="status" style="width:15%; min-width:180px">STATUS</th>
                          <th class="sort align-middle text-start" scope="col" data-sort="delivery" style="width:20%; min-width:160px">DELIVERY METHOD</th>
                          <th class="sort align-middle pe-0 text-end" scope="col" data-sort="date" style="width:15%; min-width:160px">DATE</th>
                          <th class="sort align-middle text-end" scope="col" data-sort="total" style="width:15%; min-width:160px">TOTAL</th>
                          <th class="align-middle pe-0 text-end" scope="col" style="width:15%;"> </th>
                        </tr>
                      </thead>
                      <tbody class="list" id="profile-order-table-body">
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semi-bold text-primary" href="#!">#2453</a></td>
                          <td class="status align-middle white-space-nowrap text-start fw-bold text-700 py-2"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Shipped</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="delivery align-middle white-space-nowrap text-900 py-2">Cash on delivery</td>
                          <td class="total align-middle text-700 text-end py-2">Dec 12, 12:56 PM</td>
                          <td class="date align-middle fw-semi-bold text-end py-2 text-1000">$87</td>
                          <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                            <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semi-bold text-primary" href="#!">#2452</a></td>
                          <td class="status align-middle white-space-nowrap text-start fw-bold text-700 py-2"><span class="badge badge-phoenix fs--2 badge-phoenix-info"><span class="badge-label">Ready to pickup</span><span class="ms-1" data-feather="info" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="delivery align-middle white-space-nowrap text-900 py-2">Free shipping</td>
                          <td class="total align-middle text-700 text-end py-2">Dec 9, 2:28PM</td>
                          <td class="date align-middle fw-semi-bold text-end py-2 text-1000">$7264</td>
                          <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                            <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semi-bold text-primary" href="#!">#2451</a></td>
                          <td class="status align-middle white-space-nowrap text-start fw-bold text-700 py-2"><span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="badge-label">Partially fulfilled</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="delivery align-middle white-space-nowrap text-900 py-2">Local pickup</td>
                          <td class="total align-middle text-700 text-end py-2">Dec 4, 12:56 PM</td>
                          <td class="date align-middle fw-semi-bold text-end py-2 text-1000">$375</td>
                          <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                            <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semi-bold text-primary" href="#!">#2450</a></td>
                          <td class="status align-middle white-space-nowrap text-start fw-bold text-700 py-2"><span class="badge badge-phoenix fs--2 badge-phoenix-secondary"><span class="badge-label">Canceled</span><span class="ms-1" data-feather="x" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="delivery align-middle white-space-nowrap text-900 py-2">Standard shipping</td>
                          <td class="total align-middle text-700 text-end py-2">Dec 1, 4:07 AM</td>
                          <td class="date align-middle fw-semi-bold text-end py-2 text-1000">$657</td>
                          <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                            <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semi-bold text-primary" href="#!">#2449</a></td>
                          <td class="status align-middle white-space-nowrap text-start fw-bold text-700 py-2"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">fulfilled</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="delivery align-middle white-space-nowrap text-900 py-2">Express</td>
                          <td class="total align-middle text-700 text-end py-2">Nov 28, 7:28 PM</td>
                          <td class="date align-middle fw-semi-bold text-end py-2 text-1000">$9562</td>
                          <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                            <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semi-bold text-primary" href="#!">#2448</a></td>
                          <td class="status align-middle white-space-nowrap text-start fw-bold text-700 py-2"><span class="badge badge-phoenix fs--2 badge-phoenix-danger"><span class="badge-label">Unfulfilled</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="delivery align-middle white-space-nowrap text-900 py-2">Local delivery</td>
                          <td class="total align-middle text-700 text-end py-2">Nov 24, 10:16 AM</td>
                          <td class="date align-middle fw-semi-bold text-end py-2 text-1000">$256</td>
                          <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                            <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                              </div>
                            </div>
                          </td>
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
              <div class="tab-pane fade" id="tab-personal-info" role="tabpanel" aria-labelledby="personal-info-tab">
                <div class="row g-3 mb-5">
                    <div class="col-12 col-lg-6">
                        <label class="form-label text-1000 fs-0 ps-0 text-capitalize lh-sm" for="name">Name</label>
                        <input class="form-control" id="name" name="name" type="text" placeholder="Full name" value="{{ old('name', $user->name) }}" />
                    </div>
                    <div class="col-12 col-lg-6">
                        <label class="form-label text-1000 fw-bold fs-0 ps-0 text-capitalize lh-sm" for="telp">Phone</label>
                        <input class="form-control" id="telp" name="telp" type="text" placeholder="Phone" value="{{ old('name', $user->telp) }}" />
                    </div>
                    <div class="col-12">
                        <label class="form-label text-1000 fs-0 ps-0 text-capitalize lh-sm" for="address">Address</label>
                        <textarea class="form-control" id="address" name="address" placeholder="Address"></textarea>
                    </div>
                </div>
                 <div class="text-end"><button type="submit" class="btn btn-primary px-7">Save changes</button>
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
        function previewImage() {
            var input = document.getElementById('avatarFile');
            var preview = document.getElementById('avatarPreview');

            if (input.files.length > 0) {
                var file = input.files[0];
                var reader = new FileReader();

                reader.onloadend = function () {
                    preview.src = reader.result;
                }

                reader.readAsDataURL(file);
            } else {
                // Jika tidak ada file yang dipilih, tampilkan gambar placeholder atau default
                preview.src = '{{ asset('assets/img/profile.jpg') }}';
            }
        }
    </script>
