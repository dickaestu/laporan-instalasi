
<!DOCTYPE html>
<html>
<head>


</head>

<body>

<table>
  <tr>
    <td></td>
<td>MITRA : GOLEK RAIJO</td>
<tr>
  <td></td>
<td>WITEL : TANGERANG </td>
</tr>
<tr>
<td></td>
<td>PERIODE : </td>
</tr>
</table>


<table class="table-bordered">
  <tr>
    <th rowspan="3">No.</th>
    <th rowspan="3">No Permintaan</th> 
    <th rowspan="3">Nomor Internet</th>
    <th rowspan="3">Nomor Jastel</th>
    <th rowspan="3">Nama</th>
    <th rowspan="3">Aalamat</th>
    <th colspan="2">DATEK</th>
    <th colspan="6" >JENIS PEKERJAAN</th>
    <th rowspan="3">TANGGAL WO</th>
    <th rowspan="3">TANGGAL KRING</th>
    <th colspan="4"> MATERIAL</th>
    <th colspan="2">KETERANGAN</th>
    <th rowspan="1">Nama Teknisi</th>
  </tr>
 
  <tr>
    
    <th rowspan="2">STO</th>
      <th rowspan="2">ODP</th>
      <th colspan="3">PSB</th>
      <th colspan="3">TAMBAHAN</th>
      <th rowspan="2">DROP CORE</th>
      <th rowspan="2">ROSET</th>
      <th rowspan="2">S CLAMP</th>
      <th rowspan="2">SOC</th>
  </tr>
  <tr>
    <th>1P</th>
    <th>2P</th>
    <th>3P</th>
    <th>STB TAMBAHAN</th>
    <th>INSTALASI PLC</th>
    <th>INSTALASI WIFI EXTENDER</th>
  </tr>
  
  @foreach($items as $item)
  <tr>
  <td>{{ $loop->iteration}}</td>
    <td>{{ $item->no_permintaan }}</td>
    <td>{{ $item->nomor_internet}}</td>
    <td>{{ $item->nomor_telepon}}</td>
    <td>{{ $item->nama_pelanggan}}</td>
    <td>{{ $item->alamat}}</td>
    <td>{{ $item->sto}}</td>
    <td>{{ $item->dp_odp}}</td>
    <td> {{ $item->psb == '1P [Voice] / 1P [Internet]' ? '1' :'' }}</td>
    <td> {{ $item->psb == '2P [Voice + Internet]' ? '1' :'' }}</td>
    <td> {{ $item->psb == '3P' ? '1' :'' }}</td>
    <td>{{ $item->tambahan == 'stb tambahan' ? '1' : '' }}</td>
    <td>{{ $item->tambahan == 'plc' ? '1' : '' }}</td>
    <td>{{ $item->tambahan  == 'wifi extender' ? '1' : '' }}</td>
    <td> {{ $item->tanggal_wo}} </td>
    <td> {{ $item->tanggal_wo}} </td>
    <td> {{$item->ac_of_sm_1b}}</td>
    <td> {{$item->breket_a}}</td>
    <td> {{$item->rs_in_sc_1}}</td>
    <td> {{$item->soc_ils}}</td>
    <td> {{ $item->psb}}</td>
    <td> {{ $item->tambahan}}</td>
    <td> {{ $item->user->name}}</td>
   
    
  </tr>
  @endforeach
</table>
<br>

</body>
</html>