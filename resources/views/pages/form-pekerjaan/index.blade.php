@extends('layouts.main')
@section('title', 'Hasil Pengerjaan')

@section('content')
<div class="container-fluid">
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>    
    @endif
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 text-center">Hasil Pengerjaan</h1>
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
   
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
                            <th class="text-center"colspan="3">Aksi</th>
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
                            <td><a href="{{ route('edit-data', $item->id) }}" class="btn btn-sm btn-warning">Detail</a></td>
                                <td><form action="{{ route('delete-data', $item->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                            <td><a href="{{ route('pages/export/export-teknisi', $item->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-download"></i> Pdf</a></td>
                            
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