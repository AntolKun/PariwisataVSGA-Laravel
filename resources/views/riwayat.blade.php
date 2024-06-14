@extends('layouts.layouts')

@section('css')
<link rel="stylesheet" href="{{ asset('dist/libs/prismjs/themes/prism-okaidia.min.css') }}">
<link rel="stylesheet" href="{{ asset('dist/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
<link id="themeColors" rel="stylesheet" href="{{ asset('dist/css/style.min.css')}}" />
@stop

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card w-100">
            <div class="card-body">
                <div class="mb-2">
                    <h5 class="mb-0">Riwayat Pesanan</h5>
                </div>
                <div class="table-responsive">
                    <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
                        <thead>
                            <!-- start row -->
                            <tr>
                                <th>Nama Pemesan</th>
                                <th>Nomor Telepon</th>
                                <th>Tanggal</th>
                                <th>Durasi</th>
                                <th>Tipe Kamar</th>
                                <th>Smoking Room</th>
                                <th>Breakfast</th>
                                <th>Tagihan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($booking as $b)
                            <tr>
                                <td>{{ $b->nama }}</td>
                                <td>{{ $b->notelp }}</td>
                                <td>{{ $b->tanggal }}</td>
                                <td>{{ $b->durasi }}</td>
                                <td>{{ $b->tipe_kamar }}</td>
                                <td>@if ($b->smoking_room == true)
                                    <span class="badge bg-success">
                                        YA
                                    </span>
                                    @endif
                                    @if ($b->smoking_room == false)
                                    <span class="badge bg-danger">
                                        TIDAK
                                    </span>
                                    @endif
                                </td>
                                <td>@if ($b->breakfast == true)
                                    <span class="badge bg-success">
                                        YA
                                    </span>
                                    @endif
                                    @if ($b->breakfast == false)
                                    <span class="badge bg-danger">
                                        TIDAK
                                    </span>
                                    @endif
                                </td>
                                <td>Rp. {{ $b->jumlah_tagihan }}</td>
                                <td>
                                    <div class="row">
                                        <!-- <button type="button" class="btn btn-primary waves-effect waves-light">Edit</button> -->
                                        <div class="col-lg-6">
                                            <button type="button" class="btn btn-primary waves-effect waves-light"><a href="#" ></a>Edit</button>
                                        </div>
                                        <div class="col-lg-6">
                                            <form action="/riwayatDelete/{{ $b->id }}" method="POST">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit" class="btn btn-danger waves-effect waves-light">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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

<script src="{{ asset('dist/libs/prismjs/prism.js') }}"></script>
<script src="{{ asset('dist/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('dist/js/datatable/datatable-basic.init.js')}}"></script>

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