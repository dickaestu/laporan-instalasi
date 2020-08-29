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
    <h1 class="h3 mb-4 text-gray-800 text-center">Laporan Pekerjaan Teknisi</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3">
            
            
           
          
          <div class="col-md-12" align="right">
          <a href="{{ route('pages/admin/export/exportExcel') }}" class="btn btn-sm btn-success">Export Excel</a>
        </div>
        </div>
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>STO</th>
                            <th>No Permintaan</th>
                            <th>Nama Pelanggan</th>
                            <th>No Telepon</th>
                            <th>No Internet</th>
                            <th>Alamat</th>
                            <th>Tanggal WO</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        
                        @foreach ($items as $item)
                        
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->sto }}</td>
                            <td>{{ $item->no_permintaan }}</td>
                            <td>{{ $item->nama_pelanggan }}</td>
                            <td>{{ $item->nomor_telepon }}</td>
                            <td>{{ $item->nomor_internet }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->tanggal_wo }}</td>
                            
                            <td>
                                <a href="{{ route('pages/admin/export/export-pdf') }}" class="btn btn-sm btn-danger">Export Pdf</a>
                                
                            </td>
                            
                            
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