<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FormPekerjaan extends Model
{
    use SoftDeletes;
    protected $table = 'form_pekerjaan';
    protected $fillable = [
        'sto', 'no_permintaan', 'nomor_telepon', 'nomor_internet', 'nama_pelanggan', 'tanggal_wo',
        'alamat', 'rk_msan_odc', 'dp_odp', 'klem', 'kec', 'ac_of_sm_1b', 'breket_a', 'rs_in_sc_1', 'soc_ils',
        'ont', 'indikator_ont_power', 'indikator_ont_dsl', 'indikator_ont_internet', 'users_id_teknisi',
        'nama_anggota_1', 'nama_anggota_2', 'stb_tambahan', 'sn_ont', 'sn_plc', 'sn_wifi_ext',
        'mac_address_stb', 'psb', 'tambahan', 'migrasi', 'speed'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id_teknisi', 'id');
    }
}
