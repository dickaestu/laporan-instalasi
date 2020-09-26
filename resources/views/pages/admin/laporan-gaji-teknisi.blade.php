@extends('layouts.main')
@section('title', 'Laporan Pekerjaan Teknisi')

@section('content')
<div class="container-fluid">
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>    
    @endif
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 text-center">Laporan Gaji Teknisi</h1>
    <div class="col-md-4 mb-3">
        <form action="{{ route('filter-gaji') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Pilih Bulan Dan Tahun</label>
                <input required type="date" class="form-control form-control-sm" name="date_filter">
            </div>
            <button type="submit" class="btn btn-sm btn-success">Filter</button>
        </form>
    </div>
    
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
                            <td>Rp. {{number_format($data->total_gaji) }}</td>
                     
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