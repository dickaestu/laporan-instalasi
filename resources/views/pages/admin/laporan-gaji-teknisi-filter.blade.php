@extends('layouts.main')
@section('title', 'Laporan Gaji Teknisi')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 text-center">Laporan Gaji Teknisi ({{ $month_view }})</h1>
    <nav class="breadcrumb bg-transparent">
        <a class="breadcrumb-item" href="{{ route('laporan-gaji-teknisi') }}">Kembali</a>
        <span class="breadcrumb-item active">Laporan Gaji Teknisi</span>
    </nav>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jumlah PSB</th>
                            <th>Jumlah Migrasi</th>
                            <th>Jumlah Tambahan</th>
                            <th>Total Gaji</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->nama_teknisi }}</td>
                            <td>{{ $data->jumlah_psb }}</td>
                            <td>{{ $data->jumlah_migrasi }}</td>
                            <td>{{ $data->jumlah_tambahan }}</td>
                            <td>Rp. {{$data->total_gaji }}</td>
                     
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</div>
@endsection

@push('addon-style')
<link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@push('addon-script')

<!-- Page level plugins -->
<script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('assets/js/demo/datatables-demo.js') }}"></script>
@endpush