@extends('layout_user.navbar')
@section('content')
  @include('Asset.SweetAlert')
  <section class="pt-5 pb-9">
    <div class="container-small">
      <h2 class="mb-5">Check out</h2>
      @if (count($items) > 0)
        <div class="row justify-content-between">
          <div class="col-lg-7 col-xl-7">
            <div class="card col-md-12">
              <div class="card-body">
                <div class="mb-3">
                  {{-- <div>
                  <h5 class="text-bold">Buy :</h5>
                </div> --}}
                  {{-- <div class="mt-3">
                  <input type="text" name="catatan" class="form-control" id="catatan"
                    placeholder="masukan catatan (opsional)">
                </div> --}}
                </div>

                <div class="container m-0 p-0 d-flex justify-content-between">
                  <div class="">
                    <h5 class="text-bold">Payment method</h5><br>
                    <select class="form-select form-select-lg mb-3" name="metode_pembayaran"
                      style="width: 300px; height: 50px; font-size: 18px;" aria-label=".form-select-lg example"
                      id="selectMetode">
                      <option selected class="dropdown-menu" disabled>Select Payment</option>
                      <option value="e-wallet" data-target="ewalletInput">E-Wallet</option>
                      <option value="bank" data-target="bankInput">Bank</option>
                    </select>
                  </div>
                </div>
                {{-- @php
                $wallet = $wallet ?? [];
              @endphp --}}

                {{-- ewallet --}}

                <div class="mb-3" id="ewalletInput" style="display: none;">
                  <div>
                    <p class="text-bold">Type QR</p>
                  </div>
                  <select name="tujuan_ewallet" id="tujuan_ewallet" class="form-control">
                    <option value="" disabled selected>Choose</option>
                    @forelse ($wallet as $data)
                      <option value="{{ $data->tujuan }}" data-foto="{{ $data->keterangan }}">{{ $data->tujuan }}</option>
                    @empty
                      <option value="" disabled selected>Data E-wallet empty2</option>
                    @endforelse
                  </select>

                  <div class="mt-3">
                    <p class="text-bold">Kode QR</p>
                  </div>

                  <p class="" id="keterangan_ewallet">
                    <a href="#" data-toggle="lightbox">
                      <img src="" style="width: 150px; height=80px;" id="ewalletImage">
                    </a>
                  </p>
                </div>


                {{-- @php
                  $bank = $bank ?? [];
                @endphp --}}

                {{-- bank --}}
                <div class="mb-3" id="bankInput" style="display: none;">
                  <div>
                    <p class="text-bold">choose Bank</p>
                  </div>
                  <select name="tujuan_bank" id="tujuan_bank" class="form-control">
                    <option value="" disabled selected>Pilih</option>
                    @forelse ($bank as $data)
                      <option value="{{ $data->tujuan }}" data="{{ $data->keterangan }}">{{ $data->tujuan }}</option>
                    @empty
                      <option value=""disabled selected>Data No Rekening empty</option>
                    @endforelse
                  </select>
                  <div class="mt-3">
                    <p class="text-bold">No Rekening</p>
                  </div>
                  @foreach ($bank as $data)
                    {{-- @php
                    $hadi = strlen($data->keterangan_bank);
                  @endphp
                  @if ($hadi >= 20)
                  @else --}}
                    <input type="text" name="keterangan_bank" value="{{ $data->keterangan }}" id="{{ $data->tujuan }}"
                      class="form-control" readonly disabled>
                    {{-- @endif --}}
                  @endforeach
                </div>
                <div class="">
                  <p class="text-bold">Enter your Proof of Payment</p>
                </div>
                <div class="mt-3">
                  <input type="file" name="foto" class="form-control" id="foto">
                </div>
                <div class="row g-2 mb-5 mb-lg-0">
                  <div class="col-md-8 col-lg-12 d-grid">
                    <button class="btn btn-primary mt-3" type="submit" id="bayar">Pay</button>
                  </div>
                </div>
              </div>
            </div>



          </div>
          <div class="col-lg-5 col-xl-5">
            <div class="card mt-3 mt-lg-0">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                  <h3 class="mb-0">Summary</h3>
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
                @php
                  $totalPrice = collect($items)->sum('total');
                @endphp

                <div class="d-flex justify-content-between border-dashed-y pt-3">
                  <h4 class="mb-0">Total Price:</h4>
                  <h4 class="mb-0">{{ 'Rp. ' . number_format($totalPrice, 0, ',', '.') }}</h4>
                </div>
              </div>
            </div>
          </div>
        @else
          <tr>
            <td colspan="8" class="text-center py-4">
              <div
                style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%;">
                <img src="{{ asset('assets/img/No data-amico.svg') }}" alt=""
                  style="width: 200px; height: auto; max-width: 100%; display: block; margin: 0 auto;">
                <h3 class="mb-3">No Products in the checkout. Please add products to your cart before proceeding.</h3>
              </div>
            </td>
          </tr>
      @endif
    </div><!-- end of .container-->
  </section>
  {{-- Script Pembayaran --}}

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <script>
    const selectElement = document.querySelector('#selectMetode');
    const ewalletInput = document.querySelector('#ewalletInput');
    const bankInput = document.querySelector('#bankInput');
    const tujuanEwalletSelect = document.querySelector('#tujuan_ewallet');

    selectElement.addEventListener('change', function() {
      const selectedValue = selectElement.value;

      if (selectedValue === 'e-wallet') {
        ewalletInput.style.display = 'block';
        bankInput.style.display = 'none';
      } else if (selectedValue === 'bank') {
        bankInput.style.display = 'block';
        ewalletInput.style.display = 'none';
      } else {
        ewalletInput.style.display = 'none';
        bankInput.style.display = 'none';
      }
    });
  </script>
  <script>
    $(document).ready(function() {
      // Handle change event of the dropdown
      $('#tujuan_ewallet').change(function() {
        var selectedOption = $(this).find('option:selected');
        // alert(selectedOption);
        var imageUrl = selectedOption.data('foto');

        $('#ewalletImage').attr('src', imageUrl);
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Handle change event of the select element
      $('#tujuan_ewallet').change(function() {
        // Get the selected option value and its data-foto attribute
        var selectedOption = $(this).val();
        var selectedFoto = $(this).find(':selected').data('foto');

        // Set the image source and show the image
        $('#ewalletImage').attr('src', '{{ asset('storage/product/') }}/' + selectedFoto);
        $('#keterangan_ewallet').show();
      });
    });
  </script>
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
              url: "{{ route('menu.massUpdate') }}",
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
@endsection
