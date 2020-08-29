<?php

namespace App\Http\Controllers;

use PDF;
use App\FormPekerjaan;
use App\Http\Requests\FormPekerjaanRequest;
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
            $items = FormPekerjaan::where('nama_teknisi', Auth::user()->name)->get();

            return view('pages.form-pekerjaan.index', compact('items'));
        } else {
            return redirect()->route('kelola-teknisi');
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
            return view('pages.form-pekerjaan.create');
        } else {
            return redirect()->route('kelola-teknisi');
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
            $item = $request->all();
            FormPekerjaan::create($item);

            return redirect()->route('index')->with('success', 'Data Berhasil Dibuat');
        } else {
            return redirect()->route('kelola-teknisi');
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
            $item = FormPekerjaan::findOrFail($id);
            return view('pages.form-pekerjaan.edit', compact('item'));
        } else {
            return redirect()->route('kelola-teknisi');
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
            $data = $request->all();
            $data['tambahan'] = $request->tambahan;
            $data['psb'] = $request->psb;
            $data['migrasi'] = $request->migrasi;
            $data['indikator_ont_power'] = ($request->indikator_ont_power == true ? true : false);
            $data['indikator_ont_dsl'] = ($request->indikator_ont_dsl == true ? true : false);
            $data['indikator_ont_internet'] = ($request->indikator_ont_internet == true ? true : false);
            $item = FormPekerjaan::findOrFail($id);

            $item->update($data);

            return redirect()->route('index')->with('success', 'Data Berhasil Diupdate');
        } else {
            return redirect()->route('kelola-teknisi');
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
            $item = FormPekerjaan::findOrFail($id);

            $item->delete();

            return redirect()->route('index')->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('kelola-teknisi');
        }
    }

    public function exportTeknisi()
    {
        if (Auth::user()->roles == "TEKNISI") {
            $items = FormPekerjaan::where('nama_teknisi', Auth::user()->name)->get();
        $pdf = PDF::loadView('pages.export.export-teknisi', ['items' =>$items])->setPaper('a3','potrait');
        return $pdf->download('laporan.pdf', compact('items'));
    }
}
}
