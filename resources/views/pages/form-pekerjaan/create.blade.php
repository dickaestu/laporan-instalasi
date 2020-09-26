@extends('layouts.main')
@section('title', 'Form Pekerjaan')

@section('content')
<div class="container-fluid">
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>    
    @endif
    
    {{-- @if ($errors->any())
    <div class="alert alert-danger mt-2">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
    @endif --}}
    <!-- Page Heading -->
    <form action="{{ route('form-pekerjaan.store') }}" method="POST">
        @csrf
        <div class="container">
            <h4 class="text-center mb-4 text-gray-800">LAPORAN PENYELESAIAN PEKERJAAN INSTALASI PASANG SAMBUNG BARU/MIGRASI</h4>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="sto">STO</label>
                                <select name="sto" class="form-control form-control-sm  @error('sto') is-invalid @enderror" id="sto" required>
                                    <option>Silahkan Pilih</option>
                                    <option value="CPD">CPD</option>
                                    <option value="CKL">CKL</option>
                                    <option value="LGK">LGK</option>
                                    <option value="PPG">PPG</option>
                                    <option value="CUG">CUG</option>
                                    <option value="PKU">PKU</option>
                                </select>
                                @error('sto') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="no_permintaan">No Permintaan</label>
                                <input required type="number" class="form-control form-control-sm @error('no_permintaan') is-invalid @enderror" id="no_permintaan" name="no_permintaan" value="{{ old('no_permintaan') }}">
                                @error('no_permintaan') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="nomor_telepon">No Telepon</label>
                                <input required type="number" class="form-control form-control-sm @error('nomor_telepon') is-invalid @enderror " id="nomor_telepon" name="nomor_telepon" value="{{ old('nomor_telepon') }}">
                                @error('nomor_telepon') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="nomor_internet">No Internet</label>
                                <input required type="number" class="form-control form-control-sm @error('nomor_internet') is-invalid @enderror" id="nomor_internet" name="nomor_internet" value="{{ old('nomor_internet') }}">
                                @error('nomor_internet') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="nama_pelanggan">Nama Pelanggan</label>
                                <input required type="type" class="form-control form-control-sm @error('nama_pelanggan') is-invalid @enderror" id="nama_pelanggan" name="nama_pelanggan" value="{{ old('nama_pelanggan') }}">
                                @error('nama_pelanggan') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="tanggal_wo">Tanggal WO</label>
                                <input required type="date" class="form-control form-control-sm  @error('tanggal_wo') is-invalid @enderror" id="tanggal_wo" name="tanggal_wo" value="{{ old('tanggal_wo') }}">
                                @error('tanggal_wo') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea required class="form-control form-control-sm @error('alamat') is-invalid @enderror" id="alamat" name="alamat">{{ old('alamat') }}</textarea>
                                @error('alamat') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <h5>DATEK</h5>
                            
                            <div class="form-group">
                                <label for="rk_msan_odc">RK/MSAN/ODC</label>
                                <input required type="text" class="form-control form-control-sm @error('rk_msan_odc') is-invalid @enderror" id="rk_msan_odc" name="rk_msan_odc" value="{{ old('rk_msan_odc') }}">
                                @error('rk_msan_odc') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="dp_odp">DP/ODP</label>
                                <input required type="text" class="form-control form-control-sm @error('dp_odp') is-invalid @enderror" id="dp_odp" name="dp_odp" value="{{ old('dp_odp') }}">
                                @error('dp_odp') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="klem">Klem Primer/Feeder</label>
                                <input required type="number" class="form-control form-control-sm @error('klem') is-invalid @enderror" id="klem" name="klem" value="{{ old('klem') }}">
                                @error('klem') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="kec">Kec sec/Distribusi</label>
                                <input required type="number" class="form-control form-control-sm @error('kec') is-invalid @enderror" id="kec" name="kec" value="{{ old('kec') }}">
                                @error('kec') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <h5>Material</h5>
                            
                            <div class="form-group">
                                <label for="ac_of_sm_1b">AC-OF-SM-1B</label>
                                <input required type="number" class="form-control form-control-sm @error('ac_of_sm_1b') is-invalid @enderror" id="ac_of_sm_1b" name="ac_of_sm_1b" value="{{ old('ac_of_sm_1b') }}">
                                @error('ac_of_sm_1b') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group">
                                <label for="breket_a">BREKET.A</label>
                                <input required type="number"  class="form-control form-control-sm @error('breket_a') is-invalid @enderror" id="breket_a" name="breket_a" value="{{ old('breket_a') }}">
                                @error('breket_a') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="rs_in_sc_1">RS-IN-SC-1</label>
                                <input required type="number"  class="form-control form-control-sm @error('rs_in_sc_1') is-invalid @enderror" id="rs_in_sc_1" name="rs_in_sc_1" value="{{ old('rs_in_sc_1') }}">
                                @error('rs_in_sc_1') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="soc_ils">SOC-ILS</label>
                                <input required type="number"  class="form-control form-control-sm @error('soc_ils') is-invalid @enderror" id="soc_ils" name="soc_ils" value="{{ old('soc_ils') }}">
                                @error('soc_ils') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="ont">ONT yang DIPASANG/DITARIK</label>
                                <select required name="ont" class="form-control form-control-sm @error('ont') is-invalid @enderror">
                                    <option value="0">Silahkan Pilih</option>
                                    <option value="ZTE">ZTE</option>
                                    <option value="Huawei">Huawei</option>
                                    <option value="Fiber Home">Fiber Home</option>
                                </select>
                                 @error('ont') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="" class="d-block">Lampu Indikator ONT Nyala</label>
                                <div class="form-check form-check-inline">
                                    <input  class="form-check-input" name="indikator_ont_power" type="checkbox" id="indikator_ont_power" value="1">
                                    <label class="form-check-label" for="indikator_ont_power">Power</label>
                                    
                                </div>
                                <div class="form-check form-check-inline">
                                    <input  class="form-check-input" name="indikator_ont_dsl" type="checkbox" id="indikator_ont_dsl" value="1">
                                    <label class="form-check-label" for="indikator_ont_dsl">DSL</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input  class="form-check-input" type="checkbox" name="indikator_ont_internet" id="indikator_ont_internet" value="1">
                                    <label class="form-check-label" for="indikator_ont_internet">Internet</label>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label>Nama Teknisi</label>
                                <input required type="text" class="form-control form-control-sm @error('users_id_teknisi') is-invalid @enderror" id="users_id_teknisi" name="users_id_teknisi" value="{{ Auth::user()->name }}" readonly>
                                @error('users_id_teknisi') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="nama_anggota_1">Nama Anggota 1</label>
                                <select name="nama_anggota_1" required class="form-control form-control-sm @error('nama_anggota_1') is-invalid @enderror">
                                <option value="0">Silahkan Pilih Anggota</option>
                                {{-- Panggil User yang memiliki roles teknisi --}}
                                @foreach ($users as $user)
                                    <option value="{{ $user->name }}">{{ $user->name }}</option>
                                @endforeach
                                </select>
                                @error('nama_anggota_1') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="nama_anggota_2">Nama Anggota 2</label>
                                <select name="nama_anggota_2" required class="form-control form-control-sm @error('nama_anggota_2') is-invalid @enderror">
                                <option value="0">Silahkan Pilih Anggota</option>
                                {{-- Panggil User yang memiliki roles teknisi --}}
                                @foreach ($users as $user)
                                    <option value="{{ $user->name }}">{{ $user->name }}</option>
                                @endforeach
                                </select>
                                @error('nama_anggota_2') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                          
                            <div class="form-group">
                                <label for="stb_tambahan">STB Tambahan</label>
                                <input type="number" class="form-control form-control-sm @error('stb_tambahan') is-invalid @enderror" id="stb_tambahan" name="stb_tambahan" value="{{ old('stb_tambahan') }}">
                                @error('stb_tambahan') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="sn_ont">S/N ONT</label>
                                <input type="text" class="form-control form-control-sm @error('sn_ont') is-invalid @enderror" id="sn_ont" name="sn_ont" value="{{ old('sn_ont') }}">
                                @error('sn_ont') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="sn_plc">SN PLC</label>
                                <input type="number" class="form-control form-control-sm @error('sn_plc') is-invalid @enderror" id="sn_plc" name="sn_plc" value="{{ old('sn_plc') }}">
                                @error('sn_plc') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="sn_wifi_ext">SN WIFI EXT</label>
                                <input type="number" class="form-control form-control-sm @error('sn_wifi_ext') is-invalid @enderror" id="sn_wifi_ext" name="sn_wifi_ext" value="{{ old('sn_wifi_ext') }}">
                                @error('sn_wifi_ext') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="mac_address_stb">Mac Address STB</label>
                                <input type="number" class="form-control form-control-sm @error('mac_address_stb') is-invalid @enderror" id="mac_address_stb" name="mac_address_stb" value="{{ old('mac_address_stb') }}">
                                @error('mac_address_stb') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @error('psb') <div class="invalid-feedback d-block">{{ $message }}</div>@enderror
            
            <div class="row">
                
                <div class="col-lg-6">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <h5 class="text-center mb-4">PSB</h5>
                            <div class="row justify-content-end pr-4">
                                <button type="button" class="btn btn-sm btn-secondary px-1 py-1 mb-3" id="btnUncheckPsb">Uncheck</button>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input psb" autocomplete="off" type="radio" name="psb" id="exampleRadios1" value="1P [Voice] / 1P [Internet]">
                                <label class="form-check-label" for="exampleRadios1">
                                    1P [Voice] / 1P [Internet]
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input psb" autocomplete="off" type="radio" name="psb" id="exampleRadios2" value="2P [Voice + Internet]">
                                <label class="form-check-label" for="exampleRadios2">
                                    2P [Voice + Internet]
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input psb" autocomplete="off" type="radio" name="psb" id="exampleRadios2" value="3P">
                                <label class="form-check-label" for="exampleRadios2">
                                    3P
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <h5 class="text-center mb-4">Tambahan</h5>
                            <div class="row justify-content-end pr-4">
                                <button type="button" class="btn btn-sm btn-secondary px-1 py-1 mb-3" id="btnUncheckTambahan">Uncheck</button>
                            </div>
                            
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input tambahan" autocomplete="off" type="radio" name="tambahan" id="changeSTB" value="change stb">
                                        <label class="form-check-label" for="changeSTB">
                                            Change STB
                                        </label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input tambahan" autocomplete="off" type="radio" name="tambahan" id="plc" value="plc">
                                        <label class="form-check-label" for="plc">
                                            PLC
                                        </label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input tambahan" autocomplete="off" type="radio" name="tambahan" id="indibox" value="indibox">
                                        <label class="form-check-label" for="indibox">
                                            IndiBox
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input tambahan" autocomplete="off" type="radio" name="tambahan" id="stbTambahan" value="stb tambahan">
                                        <label class="form-check-label" for="stbTambahan">
                                            STB Tambahan
                                        </label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input tambahan" autocomplete="off" type="radio" name="tambahan" id="wifiExtender" value="wifi extender">
                                        <label class="form-check-label" for="wifiExtender">
                                            Wifi Extender
                                        </label>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <h5 class="text-center mb-4">Migrasi</h5>
                            <div class="row justify-content-end pr-4">
                                <button type="button" class="btn btn-sm btn-secondary px-1 py-1 mb-3" id="btnUncheckMigrasi">Uncheck</button>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p>Infrastruktur :</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input migrasi" autocomplete="off" type="radio" name="migrasi" id="exampleRadios1" value="Infrastruktur 1P-1P[Voice]">
                                        <label class="form-check-label" for="exampleRadios1">
                                            1P-1P [Voice]
                                        </label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input migrasi" autocomplete="off" type="radio" name="migrasi" id="exampleRadios1" value="Infrastruktur 1P-1P[Internet]">
                                        <label class="form-check-label" for="exampleRadios1">
                                            1P-1P [Internet]
                                        </label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input migrasi" autocomplete="off" type="radio" name="migrasi" id="exampleRadios1" value="Infrastruktur 1P-2P[Voice + Internet]">
                                        <label class="form-check-label" for="exampleRadios1">
                                            1P-2P [Voice + Internet]
                                        </label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input migrasi" autocomplete="off" type="radio" name="migrasi" id="exampleRadios1" value="Infrastruktur 1P-2P[Internet + Usee Tv]">
                                        <label class="form-check-label" for="exampleRadios1">
                                            1P-2P [Internet + Usee Tv]
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input migrasi" autocomplete="off" type="radio" name="migrasi" id="exampleRadios1" value="Infrastruktur 2P-2P[Internet + Voice]">
                                        <label class="form-check-label" for="exampleRadios1">
                                            2P-2P [Internet + Voice]
                                        </label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input migrasi" autocomplete="off" type="radio" name="migrasi" id="exampleRadios1" value="Infrastruktur 2P-2P[Internet + Usee Tv]">
                                        <label class="form-check-label" for="exampleRadios1">
                                            2P-2P [Internet + Usee Tv]
                                        </label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input migrasi" autocomplete="off" type="radio" name="migrasi" id="exampleRadios1" value="Infrastruktur 1P-3P">
                                        <label class="form-check-label" for="exampleRadios1">
                                            1P-3P
                                        </label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input migrasi" autocomplete="off" type="radio" name="migrasi" id="exampleRadios1" value="Infrastruktur 2P-3P">
                                        <label class="form-check-label" for="exampleRadios1">
                                            2P-3P
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input migrasi" autocomplete="off" type="radio" name="migrasi" id="exampleRadios1" value="Infrastruktur 3P-3P">
                                        <label class="form-check-label" for="exampleRadios1">
                                            3P-3P
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col">
                                    <p>Layanan :</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input migrasi" autocomplete="off" type="radio" name="migrasi" id="exampleRadios1" value="Layanan 1P-2P[Voice + Internet]">
                                        <label class="form-check-label" for="exampleRadios1">
                                            1P-2P [Voice + Internet]
                                        </label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input migrasi" autocomplete="off" type="radio" name="migrasi" id="exampleRadios1" value="Layanan 1P-2P[Internet + Usee Tv]">
                                        <label class="form-check-label" for="exampleRadios1">
                                            1P-2P [Internet + Usee Tv]
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input migrasi" autocomplete="off" type="radio" name="migrasi" id="exampleRadios1" value="Layanan 1P-3P">
                                        <label class="form-check-label" for="exampleRadios1">
                                            1P-3P
                                        </label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input migrasi" autocomplete="off" type="radio" name="migrasi" id="exampleRadios1" value="Layanan 2P-3P">
                                        <label class="form-check-label" for="exampleRadios1">
                                            2P-3P
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mb-3">
                <div class="col-12">
                    <h5>Speed</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="speed" id="exampleRadios1" value="10 MB">
                        <label class="form-check-label" for="exampleRadios1">
                            10 MB
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="speed" id="exampleRadios1" value="20 MB">
                        <label class="form-check-label" for="exampleRadios1">
                            20 MB
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="speed" id="exampleRadios1" value="30 MB">
                        <label class="form-check-label" for="exampleRadios1">
                            30 MB
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="speed" id="exampleRadios1" value="40 MB">
                        <label class="form-check-label" for="exampleRadios1">
                            40 MB
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="speed" id="exampleRadios1" value="50 MB">
                        <label class="form-check-label" for="exampleRadios1">
                            50 MB
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="speed" id="exampleRadios1" value="100 MB">
                        <label class="form-check-label" for="exampleRadios1">
                            100 MB
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="speed" id="exampleRadios1" value="200 MB">
                        <label class="form-check-label" for="exampleRadios1">
                            200 MB
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="speed" id="exampleRadios1" value="300 MB">
                        <label class="form-check-label" for="exampleRadios1">
                            300 MB
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="speed" id="exampleRadios1" value="Other">
                        <label class="form-check-label" for="exampleRadios1">
                            Other
                        </label>
                    </div>
                </div>
                @error('speed') <div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                
            </div>
            
            <div class="row justify-content-center my-5">
                <button type="submit" class="btn px-5 py-2 btn-primary btn-lg">Kirim</button>
                
            </div>
        </div>
    </form>
</div>
@endsection

@push('addon-script')
<script>
    
    $(document).ready(function(){
        $(".tambahan").on('click',checkStatus);
        $(".migrasi").on('click',checkStatus);
        $(".psb").on('click',checkStatus);
        
        function checkStatus(){      
            if($('.tambahan').is(':checked')){
                $('.migrasi').prop('disabled', true)
                $('.psb').prop('disabled', true)
                $('#btnUncheckMigrasi').prop('disabled',true)
                $('#btnUncheckPsb').prop('disabled',true)
            }   
            
            if($('.migrasi').is(':checked')){
                $('.tambahan').prop('disabled', true)
                $('.psb').prop('disabled', true)
                $('#btnUncheckTambahan').prop('disabled',true)
                $('#btnUncheckPsb').prop('disabled',true)
            }  
            
            if($('.psb').is(':checked')){
                $('.tambahan').prop('disabled', true)
                $('.migrasi').prop('disabled', true)
                $('#btnUncheckMigrasi').prop('disabled',true)
                $('#btnUncheckTambahan').prop('disabled',true)
            } 
        }
        
        
        $('#btnUncheckTambahan').on('click', function(){
            $('.tambahan').prop('checked', false)
            $('.migrasi').prop('disabled', false)
            $('.psb').prop('disabled', false)
            $('#btnUncheckMigrasi').prop('disabled',false)
            $('#btnUncheckPsb').prop('disabled',false)
        })
        
        $('#btnUncheckMigrasi').on('click', function(){
            $('.migrasi').prop('checked', false)
            $('.tambahan').prop('disabled', false)
            $('.psb').prop('disabled', false)
            $('#btnUncheckTambahan').prop('disabled',false)
            $('#btnUncheckPsb').prop('disabled',false)
        })
        
        $('#btnUncheckPsb').on('click', function(){
            $('.psb').prop('checked', false)
            $('.migrasi').prop('disabled', false)
            $('.tambahan').prop('disabled', false)
            $('#btnUncheckMigrasi').prop('disabled',false)
            $('#btnUncheckTambahan').prop('disabled',false)
        })
        
        
        
    })
</script>
@endpush
