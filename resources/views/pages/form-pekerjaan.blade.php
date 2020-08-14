@extends('layouts.main')
@section('title', 'Form Pekerjaan')

@section('content')
<div class="container-fluid">
    
    <!-- Page Heading -->
    
    <div class="container">
        <h4 class="text-center mb-4 text-gray-800">LAPORAN PENYELESAIAN PEKERJAAN INSTALASI PASANG SAMBUNG BARU/MIGRASI</h4>
        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="sto">STO</label>
                            <select name="sto" class="form-control form-control-sm" id="sto">
                                <option>CPD</option>
                                <option>CKL</option>
                                <option>LGK</option>
                                <option>PPG</option>
                                <option>CUG</option>
                                <option>PKU</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="no_permintaan">No Permintaan</label>
                            <input type="number" class="form-control form-control-sm" id="no_permintaan" name="no_permintaan">
                        </div>
                        
                        <div class="form-group">
                            <label for="nomor_telepon">No Telpon</label>
                            <input type="number" class="form-control form-control-sm" id="nomor_telepon" name="nomor_telepon">
                        </div>
                        
                        <div class="form-group">
                            <label for="nomor_internet">No Internet</label>
                            <input type="number" class="form-control form-control-sm" id="nomor_internet" name="nomor_internet">
                        </div>
                        
                        <div class="form-group">
                            <label for="nama_pelanggan">Nama Pelanggan</label>
                            <input type="type" class="form-control form-control-sm" id="nama_pelanggan" name="nama_pelanggan">
                        </div>
                        
                        <div class="form-group">
                            <label for="tanggal_wo">Tanggal WO</label>
                            <input type="date" class="form-control form-control-sm" id="tanggal_wo" name="tanggal_wo">
                        </div>
                        
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea type="date" class="form-control form-control-sm" id="alamat" name="alamat"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <h5>DATEK</h5>
                        
                        <div class="form-group">
                            <label for="rk_msan_doc">RK/MSAN/ODC</label>
                            <input type="text" class="form-control form-control-sm" id="rk_msan_doc" name="rk_msan_doc">
                        </div>
                        
                        <div class="form-group">
                            <label for="dp_odp">DP/ODP</label>
                            <input type="text" class="form-control form-control-sm" id="dp_odp" name="dp_odp">
                        </div>
                        
                        <div class="form-group">
                            <label for="klem">Klem Primer/Feeder</label>
                            <input type="text" class="form-control form-control-sm" id="klem" name="klem">
                        </div>
                        
                        <div class="form-group">
                            <label for="kec">Kec sec/Distribusi</label>
                            <input type="text" class="form-control form-control-sm" id="kec" name="kec">
                        </div>
                        
                        <h5>Material</h5>
                        
                        <div class="form-group">
                            <label for="ac_of_sm_1b">AC-OF-SM-1B</label>
                            <input type="text" class="form-control form-control-sm" id="ac_of_sm_1b" name="ac_of_sm_1b">
                        </div>
                        
                        <div class="form-group">
                            <label for="rs_in_sc_1">RS-IN-SC-1</label>
                            <input type="text" class="form-control form-control-sm" id="rs_in_sc_1" name="rs_in_sc_1">
                        </div>
                        
                        <div class="form-group">
                            <label for="utp_c6">UTP-C6</label>
                            <input type="text" class="form-control form-control-sm" id="utp_c6" name="utp_c6">
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
                            <input type="text" class="form-control form-control-sm" id="ont" name="ont">
                        </div>
                        
                        <div class="form-group">
                            <label for="" class="d-block">Lampu Indikator ONT Nyala</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="indikator_ont_power" type="checkbox" id="indikator_ont_power" value="power">
                                <label class="form-check-label" for="indikator_ont_power">Power</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="indikator_ont_dsl" type="checkbox" id="indikator_ont_dsl" value="dsl">
                                <label class="form-check-label" for="indikator_ont_dsl">DSL</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="indikator_ont_internet" id="indikator_ont_internet" value="internet">
                                <label class="form-check-label" for="indikator_ont_internet">Internet</label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="nama_teknisi">Nama Teknisi</label>
                            <input type="text" class="form-control form-control-sm" id="nama_teknisi" name="nama_teknisi">
                        </div>
                        
                        <div class="form-group">
                            <label for="nama_anggota_1">Nama Anggota 1</label>
                            <input type="text" class="form-control form-control-sm" id="nama_anggota_1" name="nama_anggota_1">
                        </div>
                        
                        <div class="form-group">
                            <label for="nama_anggota_2">Nama Anggota 2</label>
                            <input type="text" class="form-control form-control-sm" id="nama_anggota_2" name="nama_anggota_2">
                        </div>
                        
                        <div class="form-group">
                            <label for="stb_tambahan">STB Tambahan</label>
                            <input type="text" class="form-control form-control-sm" id="stb_tambahan" name="stb_tambahan">
                        </div>
                        
                        <div class="form-group">
                            <label for="sn_ont">S/N ONT</label>
                            <input type="text" class="form-control form-control-sm" id="sn_ont" name="sn_ont">
                        </div>
                        
                        <div class="form-group">
                            <label for="sn_plc">SN PLC</label>
                            <input type="text" class="form-control form-control-sm" id="sn_plc" name="sn_plc">
                        </div>
                        
                        <div class="form-group">
                            <label for="sn_wifi_ext">SN WIFI EXT</label>
                            <input type="text" class="form-control form-control-sm" id="sn_wifi_ext" name="sn_wifi_ext">
                        </div>
                        
                        <div class="form-group">
                            <label for="mac_address_stb">Mac Address STB</label>
                            <input type="text" class="form-control form-control-sm" id="mac_address_stb" name="mac_address_stb">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <h5 class="text-center mb-4">PSB</h5>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="psb" id="exampleRadios1" value="1P">
                            <label class="form-check-label" for="exampleRadios1">
                                1P [Voice] / 1P [Internet]
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" name="psb" id="exampleRadios2" value="2P">
                            <label class="form-check-label" for="exampleRadios2">
                                2P [Voice + Internet]
                            </label>
                        </div>
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="radio" name="psb" id="exampleRadios2" value="3P">
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
                        
                        <div class="row">
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tambahan" id="changeSTB" value="change stb">
                                    <label class="form-check-label" for="changeSTB">
                                        Change STB
                                    </label>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="radio" name="tambahan" id="plc" value="plc">
                                    <label class="form-check-label" for="plc">
                                        PLC
                                    </label>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="radio" name="tambahan" id="indibox" value="indibox">
                                    <label class="form-check-label" for="indibox">
                                        IndiBox
                                    </label>
                                </div>
                            </div>
                            
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tambahan" id="stbTambahan" value="stb tambahan">
                                    <label class="form-check-label" for="stbTambahan">
                                        STB Tambahan
                                    </label>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="radio" name="tambahan" id="wifiExtender" value="wifi extender">
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
                        <div class="row">
                            <div class="col">
                                <p>Infrastruktur :</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="migrasi" id="exampleRadios1" value="Infrastruktur 1P-1P[Voice]">
                                    <label class="form-check-label" for="exampleRadios1">
                                        1P-1P [Voice]
                                    </label>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="radio" name="migrasi" id="exampleRadios1" value="Infrastruktur 1P-1P[Internet]">
                                    <label class="form-check-label" for="exampleRadios1">
                                        1P-1P [Internet]
                                    </label>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="radio" name="migrasi" id="exampleRadios1" value="Infrastruktur 1P-2P[Voice + Internet]">
                                    <label class="form-check-label" for="exampleRadios1">
                                        1P-2P [Voice + Internet]
                                    </label>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="radio" name="migrasi" id="exampleRadios1" value="Infrastruktur 1P-2P{Internet + Usee Tv}">
                                    <label class="form-check-label" for="exampleRadios1">
                                        1P-2P [Internet + Usee Tv]
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="migrasi" id="exampleRadios1" value="Infrastruktur 2P-2P[Internet + Voice]">
                                    <label class="form-check-label" for="exampleRadios1">
                                        2P-2P [Internet + Voice]
                                    </label>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="radio" name="migrasi" id="exampleRadios1" value="Infrastruktur 2P-2P[Internet + Usee Tv]">
                                    <label class="form-check-label" for="exampleRadios1">
                                        2P-2P [Internet + Usee Tv]
                                    </label>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="radio" name="migrasi" id="exampleRadios1" value="Infrastruktur 1P-3P">
                                    <label class="form-check-label" for="exampleRadios1">
                                        1P-3P
                                    </label>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="radio" name="migrasi" id="exampleRadios1" value="Infrastruktur 2P-3P">
                                    <label class="form-check-label" for="exampleRadios1">
                                        2P-3P
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="migrasi" id="exampleRadios1" value="Infrastruktur 3P-3P">
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
                                    <input class="form-check-input" type="radio" name="migrasi" id="exampleRadios1" value="Layanan 1P-2P[Voice + Internet]">
                                    <label class="form-check-label" for="exampleRadios1">
                                        1P-2P [Voice + Internet]
                                    </label>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="radio" name="migrasi" id="exampleRadios1" value="Layanan 1P-2P[Internet + Usee Tv]">
                                    <label class="form-check-label" for="exampleRadios1">
                                        1P-2P [Internet + Usee Tv]
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="migrasi" id="exampleRadios1" value="Layanan 1P-3P">
                                    <label class="form-check-label" for="exampleRadios1">
                                        1P-3P
                                    </label>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="radio" name="migrasi" id="exampleRadios1" value="Layanan 2P-3P">
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
            
        </div>

        <div class="row justify-content-center my-5">
            <button class="btn px-5 py-2 btn-primary btn-lg">Kirim</button>
        </div>
    </div>
</div>
@endsection