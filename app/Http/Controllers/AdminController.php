<?php

namespace App\Http\Controllers;

use App\User;
use PDF;
use App\FormPekerjaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Exports\LaporanExport;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{

    public function index()
    {
        if (Auth::user()->roles == "ADMIN") {
            $items = User::where('roles', 'TEKNISI')->get();
            return view('pages.admin.kelola-akun.index', compact('items'));
        } else {
            return redirect()->route('dashboard');
        }
    }

    public function dashboard()
    {
        if (Auth::user()->roles == "ADMIN") {
            // untuk menghitung jumlah user yang memiliki role teknisi
            $totalteknisi = User::where('roles', 'TEKNISI')->count();
            // untuk menghitung jumlah form pekerjaan yang sudah dibuat
            $total = FormPekerjaan::count();
            return view('pages.admin.dashboard-admin', compact('totalteknisi', 'total'));
        } else {
            return redirect()->route('dashboard');
        }
    }

    public function createTeknisi()
    {
        if (Auth::user()->roles == "ADMIN") {

            return view('pages.admin.kelola-akun.create');
        } else {
            return redirect()->route('dashboard');
        }
    }

    public function storeAkunTeknisi(Request $request)
    {
        if (Auth::user()->roles == "ADMIN") {
            // Untuk validasi Request
            $request->validate([
                'name' => ['required', 'string', 'max:150'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8'],
                'nik' => ['required', 'string', 'max:100'],
                'nomor_telepon' => ['required', 'string', 'max:100'],
                'roles' => ['required', 'in:ADMIN,TEKNISI'],
            ], [
                'roles.in' => 'Silahkan Pilih Roles'
            ]);
            $data = $request->all();
            $data['password'] = bcrypt($request->password);
            // Masukkan data ke table user di database
            User::create($data);
            return redirect()->route('kelola-teknisi')->with('sukses', 'Akun Berhasil Di Buat');
        } else {
            return redirect()->route('dashboard');
        }
    }

    public function laporan()
    {
        if (Auth::user()->roles == "ADMIN") {
            $items = FormPekerjaan::all();
            return view('pages.admin.laporan-pekerjaan-teknisi', compact('items'));
        } else {
            return redirect()->route('dashboard');
        }
    }

    public function laporanGaji()
    {
        if (Auth::user()->roles == "ADMIN") {
            $month = Carbon::now()->format('m');

            $year = Carbon::now()->format('Y');
            $items = User::with('form_pekerjaan')->where('roles', 'teknisi')->withTrashed()->get();
            foreach ($items as $item) {
                $psb = FormPekerjaan::where('users_id_teknisi', $item->id)->whereMonth('tanggal_wo', $month)->whereYear('tanggal_wo', $year)->whereNotNull('psb')->count();

                $migrasi = FormPekerjaan::where('users_id_teknisi', $item->id)
                    ->whereMonth('tanggal_wo', $month)->whereYear('tanggal_wo', $year)->whereNotNull('migrasi')->count();

                $tambahan = FormPekerjaan::where('users_id_teknisi', $item->id)
                    ->whereMonth('tanggal_wo', $month)->whereYear('tanggal_wo', $year)->whereNotNull('tambahan')->count();

                $datas[] = (object)[
                    'nama_teknisi' => $item->name,
                    'jumlah_psb' => $psb,
                    'jumlah_migrasi' => $migrasi,
                    'jumlah_tambahan' => $tambahan,
                    'total_gaji' => ($psb * 80000) + ($migrasi * 80000) + ($tambahan * 15000)
                ];
            }
            return view('pages.admin.laporan-gaji-teknisi', compact('datas'));
        } else {
            return redirect()->route('dashboard');
        }
    }


    public function filterGaji(Request $request)
    {
        if (Auth::user()->roles == "ADMIN") {
            $month = Carbon::create($request->date_filter)->format('m');
            $month_view = Carbon::create($request->date_filter)->format('F');

            $year = Carbon::create($request->date_filter)->format('Y');

            $items = User::with('form_pekerjaan')->where('roles', 'teknisi')->withTrashed()->get();
            foreach ($items as $item) {
                $psb = FormPekerjaan::where('users_id_teknisi', $item->id)->whereMonth('tanggal_wo', $month)->whereYear('tanggal_wo', $year)->whereNotNull('psb')->count();

                $migrasi = FormPekerjaan::where('users_id_teknisi', $item->id)
                    ->whereMonth('tanggal_wo', $month)->whereYear('tanggal_wo', $year)->whereNotNull('migrasi')->count();

                $tambahan = FormPekerjaan::where('users_id_teknisi', $item->id)
                    ->whereMonth('tanggal_wo', $month)->whereYear('tanggal_wo', $year)->whereNotNull('tambahan')->count();

                $datas[] = (object)[
                    'nama_teknisi' => $item->name,
                    'jumlah_psb' => $psb,
                    'jumlah_migrasi' => $migrasi,
                    'jumlah_tambahan' => $tambahan,
                    'total_gaji' => ($psb * 80000) + ($migrasi * 80000) + ($tambahan * 15000)
                ];
            }
            return view('pages.admin.laporan-gaji-teknisi-filter', compact('datas', 'month_view'));
        } else {
            return redirect()->route('dashboard');
        }
    }


    public function destroy($id)
    {
        if (Auth::user()->roles == "ADMIN") {
            $item = User::findOrFail($id);
            $item->delete();
            return redirect()->route('kelola-teknisi')->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('dashboard');
        }
    }





    public function exportExcel()
    {
        return Excel::download(new LaporanExport, 'Laporan.xlsx');
    }
}
