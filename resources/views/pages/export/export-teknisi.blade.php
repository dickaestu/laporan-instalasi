<!DOCTYPE html>
<html lang="en">
<head>
<title>Laporan</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
 
  padding: 20px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Container for flexboxes */
section {
  display: -webkit-flex;
  display: flex;
}

/* Style the navigation menu */
nav {
  -webkit-flex: 6;
  -ms-flex: 1;
  flex: 1;
  padding: 70px;
}

/* Style the list inside the menu */


/* Style the content */



/* Responsive layout - makes the menu and the content (inside the section) sit on top of each other instead of next to each other */
@media (max-width: 600px) {
  section {
    -webkit-flex-direction: column;
    flex-direction: column;
  }
}
</style>

</head>
<body>

    <hr>
    <table align="center" style="width:85%">
        <tr>
        <td><img src="{{ltrim(public_path('img/logo.png'),'/')}}" width="140" height="30"></td>
        <td><center>
            <font size="4"><b>LAPORAN PENYELESAIAN INSTALASI </b></font><BR>
            <font size="4"><b>SAMBUNG BARU / MIGRASI</b></font><BR>
            <font size="2"><B>TANGERANG/2020</B></font>
        </td>
        <td><img src="{{ltrim(public_path('img/telkom.png'),'/')}}" width="110" height="30"></td>
        </tr>
        <tr>
        
        </tr>
        
    </table>
    
    
    
<section>
  <nav>
    Nama Mitra : Golek Raijo
    <br>
    <table border="1" align="left" style="width:50%">
        <thead>
                <th align="left">
                    <font size="2">1. STO : {{$item->sto}}</font><br>
                    <font size="2">2. No Permintaan : {{$item->no_permintaan}}</font><br>
                    <font size="2">3. NO Telepon  : {{$item->nomor_telepon}}</font><br>
                    <font size="2">4. No Inet  : {{$item->nomor_internet}}</font><br>
                    <font size="2">5. Tanggal WO : {{$item->tanggal_wo}}</font><br>
                    <font size="2">6. Nama Pelanggan  : {{$item->nama_pelanggan}}</font><br>
                
                    <font size="2">DATEK</font><br>
                    <font size="2">1. RK/MSAN/ODC  : {{$item->rk_msan_odc}}</font><br>
                    <font size="2">2. DP/ODP  : {{$item->dp_odp}}</font><br>
                    <font size="2">3. Klem Primer/Feeder : {{$item->klem}}</font><br>
                    <font size="2">4. Kec sec/Distribusi  : {{$item->kec}}</font><br>
                    <font size="2">Material</font><br>
                    <font size="2">1. AC-OF-SM-1B  : {{$item->ac_of_sm_1b}}</font><br>
                    <font size="2">2. BREKET.A  : {{$item->breket_a}}</font><br>
                    <font size="2">3. RS-IN-SC-1  : {{$item->rs_in_sc_1}}</font><br><br>
                </th>
                
        </thead>
    </table>
      
    <table border="1" align="right" align="center" style="width:50%">
        
            <tr>
                <br>
                <font size="2"><b>
                        <td align="center"><br><br><br><br><br><br><br>{{$item->alamat}}
                    </b><br><br><br><br><br><br><br><br><br>
                    </font>
            </tr>
        
        </table>
        
  
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
    <table style="font-size: 14px; width:100%">
        <tr><td>- <b>ONT yang DIPASANG / DITARIK :</b> {{$item->ont}}</td><td><b>S/N ONT  :</b> {{$item->sn_ont}}</td></tr>
        <tr><td>- <b>Lampu Indikator ONT Nyala :</b> 
            <span style="display: inline-block; margin-top:5px; margin-right:5px"><input style="vertical-align: bottom;" type="checkbox" id="indikator_ont_power" name="indikator_ont_power" value="" {{$item->indikator_ont_power == true ? 'checked' : ''}}>
            <label for="indikator_ont_power">Power</label></span>
            <span style="display: inline-block; margin-top:5px; margin-right:5px"><input style="vertical-align: bottom;" type="checkbox" id="indikator_ont_dsl" name="indikator_ont_dsl" value="" {{$item->indikator_ont_dsl == true ? 'checked' : ''}}>
            <label for="indikator_ont_dsl">DSL</label></span>
            <span style="display: inline-block; margin-top:5px"><input style="vertical-align: bottom;" type="checkbox" id="indikator_ont_internet" name="indikator_ont_internet" value="" {{$item->indikator_ont_internet == true ? 'checked' : ''}}>
            <label for="indikator_ont_internet">Internet</label></span></td>    
            <td><b>SN PLC  : </b> {{$item->sn_plc}}</td>
        </tr>
        <tr><td>- <b>Nama / Notel Teknisi :</b> {{$item->user->name}} / {{$item->user->nomor_telepon}}</td><td><b>SN WIFI EXT :</b> {{$item->sn_wifi_ext}}</td></tr>
        <tr><td>- <b>Nama Anggota 1 :</b> {{$item->nama_anggota_1}}</td><td><b>Nama Anggota 2 :</b> {{$item->nama_anggota_2}}</td></tr>
        <tr><td>- <b>STB Tambahan  :</b> {{$item->stb_tambahan}}</td><td><b>Mac Address STB :</b> {{$item->mac_address_stb}}</td></tr>
    </table>

    <br>
    <table border="1" align="center" style="width:100%">
        <thead>
            <tr>
                <th>PSB</th>
                <th style="width:50%">Tambahan</th>
            </tr>
            <tr style="font-size: 14px">
                <td>
                    <table style="width: 80%">
                        <tr>
                            <td>
                                <span style="display: inline-block; margin-top:5px; margin-right:5px">
                                <input style="vertical-align: bottom;" type="checkbox" id="1p-psb" value="" {{ $item->psb == '1P [Voice] / 1P [Internet]' ? 'checked' :'' }} >
                                <label for="1p-psb">1P [Voice]/ 1P [Internet]</label>
                                </span>
                            </td>
                            <td>
                                <span style="display: inline-block; margin-top:5px; margin-right:5px">
                                <input style="vertical-align: bottom;" type="checkbox" id="psb_3p" value="" {{ $item->psb == '3P' ? 'checked' :'' }}>
                                <label for="psb_3p">3P</label>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span style="display: inline-block; margin-top:5px; margin-right:5px">
                                <input style="vertical-align: bottom;" type="checkbox" id="psb_2p"  value="Bike"{{ $item->psb == '2P [Voice + Internet]' ? 'checked' :'' }}>
                                <label for="psb_2p">2P [Voice + Internet]/ 2P [Internet + UseeTv]</label>
                                </span>
                            </td>
                        </tr>
                    </table>
                </td>

                <td>
                    <table style="width:70%">
                        <tr>
                            <td>
                                <span style="display: inline-block; margin-top:5px; margin-right:5px">
                                <input style="vertical-align: bottom" type="checkbox" id="changeStb"  {{ $item->tambahan == 'change stb' ? 'checked' : '' }} >
                                <label for="changeStb">Change STB </label>
                                </span>
                            </td>
                            <td>
                                <span style="display: inline-block; margin-top:5px; margin-right:5px">
                                <input style="vertical-align: bottom" type="checkbox" id="stbTambahan"  {{ $item->tambahan == 'stb tambahan' ? 'checked' : '' }} >
                                <label for="stbTambahan">STB Tambahan</label>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span style="display: inline-block; margin-top:5px; margin-right:5px">
                                <input style="vertical-align: bottom" type="checkbox" id="plc"  {{ $item->tambahan == 'plc' ? 'checked' : '' }}>
                                <label for="plc">PLC</label>
                                </span>
                            </td>
                            <td>
                                <span style="display: inline-block; margin-top:5px; margin-right:5px">
                                <input style="vertical-align: bottom" type="checkbox" id="wifiExtender"  {{ $item->tambahan  == 'wifi extender' ? 'checked' : '' }}>
                                <label for="wifiExtender">Wifi Extender</label>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span style="display: inline-block; margin-top:5px; margin-right:5px">
                                <input style="vertical-align: bottom" type="checkbox" id="indibox"  {{ $item->tambahan == 'indibox' ? 'checked' : '' }}>
                                <label for="indibox">Indibox</label>
                                </span>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </thead>
        
        </table>
        <table border="1" style="width:100%">
            <tr>
                <th>Migrasi</th>    
            </tr>

        <td>
            <table style="width: 100%; font-size:12px">
                <tr>
                    <th rowspan="2">Infrastruktur</th>
                    <td>
                        <span style="display: inline-block; margin-top:5px; margin-right:5px">
                        <input style="vertical-align: bottom" type="checkbox" id="migrasi"  {{ $item->migrasi  == 'Infrastruktur 1P-1P[Voice]' ? 'checked' : '' }}>
                        <label for="migrasi">1P-1P [Voice]</label>
                        </span>
                    </td>
                    <td>
                        <span style="display: inline-block; margin-top:5px; margin-right:5px">
                        <input style="vertical-align: bottom" type="checkbox" id="migrasi"  {{ $item->migrasi  == 'Infrastruktur 1P-2P[Voice + Internet]' ? 'checked' : '' }}>
                        <label for="migrasi">1P-2P[Voice + Internet]</label>
                        </span>
                    </td>
                    <td>
                        <span style="display: inline-block; margin-top:5px; margin-right:5px">
                        <input style="vertical-align: bottom" type="checkbox" id="migrasi"  {{ $item->migrasi  == 'Infrastruktur 2P-2P[Internet + Voice]' ? 'checked' : '' }}>
                        <label for="migrasi">2P-2P[Internet + Voice]</label>
                        </span>
                    </td>
                    <td>
                        <span style="display: inline-block; margin-top:5px; margin-right:5px">
                        <input style="vertical-align: bottom" type="checkbox" id="migrasi"  {{ $item->migrasi  == 'Infrastruktur 1P-3P' ? 'checked' : '' }}>
                        <label for="migrasi">1P-3P</label>
                        </span>
                    </td>
                    <td>
                        <span style="display: inline-block; margin-top:5px; margin-right:5px">
                        <input style="vertical-align: bottom" type="checkbox" id="migrasi"  {{ $item->migrasi  == 'Infrastruktur 3P-3P' ? 'checked' : '' }}>
                        <label for="migrasi">3P-3P</label>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span style="display: inline-block; margin-top:5px; margin-right:5px">
                        <input style="vertical-align: bottom" type="checkbox" id="migrasi"  {{ $item->migrasi  == 'Infrastruktur 1P-1P[Internet]' ? 'checked' : '' }}>
                        <label for="migrasi">1P-1P[Internet]</label>
                        </span>
                    </td>
                    <td>
                        <span style="display: inline-block; margin-top:5px; margin-right:5px">
                        <input style="vertical-align: bottom" type="checkbox" id="migrasi"  {{ $item->migrasi  == 'Infrastruktur 1P-2P[Internet + Usee Tv]' ? 'checked' : '' }}>
                        <label for="migrasi">1P-2P[Internet + Usee Tv]</label>
                        </span>
                    </td>
                    <td>
                        <span style="display: inline-block; margin-top:5px; margin-right:5px">
                        <input style="vertical-align: bottom" type="checkbox" id="migrasi"  {{ $item->migrasi  == 'Infrastruktur 2P-2P[Internet + Usee Tv]' ? 'checked' : '' }}>
                        <label for="migrasi">2P-2P[Internet + Usee Tv]</label>
                        </span>
                    </td>
                    <td>
                        <span style="display: inline-block; margin-top:5px; margin-right:5px">
                        <input style="vertical-align: bottom" type="checkbox" id="migrasi"  {{ $item->migrasi  == 'Infrastruktur 2P-3P' ? 'checked' : '' }}>
                        <label for="migrasi">2P-3P</label>
                        </span>
                    </td>
                </tr>
                <tr>
                    <th>Layanan</th>
                    <td>
                        <span style="display: inline-block; margin-top:5px; margin-right:5px">
                        <input style="vertical-align: bottom" type="checkbox" id="migrasi"  {{ $item->migrasi  == 'Layanan 1P-2P[Voice + Internet]' ? 'checked' : '' }}>
                        <label for="migrasi">1P-2P[Voice + Internet]</label>
                        </span>
                    </td>
                    <td>
                        <span style="display: inline-block; margin-top:5px; margin-right:5px">
                        <input style="vertical-align: bottom" type="checkbox" id="migrasi"  {{ $item->migrasi  == 'Layanan 1P-2P[Internet + Usee Tv]' ? 'checked' : '' }}>
                        <label for="migrasi">1P-2P[Internet + Usee Tv]</label>
                        </span>
                    </td>
                    <td>
                        <span style="display: inline-block; margin-top:5px; margin-right:5px">
                        <input style="vertical-align: bottom" type="checkbox" id="migrasi"  {{ $item->migrasi  == 'Layanan 1P-3P' ? 'checked' : '' }}>
                        <label for="migrasi">1P-3P</label>
                        </span>
                    </td>
                    <td>
                        <span style="display: inline-block; margin-top:5px; margin-right:5px">
                        <input style="vertical-align: bottom" type="checkbox" id="migrasi"  {{ $item->migrasi  == 'Layanan 2P-3P' ? 'checked' : '' }}>
                        <label for="migrasi">2P-3P</label>
                        </span>
                    </td>
                   
                </tr>
            </table>
        </td>
                
            
        </table>
        <br>
         <table style="width: 100%; font-size:14px">
             <tr>
                 <th>Speed</th>
                 <td>
                    <span style="display: inline-block; margin-top:5px; margin-right:5px">
                    <input style="vertical-align: bottom" type="checkbox" id="speed"  {{ $item->speed == '10 MB' ? 'checked':'' }}>
                    <label for="migrasi">10 MB</label>
                    </span>
                </td>
                 <td>
                    <span style="display: inline-block; margin-top:5px; margin-right:5px">
                    <input style="vertical-align: bottom" type="checkbox" id="speed"  {{ $item->speed == '20 MB' ? 'checked':'' }}>
                    <label for="migrasi">20 MB</label>
                    </span>
                </td>
                 <td>
                    <span style="display: inline-block; margin-top:5px; margin-right:5px">
                    <input style="vertical-align: bottom" type="checkbox" id="speed"  {{ $item->speed == '30 MB' ? 'checked':'' }}>
                    <label for="migrasi">30 MB</label>
                    </span>
                </td>
                 <td>
                    <span style="display: inline-block; margin-top:5px; margin-right:5px">
                    <input style="vertical-align: bottom" type="checkbox" id="speed" {{ $item->speed == '40 MB' ? 'checked':'' }}>
                    <label for="migrasi">40 MB</label>
                    </span>
                </td>
                 <td>
                    <span style="display: inline-block; margin-top:5px; margin-right:5px">
                    <input style="vertical-align: bottom" type="checkbox" id="speed" {{ $item->speed == '50 MB' ? 'checked':'' }}>
                    <label for="migrasi">50 MB</label>
                    </span>
                </td>
                 <td>
                    <span style="display: inline-block; margin-top:5px; margin-right:5px">
                    <input style="vertical-align: bottom" type="checkbox" id="speed" {{ $item->speed == '100 MB' ? 'checked':'' }}>
                    <label for="migrasi">100 MB</label>
                    </span>
                </td>
                 <td>
                    <span style="display: inline-block; margin-top:5px; margin-right:5px">
                    <input style="vertical-align: bottom" type="checkbox" id="speed" {{ $item->speed == '200 MB' ? 'checked':'' }}>
                    <label for="migrasi">200 MB</label>
                    </span>
                </td>
                 <td>
                    <span style="display: inline-block; margin-top:5px; margin-right:5px">
                    <input style="vertical-align: bottom" type="checkbox" id="speed" {{ $item->speed == '300 MB' ? 'checked':'' }}>
                    <label for="migrasi">300 MB</label>
                    </span>
                </td>
                 <td>
                    <span style="display: inline-block; margin-top:5px; margin-right:5px">
                    <input style="vertical-align: bottom" type="checkbox" id="speed" {{ $item->speed == '1 GB' ? 'checked':'' }}>
                    <label for="migrasi">1 GB</label>
                    </span>
                </td>
                 <td>
                    <span style="display: inline-block; margin-top:5px; margin-right:5px">
                    <input style="vertical-align: bottom" type="checkbox" id="speed" {{ $item->speed == 'Other' ? 'checked':'' }}>
                    <label for="migrasi">Other</label>
                    </span>
                </td>
             </tr>
         </table>
                 
                 <br>
                 Disclaimer:<br>
                 <font size="2">1. Perangkat (ONT/Modem/STB) yang dipasang dirumah pelanggan adalah MILIK TELKOM yang dipinjamkan selama menjadi pelanggan TELKOM. Modem yang tidak dipakai karena Migrasi ke Fiber ditarik kembali<br>
                2. Telkom dapat mengambil kembali perangkat bila tidak ada penggunaan selama 3 bulan berturut turut<br>
                3. Untuk progres pemilihan dan monitoring diharapkan power selalu dalam kondisi hidup(ON)<br>
                4. Disarankan untuk segera merubah password yang ada untuk menjaga agar tidak dipergunakan oleh pihak-pihak yang tidak dikehendaki<br>
                5. Pelanggan sudah mendapatkan penjelasan dari sales/setter atau menerima buku petunjuk menggunakan modem internet yang telah diapasang.</font>
  </nav>
  
  
 
  
  

</section>
<table align="right" align="center" style="width:25%" >
<td><right><font size="3">Tangerang,{!! Carbon\Carbon::now()->format('d-m-Y') !!}</font></right></td><br>
</table>
<table align="left" align="center" style="width:40%">
    <td><right><center>
        
        <br>
        <font size="3">Pelanggan</font>
       
            <br>
            <br>
            <br>
            <br>
            <br>
            
            <font size="3">{{ $item->nama_pelanggan}}</font><BR></right></center>
          
    </td>
<table align="right" align="center" style="width:45%">
    <td><right><center>
        
        
            <br>
        <font size="3">Petugas Lapangan</font>
       
            <br>
            <br>
            <br>
            <br>
            <br>
            
            <font size="3">{{ $item->user->name }}</font><BR></right></center>

</body>
</html>
