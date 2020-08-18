<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormPekerjaanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'sto' => 'required|in:CPD,CKL,LGK,PPG,CUG,PKU',
            'no_permintaan' => 'required',
            'nomor_telepon' => 'required',
            'nomor_internet' => 'required',
            'nama_pelanggan' => 'required|string',
            'tanggal_wo' => 'required|date',
            'alamat' => 'required|string',
            'rk_msan_odc' => 'required|string',
            'dp_odp' => 'required',
            'klem' => 'required',
            'kec' => 'required',
            'ac_of_sm_1b' => 'required',
            'rs_in_sc_1' => 'required',
            'utp_c6' => 'required',
            'ont' => 'required',
            'indikator_ont_power' => 'boolean',
            'indikator_ont_dsl' => 'boolean',
            'indikator_ont_internet' => 'boolean',
            'nama_teknisi' => 'required|string',
            'nama_anggota_1' => 'required|string',
            'nama_anggota_2' => 'required|string',
            'stb_tambahan' => 'required',
            'sn_ont' => 'required|string',
            'sn_plc' => 'nullable|string',
            'sn_wifi_ext' => 'nullable|string',
            'mac_address_stb' => 'nullable|string',
            'psb' => 'nullable|required_without_all:tambahan,migrasi',
            'tambahan' => 'nullable|required_without_all:psb,migrasi',
            'migrasi' => 'nullable|required_without_all:psb,tambahan',
            'speed' => 'required|in:10 MB,20 MB,30 MB,40 MB,50 MB,100 MB,200 MB,300 MB,Other',
        ];
    }
}
