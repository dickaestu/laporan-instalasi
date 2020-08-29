@extends('layouts.main')
@section('title', 'Edit Hasil Pengerjaan')
@section('content')
<div class="container-fluid">
    
    @if ($errors->any())
    <div class="alert alert-danger mt-2">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
    @endif
    <!-- Page Heading -->
    <form action="{{ route('update-data', $item->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="container">
            <h4 class="text-center mb-4 text-gray-800">LAPORAN PENYELESAIAN PEKERJAAN INSTALASI PASANG SAMBUNG BARU/MIGRASI</h4>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="sto">STO</label>
                                <select name="sto" class="form-control form-control-sm  @error('sto') is-invalid @enderror" id="sto">
                                    <option value="{{ $item->sto }}">{{ $item->sto }}</option>
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
                                <input type="number" class="form-control form-control-sm @error('no_permintaan') is-invalid @enderror" id="no_permintaan" name="no_permintaan" value="{{ $item->no_permintaan}}">
                                @error('sto') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="nomor_telepon">No Telepon</label>
                                <input type="number" class="form-control form-control-sm @error('nomor_telepon') is-invalid @enderror " id="nomor_telepon" name="nomor_telepon" value="{{ $item->nomor_telepon }}">
                                @error('nomor_telepon') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="nomor_internet">No Internet</label>
                                <input type="number" class="form-control form-control-sm @error('nomor_internet') is-invalid @enderror" id="nomor_internet" name="nomor_internet" value="{{ $item->nomor_internet }}">
                                @error('nomor_internet') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="nama_pelanggan">Nama Pelanggan</label>
                                <input type="type" class="form-control form-control-sm @error('nama_pelanggan') is-invalid @enderror" id="nama_pelanggan" name="nama_pelanggan" value="{{ $item->nama_pelanggan }}">
                                @error('nama_pelanggan') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="tanggal_wo">Tanggal WO</label>
                                <input type="date" class="form-control form-control-sm  @error('tanggal_wo') is-invalid @enderror" id="tanggal_wo" name="tanggal_wo" value="{{ $item->tanggal_wo }}">
                                @error('tanggal_wo') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control form-control-sm @error('alamat') is-invalid @enderror" id="alamat" name="alamat">{{ $item->alamat }}</textarea>
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
                                <input type="text" class="form-control form-control-sm @error('rk_msan_odc') is-invalid @enderror" id="rk_msan_odc" name="rk_msan_odc" value="{{ $item->rk_msan_odc }}">
                                @error('rk_msan_odc') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="dp_odp">DP/ODP</label>
                                <input type="text" class="form-control form-control-sm @error('dp_odp') is-invalid @enderror" id="dp_odp" name="dp_odp" value="{{ $item->dp_odp}}">
                                @error('dp_odp') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="klem">Klem Primer/Feeder</label>
                                <input type="text" class="form-control form-control-sm @error('klem') is-invalid @enderror" id="klem" name="klem" value="{{ $item->klem }}">
                                @error('klem') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="kec">Kec sec/Distribusi</label>
                                <input type="text" class="form-control form-control-sm @error('kec') is-invalid @enderror" id="kec" name="kec" value="{{ $item->kec }}">
                                @error('kec') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <h5>Material</h5>
                            
                            <div class="form-group">
                                <label for="ac_of_sm_1b">AC-OF-SM-1B</label>
                                <input type="text" class="form-control form-control-sm @error('ac_of_sm_1b') is-invalid @enderror" id="ac_of_sm_1b" name="ac_of_sm_1b" value="{{ $item->ac_of_sm_1b }}">
                                @error('ac_of_sm_1b') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="form-group">
                                <label for="breket_a">BREKET.A</label>
                                <input type="text" class="form-control form-control-sm @error('breket_a') is-invalid @enderror" id="breket_a" name="breket_a" value="{{ $item->breket_a }}">
                                @error('breket_a') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="rs_in_sc_1">RS-IN-SC-1</label>
                                <input type="text" class="form-control form-control-sm @error('rs_in_sc_1') is-invalid @enderror" id="rs_in_sc_1" name="rs_in_sc_1" value="{{ $item->rs_in_sc_1 }}">
                                @error('rs_in_sc_1') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="soc_ils">SOC_ILS</label>
                                <input type="text" class="form-control form-control-sm @error('soc_ils') is-invalid @enderror" id="soc_ils" name="soc_ils" value="{{ $item->soc_ils }}">
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
                                <input type="text" class="form-control form-control-sm @error('ont') is-invalid @enderror" id="ont" name="ont" value="{{ $item->ont }}">
                                @error('ont') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="" class="d-block">Lampu Indikator ONT Nyala</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="indikator_ont_power" type="checkbox" id="indikator_ont_power" value="1" {{ $item->indikator_ont_power == true ? 'checked' : '' }}>
                                    <label class="form-check-label" for="indikator_ont_power">Power</label>
                                    
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="indikator_ont_dsl" type="checkbox" id="indikator_ont_dsl" value="1" {{ $item->indikator_ont_dsl == true ? 'checked' : '' }}>
                                    <label class="form-check-label" for="indikator_ont_dsl">DSL</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="indikator_ont_internet" id="indikator_ont_internet" value="1" {{ $item->indikator_ont_internet == true ? 'checked' : '' }}>
                                    <label class="form-check-label" for="indikator_ont_internet">Internet</label>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="nama_teknisi">Nama Teknisi</label>
                                <input type="text" class="form-control form-control-sm @error('nama_teknisi') is-invalid @enderror" id="nama_teknisi" name="nama_teknisi" value="{{ Auth::user()->name }}" readonly>
                                @error('nama_teknisi') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="nama_anggota_1">Nama Anggota 1</label>
                                <input type="text" class="form-control form-control-sm @error('nama_anggota_1') is-invalid @enderror" id="nama_anggota_1" name="nama_anggota_1" value="{{ $item->nama_anggota_1 }}">
                                @error('nama_anggota_1') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="nama_anggota_2">Nama Anggota 2</label>
                                <input type="text" class="form-control form-control-sm @error('nama_anggota_2') is-invalid @enderror" id="nama_anggota_2" name="nama_anggota_2" value="{{$item->nama_anggota_2 }}">
                                @error('nama_anggota_2') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="stb_tambahan">STB Tambahan</label>
                                <input type="number" class="form-control form-control-sm @error('stb_tambahan') is-invalid @enderror" id="stb_tambahan" name="stb_tambahan" value="{{ $item->stb_tambahan }}">
                                @error('stb_tambahan') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="sn_ont">S/N ONT</label>
                                <input type="text" class="form-control form-control-sm @error('sn_ont') is-invalid @enderror" id="sn_ont" name="sn_ont" value="{{ $item->sn_ont }}">
                                @error('sn_ont') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="sn_plc">SN PLC</label>
                                <input type="text" class="form-control form-control-sm @error('sn_plc') is-invalid @enderror" id="sn_plc" name="sn_plc" value="{{ $item->sn_plc }}">
                                @error('sn_plc') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="sn_wifi_ext">SN WIFI EXT</label>
                                <input type="text" class="form-control form-control-sm @error('sn_wifi_ext') is-invalid @enderror" id="sn_wifi_ext" name="sn_wifi_ext" value="{{ $item->sn_wifi_ext }}">
                                @error('sn_wifi_ext') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="mac_address_stb">Mac Address STB</label>
                                <input type="text" class="form-control form-control-sm @error('mac_address_stb') is-invalid @enderror" id="mac_address_stb" name="mac_address_stb" value="{{ $item->mac_address_stb }}">
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
                                <input class="form-check-input psb" autocomplete="off" type="radio" name="psb" id="exampleRadios1" value="1P [Voice] / 1P [Internet]" {{ $item->psb == '1P [Voice] / 1P [Internet]' ? 'checked' :'' }}>
                                <label class="form-check-label" for="exampleRadios1">
                                    1P [Voice] / 1P [Internet]
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input psb" autocomplete="off" type="radio" name="psb" id="exampleRadios2" value="2P [Voice + Internet]" {{ $item->psb == '2P [Voice + Internet]' ? 'checked' :'' }}>
                                <label class="form-check-label" for="exampleRadios2">
                                    2P [Voice + Internet]
                                </label>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input psb" autocomplete="off" type="radio" name="psb" id="exampleRadios2" value="3P" {{ $item->psb == '3P' ? 'checked' :'' }}>
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
                                        <input class="form-check-input tambahan" autocomplete="off" type="radio" name="tambahan" id="changeSTB" value="change stb" {{ $item->tambahan == 'change stb' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="changeSTB">
                                            Change STB
                                        </label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input tambahan" autocomplete="off" type="radio" name="tambahan" id="plc" value="plc" {{ $item->tambahan == 'plc' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="plc">
                                            PLC
                                        </label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input tambahan" autocomplete="off" type="radio" name="tambahan" id="indibox" value="indibox" {{ $item->tambahan == 'indibox' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="indibox">
                                            IndiBox
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input tambahan" autocomplete="off" type="radio" name="tambahan" id="stbTambahan" value="stb tambahan" {{ $item->tambahan == 'stb tambahan' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="stbTambahan">
                                            STB Tambahan
                                        </label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input tambahan" autocomplete="off" type="radio" name="tambahan" id="wifiExtender" value="wifi extender" {{ $item->tambahan  == 'wifi extender' ? 'checked' : '' }}>
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
                                        <input class="form-check-input migrasi" autocomplete="off" type="radio" name="migrasi" id="exampleRadios1" value="Infrastruktur 1P-1P[Voice]" {{ $item->migrasi  == 'Infrastruktur 1P-1P[Voice]' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="exampleRadios1">
                                            1P-1P [Voice]
                                        </label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input migrasi" autocomplete="off" type="radio" name="migrasi" id="exampleRadios1" value="Infrastruktur 1P-1P[Internet]" {{ $item->migrasi  == 'Infrastruktur 1P-1P[Internet]' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="exampleRadios1">
                                            1P-1P [Internet]
                                        </label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input migrasi" autocomplete="off" type="radio" name="migrasi" id="exampleRadios1" value="Infrastruktur 1P-2P[Voice + Internet]" {{ $item->migrasi  == 'Infrastruktur 1P-2P[Voice + Internet]' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="exampleRadios1">
                                            1P-2P [Voice + Internet]
                                        </label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input migrasi" autocomplete="off" type="radio" name="migrasi" id="exampleRadios1" value="Infrastruktur 1P-2P[Internet + Usee Tv]" {{ $item->migrasi  == 'Infrastruktur 1P-2P[Internet + Usee Tv]' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="exampleRadios1">
                                            1P-2P [Internet + Usee Tv]
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input migrasi" autocomplete="off" type="radio" name="migrasi" id="exampleRadios1" value="Infrastruktur 2P-2P[Internet + Voice]" {{ $item->migrasi  == 'Infrastruktur 2P-2P[Internet + Voice]' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="exampleRadios1">
                                            2P-2P [Internet + Voice]
                                        </label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input migrasi" autocomplete="off" type="radio" name="migrasi" id="exampleRadios1" value="Infrastruktur 2P-2P[Internet + Usee Tv]" {{ $item->migrasi  == 'Infrastruktur 2P-2P[Internet + Usee Tv]' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="exampleRadios1">
                                            2P-2P [Internet + Usee Tv]
                                        </label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input migrasi" autocomplete="off" type="radio" name="migrasi" id="exampleRadios1" value="Infrastruktur 1P-3P" {{ $item->migrasi  == 'Infrastruktur 1P-3P' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="exampleRadios1">
                                            1P-3P
                                        </label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input migrasi" autocomplete="off" type="radio" name="migrasi" id="exampleRadios1" value="Infrastruktur 2P-3P" {{ $item->migrasi  == 'Infrastruktur 2P-3P' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="exampleRadios1">
                                            2P-3P
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input migrasi" autocomplete="off" type="radio" name="migrasi" id="exampleRadios1" value="Infrastruktur 3P-3P" {{ $item->migrasi  == 'Infrastruktur 3P-3P' ? 'checked' : '' }}>
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
                                        <input class="form-check-input migrasi" autocomplete="off" type="radio" name="migrasi" id="exampleRadios1" value="Layanan 1P-2P[Voice + Internet]" {{ $item->migrasi  == 'Layanan 1P-2P[Voice + Internet]' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="exampleRadios1">
                                            1P-2P [Voice + Internet]
                                        </label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input migrasi" autocomplete="off" type="radio" name="migrasi" id="exampleRadios1" value="Layanan 1P-2P[Internet + Usee Tv]" {{ $item->migrasi  == 'Layanan 1P-2P[Internet + Usee Tv]' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="exampleRadios1">
                                            1P-2P [Internet + Usee Tv]
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input migrasi" autocomplete="off" type="radio" name="migrasi" id="exampleRadios1" value="Layanan 1P-3P" {{ $item->migrasi  == 'Layanan 1P-3P' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="exampleRadios1">
                                            1P-3P
                                        </label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input migrasi" autocomplete="off" type="radio" name="migrasi" id="exampleRadios1" value="Layanan 2P-3P" {{ $item->migrasi  == 'Layanan 2P-3P' ? 'checked' : '' }}>
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
                        <input class="form-check-input" type="radio" name="speed" id="exampleRadios1" value="10 MB" {{ $item->speed == '10 MB' ? 'checked':'' }}>
                        <label class="form-check-label" for="exampleRadios1">
                            10 MB
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="speed" id="exampleRadios1" value="20 MB" {{ $item->speed == '20 MB' ? 'checked':'' }}>
                        <label class="form-check-label" for="exampleRadios1">
                            20 MB
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="speed" id="exampleRadios1" value="30 MB" {{ $item->speed == '30 MB' ? 'checked':'' }}>
                        <label class="form-check-label" for="exampleRadios1">
                            30 MB
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="speed" id="exampleRadios1" value="40 MB" {{ $item->speed == '40 MB' ? 'checked':'' }}>
                        <label class="form-check-label" for="exampleRadios1">
                            40 MB
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="speed" id="exampleRadios1" value="50 MB" {{ $item->speed == '50 MB' ? 'checked':'' }}>
                        <label class="form-check-label" for="exampleRadios1">
                            50 MB
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="speed" id="exampleRadios1" value="100 MB" {{ $item->speed == '100 MB' ? 'checked':'' }}>
                        <label class="form-check-label" for="exampleRadios1">
                            100 MB
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="speed" id="exampleRadios1" value="200 MB" {{ $item->speed == '200 MB' ? 'checked':'' }}>
                        <label class="form-check-label" for="exampleRadios1">
                            200 MB
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="speed" id="exampleRadios1" value="300 MB" {{ $item->speed == '300 MB' ? 'checked':'' }}>
                        <label class="form-check-label" for="exampleRadios1">
                            300 MB
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="speed" id="exampleRadios1" value="Other" {{ $item->speed == 'Other' ? 'checked':'' }}>
                        <label class="form-check-label" for="exampleRadios1">
                            Other
                        </label>
                    </div>
                </div>
                @error('speed') <div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                
            </div>
            
            <div class="row justify-content-center my-5">
                <button type="submit" class="btn px-5 py-2 btn-primary btn-lg">Edit</button>
                
            </div>
        </div>
    </form>
</div>
@endsection

@push('addon-script')
<script>
    
    $(document).ready(function(){
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
