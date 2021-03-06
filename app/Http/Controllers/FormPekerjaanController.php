<?php

namespace App\Http\Controllers;

use PDF;
use App\FormPekerjaan;
use App\Http\Requests\FormPekerjaanRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormPekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->roles == "TEKNISI") {
            // panggil data dari form pekerjaan yang memiliki users_id_teknisi sama dengan id user yang sedang login
            $items = FormPekerjaan::where('users_id_teknisi', Auth::id())->get();

            return view('pages.form-pekerjaan.index', compact('items'));
        } else {
            return redirect()->route('dashboard-admin');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->roles == "TEKNISI") {
            $users = User::where('roles', 'teknisi')->get();
            return view('pages.form-pekerjaan.create', compact('users'));
        } else {
            return redirect()->route('dashboard-admin');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormPekerjaanRequest $request)
    {
        if (Auth::user()->roles == "TEKNISI") {
            // panggil semua request dari view form pekerjaan -> create.blade.php
            $item = $request->all();

            $item['users_id_teknisi'] = Auth::id();
            // Input semua request yang sudah ditampung di variable item ke database tabelnya form pekerjaan
            FormPekerjaan::create($item);

            return redirect()->route('form-pekerjaan.index')->with('success', 'Data Berhasil Dibuat');
        } else {
            return redirect()->route('dashboard-admin');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        if (Auth::user()->roles == "TEKNISI") {
            // cari form pekerjaan yang memiliki id sama dengan id yang diminta
            $item = FormPekerjaan::findOrFail($id);
            $users = User::where('id', '!=', Auth::id())->where('roles', 'teknisi')->get();
            return view('pages.form-pekerjaan.edit', compact('item', 'users'));
        } else {
            return redirect()->route('dashboard-admin');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormPekerjaanRequest $request, $id)
    {
        if (Auth::user()->roles == "TEKNISI") {
            // buat variable yang menampung semua request dari halaman edit
            $data = $request->all();
            $data['tambahan'] = $request->tambahan;
            $data['psb'] = $request->psb;
            $data['migrasi'] = $request->migrasi;
            $data['indikator_ont_power'] = ($request->indikator_ont_power == true ? true : false);
            $data['indikator_ont_dsl'] = ($request->indikator_ont_dsl == true ? true : false);
            $data['indikator_ont_internet'] = ($request->indikator_ont_internet == true ? true : false);
            $data['users_id_teknisi'] = Auth::id();
            // cari form pekerjaan yang memiliki id sama dengan id yang diminta
            $item = FormPekerjaan::findOrFail($id);

            $item->update($data);

            return redirect()->route('form-pekerjaan.index')->with('success', 'Data Berhasil Diupdate');
        } else {
            return redirect()->route('dashboard-admin');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::user()->roles == "TEKNISI") {
            // cari form pekerjaan yang memiliki id sama dengan id yang diminta
            $item = FormPekerjaan::findOrFail($id);

            $item->delete();

            return redirect()->route('form-pekerjaan.index')->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('dashboard-admin');
        }
    }

    public function exportTeknisi($id)
    {
        if (Auth::user()->roles == "TEKNISI") {
            $item = FormPekerjaan::where('id', $id)->where('users_id_teknisi', Auth::id())->first();
            $pdf = PDF::loadView('pages.export.export-teknisi', ['item' => $item])->setPaper('a3', 'potrait');
            return $pdf->download('LaporanTeknisi.pdf', compact('item'));
        }
    }
}
