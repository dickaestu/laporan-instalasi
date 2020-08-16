@extends('layouts.main')
@section('title', 'Kelola Akun Teknisi')

@section('content')
<div class="container-fluid">
    
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 text-center">Daftar Teknisi</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
       
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nik</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                
                    <tbody>
                       
                        @foreach ($items as $item)
                            
                        <tr>
                            <td>{{ $item->nik }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-warning">Detail</a>
                                <a href="#" class="btn btn-sm btn-danger">Hapus</a>
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