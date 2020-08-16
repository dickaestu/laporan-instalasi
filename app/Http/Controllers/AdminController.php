<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
