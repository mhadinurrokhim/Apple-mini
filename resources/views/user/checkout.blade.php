@extends('layout_user.navbar')
@section('content')
  @include('Asset.SweetAlert')
  <section class="pt-5 pb-9">
    <div class="container-small">
      <h2 class="mb-5">Check out</h2>
      <div class="row justify-content-between">
        <div class="col-lg-7 col-xl-7">
          <div class="card col-md-12">
            <div class="card-body">
              <div class="mb-3">
                <div class="">
                  <h5 class="text-bold">Total harga</h5>
                </div>
                <div class="mt-3 me-auto">
                  <p></span></p>
                </div>
              </div>
              <div class="mb-3">
                <div>
                  <h5 class="text-bold">Pesan :</h5>
                </div>
                <div class="mt-3">
                  <input type="text" name="catatan" class="form-control" id="catatan"
                    placeholder="masukan catatan (opsional)">
                </div>
              </div>

              <div class="container m-0 p-0 d-flex justify-content-between">
                <div class="">
                  <h5 class="text-bold">Metode Pembayaran</h5><br>
                  <select class="form-select form-select-lg mb-3" name="metodepembayaran"
                    style="width: 300px; height: 50px; font-size: 18px;" aria-label=".form-select-lg example"
                    id="selectMetode">
                    <option selected class="dropdown-menu" disabled>Pilih Pembayaran</option>
                    <option value="e-wallet" data-target="ewalletInput">E-Wallet</option>
                    <option value="bank" data-target="bankInput">Bank</option>
                  </select>
                </div>
              </div>

              {{-- ewallet --}}
              <div class="mb-3" id="ewalletInput" style="display: none;">
                <div>
                  <p class="text-bold">Jenis QR</p>
                </div>
                <select name="JenisEwallet" id="JenisEwallet" class="form-control">
                  <option value="" disabled selected>Pilih</option>
                  {{-- @forelse ($wallet as $data)
                                    <option value="{{ $data->tujuan }}">{{ $data->tujuan }}</option>
                                @empty
                                    <option value="" disabled selected>Data E-wallet Kosong</option>
                                @endforelse --}}
                </select>
                <div class="mt-3">
                  <p class="text-bold">Kode QR</p>
                </div>
                {{-- @foreach ($wallet as $data)
                                @php
                                    $jefri = strlen($data->keterangan);
                                @endphp
                                @if ($jefri >= 20)
                                    <p class="" name="keteranganqr" value="{{ $data->keterangan }}" id="{{ $data->tujuan }}">
                                        <a href="{{ asset('storage/pembayaran/' . $data->keterangan) }}" data-toggle="lightbox">
                                            <img src="{{ asset('storage/pembayaran/' . $data->keterangan) }}"
                                                style="width: 150px; height=80px;">
                                        </a>
                                    </p>
                                @else
                                    <a></a>
                                @endif
                            @endforeach --}}
              </div>

              {{-- bank --}}
              <div class="mb-3" id="bankInput" style="display: none;">
                <div>
                  <p class="text-bold">Jenis Bank</p>
                </div>
                <select name="JenisBank" id="JenisBank" class="form-control">
                  <option value="" disabled selected>Pilih</option>
                  {{-- @forelse ($bank as $data)
                                    <option value="{{ $data->tujuan }}">{{ $data->tujuan }}</option>
                                @empty
                                    <option value=""disabled selected>Data No Rekening Kosong</option>
                                @endforelse --}}
                </select>
                <div class="mt-3">
                  <p class="text-bold">No Rekening</p>
                </div>
                {{-- @foreach ($bank as $data)
                                @php
                                    $saya = strlen($data->keterangan);
                                @endphp
                                @if ($saya >= 20)
                                @else
                                    <input type="text" name="keterangan" value="{{ $data->keterangan }}"
                                        id="{{ $data->tujuan }}" class="form-control" readonly disabled>
                                @endif
                            @endforeach --}}
              </div>
              <div class="">
                <p class="text-bold">Masukkan Bukti Pembayaran Anda</p>
              </div>
              <div class="mt-3">
                <input type="file" name="foto" class="form-control" id="foto">
              </div>

              <div class="d-flex justify-content-end mt-5">
                <button type="button" class="btn btn-primary" id="bayar">Bayar</button>
              </div>

              {{-- Script Pembayaran --}}
              <script>
                const selectElement = document.querySelector('#JenisBank');
                const inputElements = document.querySelectorAll('input[name="keterangan"]');
                const spElement = document.querySelector('#JenisEwallet');
                const pElements = document.querySelectorAll('p[name="keteranganqr"]');

                selectElement.addEventListener('change', function() {
                  const selectedValue = selectElement.value;

                  inputElements.forEach(function(input) {
                    if (input.id === selectedValue) {
                      input.style.display = 'block';
                      input.disabled = false;
                    } else {
                      input.style.display = 'none';
                      input.disabled = true;
                    }
                  });
                });

                spElement.addEventListener('change', function() {
                  const selectedValue = spElement.value;

                  pElements.forEach(function(p) {
                    if (p.id === selectedValue) {
                      p.style.display = 'block';
                      p.disabled = false;
                    } else {
                      p.style.display = 'none';
                      p.disabled = true;
                    }
                  });
                });

                // Menjalankan pengecekan saat halaman pertama kali dimuat
                selectElement.dispatchEvent(new Event('change'));
                spElement.dispatchEvent(new Event('change'));
              </script>
              {{-- AJAX Update --}}
              <script>
                $(document).ready(function() {
                  $("#bayar").click(function() {
                    var itemIds = [];
                    var selectedMetode = $("#selectMetode")
                      .val(); // Mengambil nilai metode pembayaran yang dipilih
                    var foto = $('#foto')[0].files[0];
                    var catatan = $("#catatan").val();
                    $(".item-element").each(function() {
                      var orderId = $(this).data("order-id");
                      itemIds.push(orderId);
                    });

                    // Inisialisasi objek data
                    var formData = new FormData();

                    // Loop melalui itemIds
                    for (var i = 0; i < itemIds.length; i++) {
                      var orderId = itemIds[i];
                      var jumlah = $("input[name='jumlah_" + orderId + "']")
                        .val(); // Ambil nilai jumlah dinamis
                      var barangpenjual_id = $("input[name='barangpenjual_id_" + orderId + "']")
                        .val(); // Ambil nilai barangpenjual_id dinamis
                      var toko_id = $("input[name='toko_id_" + orderId + "']")
                        .val(); // Ambil nilai toko_id dinamis
                      var user_id = $("input[name='user_id_" + orderId + "']")
                        .val(); // Ambil nilai user_id dinamis

                      // Tambahkan data ke objek formData
                      formData.append('ids[]', orderId);
                      formData.append('jumlah_' + orderId, jumlah);
                      formData.append('barangpenjual_id_' + orderId, barangpenjual_id);
                      formData.append('toko_id_' + orderId, toko_id);
                      formData.append('user_id_' + orderId, user_id);
                      formData.append('foto', foto);
                      formData.append('catatan', catatan);
                    }

                    formData.append('metodepembayaran', selectedMetode);

                    // Tampilkan SweetAlert konfirmasi
                    Swal.fire({
                      title: 'Apakah Anda yakin?',
                      text: 'Anda akan melakukan pembayaran.',
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonText: 'OK',
                      cancelButtonText: 'Batal'
                    }).then((result) => {
                      if (result.isConfirmed) {
                        // Kirim permintaan Ajax dengan formData jika pengguna mengonfirmasi
                        var csrfToken = $('meta[name="csrf-token"]').attr('content');
                        $.ajax({
                          url: "",
                          type: "POST",
                          data: formData,
                          processData: false, // Hindari pemrosesan otomatis data
                          contentType: false, // Hindari penambahan header otomatis
                          headers: {
                            'X-CSRF-TOKEN': csrfToken // Sertakan token CSRF dalam header
                          },
                          success: function(data) {
                            // Handle respons dari server jika diperlukan
                            Swal.fire('Sukses',
                              'Pembayaran berhasil dilakukan, silahkan tunggu verifikasi admin.',
                              'success');
                            // Redirect atau lakukan tindakan lain sesuai kebutuhan Anda
                            setTimeout(function() {
                              window.location.href =
                                "";
                            }, 3000);
                          },
                          error: function(response) {
                            console.log(response);
                            // Handle kesalahan jika terjadi
                            Swal.fire('Peringatan',
                              'Tolong lengkapi pengisian data anda.',
                              'warning');
                          }
                        });
                      }
                    });
                  });
                });
              </script>
              {{-- AJAX Update --}}


              <script>
                $("#selectMetode").change(function() {
                  var selectedOption = $(this).val();
                  if (selectedOption === "e-wallet") {
                    $("#ewalletInput").show();
                    $("#bankInput").hide();
                  } else if (selectedOption === "bank") {
                    $("#bankInput").show();
                    $("#ewalletInput").hide();
                  } else {
                    $("#ewalletInput").hide();
                    $("#bankInput").hide();
                  }
                });
              </script>
              {{-- Script Pembayaran --}}
            </div>
            <div class="row g-2 mb-5 mb-lg-0">
              <div class="col-md-8 col-lg-9 d-grid"><button class="btn btn-primary" type="submit">Buy</button></div>
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
                @foreach ($items as $checkout)
                  <div class="border-dashed border-bottom mt-4">
                    <div class="ms-n2">
                      <div class="row align-items-center mb-2 g-3">
                        <div class="col-8 col-md-7 col-lg-8">
                          <div class="d-flex align-items-center"><img class="me-2 ms-1"
                              src="{{ asset('storage/Product/' . $checkout->produk->path_produk) }}" width="40"
                              alt="" />
                            <h6 class="fw-semi-bold text-1000 lh-base">
                              {{ Str::limit($checkout->produk->nama_produk, 20, $end = '...') }}</h6>
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
                <div class="d-flex justify-content-between border-dashed-y pt-3">
                  <h4 class="mb-0">Total Price:</h4>
                  <h4 class="mb-0">{{ 'Rp. ' . number_format($checkout->total, 0, ',', '.') }}</h4>
                </div>
              </div>
            </div>
          </div>

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
                          <td><img src="{{ asset('storage/Product/' . $checkout->produk->path_produk) }}" width="40"
                              alt="" /></td>
                          <td>{{ $checkout->produk->nama_produk }}</td>
                          <td>{{ $checkout->produk->stok }}</td>
                          <td>{{ 'Rp. ' . number_format($checkout->produk->harga, 0, ',', '.') }}</td>
                          <td>
                            <form action="{{ route('checkout.hapus', $checkout->produk->id) }}" method="POST">
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
                  success: function(response) {
                    $('#itemRow' + produkId).remove();

                    alert(response.message);
                  },
                  error: function(error) {
                    alert('Terjadi kesalahan saat menghapus item.');
                  }
                });
              }
            }
          </script>


          <!-- Tambahan Script untuk Bootstrap Modal -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


        </div>
      </div><!-- end of .container-->
  </section>
@endsection
