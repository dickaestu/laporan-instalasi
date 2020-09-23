<?php

namespace App\Exports;

use App\FormPekerjaan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class LaporanExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('pages.admin.export.export-excel', [
            'items' => FormPekerjaan::all()
        ]);
    }
    /**public function collection()
    {
        return FormPekerjaan::all();
    }

    public function map($items): array
    {
        return [
            
            $items->sto,
            $items->no_permintaan,
            $items->nomor_telepon,
            $items->nomor_internet,
            $items->nama_pelanggan,
            $items->tanggal_wo,
            $items->alamat,
            $items->rk_msan_odc,
            $items->dp_odp,
            $items->klem,
            $items->kec,
            $items->ac_of_sm_1b,
            $items->breket_a,
            $items->rs_in_sc_1,
            $items->soc_ils,
            $items->ont,
            $items->indikator_ont_power,
            $items->indikator_ont_dsl,
            $items->indikator_ont_internet,
            $items->nama_teknisi,
            $items->nama_anggota_1,
            $items->nama_anggota_2,
            $items->stb_tambahan,
            $items->sn_ont,
            $items->sn_plc,
            $items->sc_wifi_ext,
            $items->mac_address_stb,
            $items->psb,
            $items->tambahan,
            $items->migrasi,
            $items->speed
        ];
    }
    public function headings(): array
    {
        return [
            
            'STO',
            'No Permintaan',
            'Nomor Telepon',
            'Nomor Internet',
            'Nama Pelanggan',
            'Tanggal WO',
            'Alamat',
            'RK/MSAN/ODC',
            'DP/ODP',
            'KLEM',
            'KEC sec/Distribusi',
            'AC-OF-SM-1B',
            'BREKET.A',
            'RS-IN-SC-1',
            'SOC_ILS',
            'ONT yang dipasang / ditarik',
            'lampu Indikator ONT Nyala',
            'Nama Teknisi',
            'Nama Anggota 1',
            'Nama Anggota 2',
            'STB Tambahan',
            'SN ONT',
            'SN PLC',
            'SN WIFI EXT',
            'Mac Address STB',
            'PSB',
            'Tambahan',
            'Migrasi',
            'Speed'
        ];
    }*/
}
