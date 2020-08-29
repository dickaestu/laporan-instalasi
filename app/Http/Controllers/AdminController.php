<?php

namespace App\Http\Controllers;

use App\User;
use PDF;
use App\FormPekerjaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Exports\LaporanExport;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{

    public function index()
    {
        if (Auth::user()->roles == "ADMIN") {
            $items = User::where('roles', 'TEKNISI')->get();
            return view('pages.admin.kelola-akun.index', compact('items'));
        } else {
            return redirect()->route('index');
        }
    }

    public function dashboard()
    {
        if (Auth::user()->roles == "ADMIN"){
            $total = User::where('roles', 'TEKNISI')->count();
            $totalteknisi = FormPekerjaan::all()->count('laporan_instalasi');
            return view('pages.admin.dashboard-admin', compact('total','totalteknisi'));
    }
}

    public function laporan()
    {
        if (Auth::user()->roles == "ADMIN") {
        $items = FormPekerjaan::all();
        return view('pages.admin.laporan-pekerjaan-teknisi', compact('items'));
    }
}

    public function exportPdf()
    {

        $items = FormPekerjaan::where('nama_teknisi', Auth::user()->name)->get();
        $pdf = PDF::loadView('pages.admin.export.export-pdf', ['items' =>$items])->setPaper('a3','potrait');
        return $pdf->download('laporan.pdf');
    }

    public function exportExcel()
	{
		return Excel::download(new LaporanExport, 'Laporan.xlsx');
	}
    
}
