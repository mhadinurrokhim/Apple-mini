@extends('layout_user.navbar')
@section('content')
@include('Asset.SweetAlert')
      <section class="pt-5 pb-9">
        <div class="container-small">
          <h2 class="mb-5">Check out</h2>
          <div class="row justify-content-between">
            <div class="col-lg-7 col-xl-7">
                <hr class="my-6">
                <h3>Billing Details</h3>
                <div class="form-check"><input class="form-check-input" id="sameAsShipping" type="checkbox" checked="checked" /><label class="form-check-label fs-0 fw-normal" for="sameAsShipping">Same as shipping address
                  </label></div>
                <table class="table table-borderless mt-4">
                  <tbody>
                    <tr>
                      <td class="py-2 ps-0">
                        <div class="d-flex"><span class="fs-5 me-2" data-feather="user" style="height:16px; width:16px;"> </span>
                          <h5 class="lh-sm me-4">Name</h5>
                        </div>
                      </td>
                      <td class="py-2 fw-bold lh-sm">:</td>
                      <td class="py-2 px-3">
                        <h5 class="lh-sm fw-normal text-800">Shatinon Mekalan</h5>
                      </td>
                    </tr>
                    <tr>
                      <td class="py-2 ps-0">
                        <div class="d-flex"><span class="fs-5 me-2" data-feather="home" style="height:16px; width:16px;"> </span>
                          <h5 class="lh-sm me-4">Address</h5>
                          {{-- {{ var_dump($user) }} --}}
                        </div>
                      </td>
                      <td class="py-2 fw-bold lh-sm">:</td>
                      <td class="py-2 px-3">
                        <h5 class="lh-lg fw-normal text-800">Apt: 6/B, 192 Edsel Road, Van Nuys <br> California, USA 96580</h5>
                      </td>
                    </tr>
                    <tr>
                      <td class="py-2 ps-0">
                        <div class="d-flex"><span class="fs-5 me-2" data-feather="phone" style="height:16px; width:16px;"> </span>
                          <h5 class="lh-sm me-4">Phone</h5>
                        </div>
                      </td>
                      <td class="py-2 fw-bold lh-sm">:</td>
                      <td class="py-2 px-3">
                        <h5 class="lh-sm fw-normal text-800">818-414-4092</h5>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="row g-2 mb-5 mb-lg-0">
                  <div class="col-md-8 col-lg-9 d-grid"><button class="btn btn-primary" type="submit">Pay $695.20</button></div>
                  <div class="col-md-4 col-lg-3 d-grid"><button class="btn btn-phoenix-secondary text-nowrap" type="submit">Save Order and Exit</button></div>
                </div>
              </form>
            </div>


            <div class="col-lg-5 col-xl-4">
              <div class="card mt-3 mt-lg-0">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between">
                      <h3 class="mb-0">Summary</h3>
                      {{-- <button class="btn btn-link pe-0" type="button" data-bs-toggle="modal" data-bs-target="#editModal">
                        Edit
                    </button> --}}
                    </div>
                    @foreach ($items as $checkout )
                  <div class="border-dashed border-bottom mt-4">
                    <div class="ms-n2">
                      <div class="row align-items-center mb-2 g-3">
                        <div class="col-8 col-md-7 col-lg-8">
                          <div class="d-flex align-items-center"><img class="me-2 ms-1" src="{{ asset('storage/Product/' . $checkout->produk->path_produk)}}" width="40" alt="" />
                            <h6 class="fw-semi-bold text-1000 lh-base">{{ Str::limit($checkout->produk->nama_produk,20, $end ='...') }}</h6>
                          </div>
                        </div>
                        <div class="col-2 col-md-3 col-lg-2">
                          <h6 class="fs--2 mb-0">X {{ $checkout->jumlah }}</h6>
                        </div>
                        <div class="col-2 ps-0">
                          <h5 class="fs--2 mb-0">{{ 'Rp. ' . number_format($checkout->total, 0, ',', '.') }}</h5>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
          <!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Nama Produk</th>
                            <th>Stok</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $checkout)
                            <tr>
                                <td><img src="{{ asset('storage/Product/' . $checkout->produk->path_produk)}}" width="40" alt="" /></td>
                                <td>{{ $checkout->produk->nama_produk }}</td>
                                <td>{{ $checkout->produk->stok }}</td>
                                <td>{{ 'Rp. ' . number_format($checkout->produk->harga, 0, ',', '.') }}</td>
                                <td>
                                    <form action="{{ route('checkout.hapus',$checkout->produk->id ) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm" onclick="hapusItem({{ $checkout->produk->id }})">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!-- Tambahkan tombol atau form Edit sesuai kebutuhan -->
            </div>
        </div>
    </div>
</div>

<!-- Script untuk Menghapus Item -->
<script>
    function hapusItem(produkId) {
        if (confirm('Apakah Anda yakin ingin menghapus item ini?')) {
            $.ajax({
                type: 'DELETE',
                url: '/produk-hapus/' + produkId,
                success: function (response) {
                    $('#itemRow' + produkId).remove();

                    alert(response.message);
                },
                error: function (error) {
                    alert('Terjadi kesalahan saat menghapus item.');
                }
            });
        }
    }
</script>


<!-- Tambahan Script untuk Bootstrap Modal -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
                  {{-- <div class="border-dashed border-bottom mt-4">
                    <div class="d-flex justify-content-between mb-2">
                      <h5 class="text-900 fw-semi-bold">Items subtotal: </h5>
                      <h5 class="text-900 fw-semi-bold">$691</h5>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                      <h5 class="text-900 fw-semi-bold">Discount: </h5>
                      <h5 class="text-danger fw-semi-bold">-$59</h5>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                      <h5 class="text-900 fw-semi-bold">Tax: </h5>
                      <h5 class="text-900 fw-semi-bold">$126.20</h5>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                      <h5 class="text-900 fw-semi-bold">Subtotal </h5>
                      <h5 class="text-900 fw-semi-bold">$665</h5>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                      <h5 class="text-900 fw-semi-bold">Shipping Cost </h5>
                      <h5 class="text-900 fw-semi-bold">$30 </h5>
                    </div>
                  </div> --}}
                  <div class="d-flex justify-content-between border-dashed-y pt-3">
                    <h4 class="mb-0">Total Price:</h4>
                    <h4 class="mb-0">{{ 'Rp. ' . number_format($checkout->total, 0, ',', '.') }}</h4>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div><!-- end of .container-->
      </section>
@endsection
