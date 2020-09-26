@extends('layouts.main')
@section('title', 'Buat Akun Teknisi')

@section('content')
<div class="container-fluid">
    
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 text-center">Buat Akun</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        
        <div class="card-body">
            <form action="{{route('store-akun-teknisi')}}" method="post">
                @csrf
                
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" required class="form-control form-control-sm @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                    @error('name') <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" required class="form-control form-control-sm @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                    @error('email') <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" required class="form-control form-control-sm @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}">
                    @error('password') <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="number" required class="form-control form-control-sm @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{ old('nik') }}">
                    @error('nik') <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="nomor_telepon">Nomor Telepon</label>
                    <input type="number" required class="form-control form-control-sm @error('nomor_telepon') is-invalid @enderror" id="nomor_telepon" name="nomor_telepon" value="{{ old('nomor_telepon') }}">
                    @error('nomor_telepon') <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                
                <div class="form-group">
                    <label>Pilih Roles</label>
                    <select name="roles" class="form-control  @error('roles') is-invalid @enderror" required>
                        <option value="0" selected>Silahkan Pilih</option>
                        <option value="TEKNISI">Teknisi</option>
                        <option value="ADMIN">Admin</option>
                    </select>
                    @error('roles') <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                
                <button type="submit" class="btn btn-block btn-success">Submit</button>
            </form>
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