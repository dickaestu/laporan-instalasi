<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\FormPekerjaan;

class DashboardController extends Controller
{
    public function index()
    {
        // Untuk panggil total kerjaan yang sudah dibuat teknisi
        if (Auth::user()->roles == "TEKNISI") {
            $total = FormPekerjaan::where('users_id_teknisi', Auth::id())->count();
            return view('pages.dashboard', compact('total'));
        } else {
            return redirect()->route('dashboard-admin');
        }
    }
}
