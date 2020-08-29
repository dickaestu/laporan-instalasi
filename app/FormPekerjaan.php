<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormPekerjaan extends Model
{
    protected $table = 'laporan_instalasi';
    protected $fillable = [
        'sto', 'no_permintaan', 'nomor_telepon', 'nomor_internet', 'nama_pelanggan', 'tanggal_wo',
        'alamat', 'rk_msan_odc', 'dp_odp', 'klem', 'kec', 'ac_of_sm_1b', 'breket_a', 'rs_in_sc_1', 'soc_ils',
        'ont', 'indikator_ont_power', 'indikator_ont_dsl', 'indikator_ont_internet', 'nama_teknisi',
        'nama_anggota_1', 'nama_anggota_2', 'stb_tambahan', 'sn_ont', 'sn_plc', 'sn_wifi_ext',
        'mac_address_stb', 'psb', 'tambahan', 'migrasi', 'speed'
    ];
}
