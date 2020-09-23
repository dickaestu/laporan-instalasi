<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \App\User;
use Hash;

class SettingsController extends Controller
{
    public function index ()
    {
        return view ('pages.settings');
    }


    public function settings(Request $request)
    {
       $this->validate($request,[
           'oldpassword' => 'required',
           'password' => 'required|confirmed|min:8'

       ],[
        'password.min' => 'Password min 8 digit',
        'password.confirmed' => 'Konfirmasi password berbeda'
    ]);

       $hashedPassword = Auth::user()->password;
       if (Hash::check($request->oldpassword, $hashedPassword)) {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('login')->with('sukses', 'Password anda berhasil diganti, Silahkan Login !');
       }else{
           return redirect()->back()->with('error', 'Password lama salah');
       }
    }
}
