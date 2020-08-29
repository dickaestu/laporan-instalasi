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
        <td><img src="{{('img/logo.png')}}" width="140" height="30"></td>
        <td><center>
            <font size="4"><b>LAPORAN PENYELESAIAN INSTALASI SAMBUNG BARU / MIGRASI</b></font><BR>
            <font size="2"><B>No BA: 4792655/WITEL TANGERANG/2020</B></font>
        </td>
        <td><img src="{{('img/telkom.png')}}" width="115" height="35"></td>
        </tr>
        <tr>
        
        </tr>
        
    </table>
    
    
    
<section>
  <nav>
    Nama Mitra : GOLEK RAIJO
    <br>
    <table border="1" align="left" style="width:50%">
        <thead>
           
                @foreach ($items as $item)
                <br>
                <th align="left">
                    <font size="2">1. STO : {{$item->sto}}</font><br>
                    <font size="2">2. No Permintaan : {{$item->no_permintaan}}</font><br>
                    <font size="2">3. NO Telepon  : {{$item->nomor_telepon}}</font><br>
                    <font size="2">4. No Inet  : {{$item->nomor_internet}}</font><br>
                    <font size="2">5. Tanggal WO : {{$item->tanggal_wo}}</font><br>
                    <font size="2">6. Nama Pelanggan  : {{$item->nama_pelanggan}}</font><br>
                    <font size="2">7. No Kontak  : </font><br>
                    <font size="2">DATEK</font><br>
                    <font size="2">1. RK/MSAN/ODC  : {{$item->rk_msan_odc}}</font><br>
                    <font size="2">2. DP/ODP  : {{$item->dp_odp}}</font><br>
                    <font size="2">3. Klem Primer/Feeder : {{$item->klem}}</font><br>
                    <font size="2">4. Kec sec/Distribusi  : {{$item->kec}}</font><br>
                    <font size="2">Material</font><br>
                    <font size="2">1. AC-OF-SM-1B  : {{$item->ac_of_sm_1b}}</font><br>
                    <font size="2">2. BREKET.A  : {{$item->breket_a}}</font><br>
                    <font size="2">3. RS-IN-SC-1  : {{$item->rs_in_sc_1}}</font><br>
                    <font size="2">4. SOC_ILS  : {{$item->soc_ils}}</font><br>
                </th>
                
            </tr>
        </thead>
    </table>
      
    <table border="1" align="right" align="center" style="width:50%">
        
            <tr>
                <br>
                <font size="2"><b>
                        <td align="center"><br><br><br><br><br><br><br>{{$item->alamat}}
                    </b></font><br><br><br><br><br><br><br><br><br><br>
                    </font>
            </tr>
        
        </table>
        
  
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <font size="1" ><b>- ONT yang DIPASANG / DITARIK  : {{$item->ont}}</font>&#160&#160&#160
    <font size="1" style="width:50%"><b> S/N ONT  : {{$item->sn_ont}}</b></font><br>
    <font size="1"><b>- Lampu Indikator ONT Nyala    : <input type="checkbox" id="indikator_ont_power" name="indikator_ont_power" value="{{$item->indikator_ont_power}}">
    <label for="indikator_ont_power"></label> <input type="checkbox" id="indikator_ont_dsl" name="indikator_ont_dsl" value="{{$item->indikator_ont_dsl}}">
    <label for="indikator_ont_dsl"></label><input type="checkbox" id="indikator_ont_internet" name="indikator_ont_internet" value="{{$item->indikator_ont_internet}}">
    <label for="indikator_ont_internet"></label> &#160&#160&#160
    SN PLC  : {{$item->sn_plc}}</font></b><br>
    <font size="1"><b>- Nama / Notel Teknisi : {{$item->nama_teknisi}} &#160&#160&#160&#160&#160&#160&#160
    SN WIFI EXT : {{$item->sn_wifi_ext}}</font></b><br>
    <font size="1"><b>- Nama Anggota 1 : {{$item->nama_anggota_1}} &#160&#160&#160&#160&#160&#160&#160&#160&#160&#160
    Nama Anggota 1 : {{$item->nama_anggota_2}}</font></b><br>
    <font size="1"><b>- STB Tambahan  : {{$item->stb_tambahan}} &#160&#160&#160&#160&#160&#160&#160&#160&#160&#160
    Mac Address STB : {{$item->mac_address_stb}}</font></b>
            <br>
    <table border="1" align="center" style="width:100%">
        <thead>
            <tr>
                
               
                <th>PSB</th></b></font>
                <font size="1"><b><th align="center" style="width:50%">Tambahan</th></b></font>
            </tr>
            <tr>
                <font size="1" align="left"><td><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1">1P [Voice]/ 1P [Internet]</label>
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1">3P</label> <br>
                    <input type="checkbox" id="vehicle1"
                        name="vehicle1" value="Bike">
                        <label for="vehicle1">{{$item->psb}}2P [Voice + Internet]/ 2P [Internet + UseeTv]</label>
                        </td></font><br>

                        <td><br><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1">Change STB </label>
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1">STB Tambahan</label><br>
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1">{{$item->tambahan}} PLC
                            </label>&nbsp;
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1"> Wifi Extender </label><br>
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1"> IndiBox </label>
                        </td>
            </tr>
        </thead>
        
        </table>
        <table border="1" style="width:100%">
            <thead>
                <tr>


                    <th>Migrasi</th></b></font>
                    
                        </b></font>
                </tr>
                <tr>
                    <td><br>Infastruktur <input type="checkbox" id="vehicle1"
                            name="vehicle1" value="Bike">
                        <label for="vehicle1"> 1P-1P [Voice]</label>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1"> 1P-1P [Voice+Internet]</label>
                    <input type="checkbox" id="vehicle1"
                        name="vehicle1"
                        value="Bike">
                    <label for="vehicle1"> 2P-2P [Voice+Internet]</label>
                    <input type="checkbox" id="vehicle1"
                        name="vehicle1"
                        value="Bike">
                    <label for="vehicle1"> 1P-3P</label>
                    <input type="checkbox" id="vehicle1" name="vehicle1"
                        value="Bike">
                    <label for="vehicle1">{{$item->migrasi}} 3P-3P</label><br>
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        <label for="vehicle1"> 1P-1P [Internet]</label>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        <label for="vehicle1"> 1P-2P [Internet+UseeTv]</label>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        <label for="vehicle1"> 2P-2P [Internet+UseeTv]</label>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        <label for="vehicle1"> 2P-3P</label><br><br>
                        
                        Layanan <input type="checkbox" id="vehicle1" name="vehicle1"
                            value="Bike">
                        <label for="vehicle1"> 1P-1P [Internet+Voice]</label>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        <label for="vehicle1"> 1P-1P [Internet+UseeTv]</label>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        <label for="vehicle1"> 1P-3P [Voice+Internet]</label>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        <label for="vehicle1"> 2P-3P</label>
                        </td>

                </tr>
                
            </thead>
            
        </table>
        <br>
         <font size="3">Speed  :<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                 <label for="vehicle1">{{$item->speed}} 10MB</label>
                 <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                 <label for="vehicle1"> 20MB</label>
                 <input type="checkbox" id="vehicle1"
                     name="vehicle1" value="Bike">
                 <label for="vehicle1"> 30MB</label>
                 <input type="checkbox" id="vehicle1"
                     name="vehicle1" value="Bike">
                 <label for="vehicle1"> 40MB</label>
                 <input type="checkbox" id="vehicle1"
                     name="vehicle1" value="Bike">
                 <label for="vehicle1"> 50MB</label>
                 <input type="checkbox" id="vehicle1"
                     name="vehicle1" value="Bike">
                 <label for="vehicle1"> 100MB</label>
                 <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                 <label for="vehicle1"> 200MB</label>
                 <input type="checkbox" id="vehicle1"
                     name="vehicle1" value="Bike">
                 <label for="vehicle1"> 300MB</label>
                 <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                 <label for="vehicle1"> 1GB</label>
                 <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                 <label for="vehicle1">Other</label>
                 </font>
                 @endforeach
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
            
            <font size="3">{{ Auth::user()->name }}</font><BR></right></center>

</body>
</html>
