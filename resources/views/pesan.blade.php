@extends('layouts.layouts')

@section('css')
@stop

@section('content')

<div class="card px-5 py-5">
    <div class="card-body">
        <h5 class="mb-3">Form Pendaftaran</h5>
        <form method="POST" action="{{ url('/pesan/store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-6">
                    <p>Nama Pemesanan</p>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div class="col-md-6">
                    <p>No Telp.</p>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="notelp" name="notelp">
                    </div>
                </div>
                <div class="col-md-6">
                    <p>Tanggal Pemesanan</p>
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal Pesan">
                    </div>
                </div>
                <div class="col-md-6">
                    <p>Durasi (Hari)</p>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="durasi" name="durasi" value="1">
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col mt-4">
                        <h6>Pilih Kamar</h6>
                        <div class="col-md-6 mt-4">
                            <div class="form-check">
                                <input type="radio" id="deluxe" name="tipe_kamar" class="form-check-input" value="Deluxe" checked>
                                <label class="form-check-label" for="deluxe">
                                    <span class="d-block d-md-none">1</span>
                                    <span class="d-none d-md-block">Deluxe (Rp. 1.000.000)</span>
                                </label>
                            </div>
                        </div>

                        <div class="col-md-6 mt-4">
                            <div class="form-check">
                                <input type="radio" id="standard" name="tipe_kamar" class="form-check-input" value="Standard">
                                <label class="form-check-label" for="standard">
                                    <span class="d-block d-md-none">2</span>
                                    <span class="d-none d-md-block">Standard (Rp. 800.000)</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col mt-4">
                        <h6>Pilih Fasilitas</h6>
                        <div class="col-md-6 mt-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="smoking_room" name="smoking_room">
                                <label class="form-check-label" for="smoking_room">
                                    Include Smoking Room (Rp. 200.000)
                                </label>
                            </div>
                        </div>

                        <div class="col-md-6 mt-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="breakfast" name="breakfast">
                                <label class="form-check-label" for="breakfast">
                                    Include Breakfast (Rp. 100.000)
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mt-4">
                    <div class="col-md-6">
                        <p>Harga Paket</p>
                        <div class="form-floating mb-3">
                            <input type="text" disabled class="form-control" id="hargapaket" name="harga_paket">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-4">
                    <div class="col-md-6">
                        <p>Jumlah Tagihan</p>
                        <div class="form-floating mb-3">
                            <input type="text" disabled class="form-control" id="jumlahtagihan" name="jumlah_tagihan">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <button class="btn btn-secondary" type="submit">Submit</button>
            </div>
        </form>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

    </div>
</div>

@section('js')
<script src="{{ asset('dist/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('dist/libs/simplebar/dist/simplebar.min.js') }}"></script>
<script src="{{ asset('dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!--  core files -->
<script src="{{ asset('dist/js/app.min.js') }}"></script>
<script src="{{ asset('dist/js/app.init.js')}}"></script>
<script src="{{ asset('dist/js/app-style-switcher.js') }}"></script>
<script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
<script src="{{ asset('dist/js/custom.js') }}"></script>
<!--  current page js files -->
<script src="{{ asset('dist/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
<script src="{{ asset('dist/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{ asset('dist/js/dashboard.js') }}"></script>
<script src="{{ asset('dist/js/dashboard3.js') }}"></script>
<script src="{{ asset('dist/libs/fullcalendar/index.global.min.js') }}"></script>
<script src="{{ asset('dist/js/apps/calendar-init.js') }}"></script>

<!-- Custom JS for form calculation -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const deluxeRadio = document.getElementById('deluxe');
        const standardRadio = document.getElementById('standard');
        const smokingRoomCheckbox = document.getElementById('smoking_room');
        const breakfastCheckbox = document.getElementById('breakfast');
        const durasiInput = document.getElementById('durasi');
        const hargaPaketInput = document.getElementById('hargapaket');
        const jumlahTagihanInput = document.getElementById('jumlahtagihan');

        function updateTotal() {
            let totalPaket = 0;

            if (deluxeRadio.checked) {
                totalPaket += 1000000; // Fixed value for Deluxe Room
            } else if (standardRadio.checked) {
                totalPaket += 800000; // Fixed value for Standard Room
            }

            if (smokingRoomCheckbox.checked) {
                totalPaket += 200000; // Harga Smoking Room
            }

            if (breakfastCheckbox.checked) {
                totalPaket += 100000; // Harga Breakfast
            }

            const durasi = parseInt(durasiInput.value, 10) || 1; // Default to 1 if no value
            const totalTagihan = totalPaket * durasi;

            hargaPaketInput.value = 'Rp. ' + totalPaket.toLocaleString('id-ID');
            jumlahTagihanInput.value = 'Rp. ' + totalTagihan.toLocaleString('id-ID');
        }

        deluxeRadio.addEventListener('change', updateTotal);
        standardRadio.addEventListener('change', updateTotal);
        smokingRoomCheckbox.addEventListener('change', updateTotal);
        breakfastCheckbox.addEventListener('change', updateTotal);
        durasiInput.addEventListener('input', updateTotal);

        updateTotal();
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if ($message = session()->get('success'))
<script type="text/javascript">
    Swal.fire({
        icon: 'success',
        title: 'Sukses!',
        text: '{{ $message }}',
    })
</script>
@endif

@if ($message = session()->get('error'))
<script type="text/javascript">
    Swal.fire({
        icon: 'error',
        title: 'Waduh!',
        text: '{{ $message }}',
    })
</script>
@endif


@stop
@endsection