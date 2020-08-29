<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\FormPekerjaan;

class DashboardController extends Controller
{
    public function index() 
    {
        if (Auth::user()->roles == "TEKNISI"){
            $total = FormPekerjaan::where('nama_teknisi', Auth::user()->name)->count();
            return view('pages.dashboard', compact('total'));
        }
        
    }
    
}

        