<?php

namespace App\Http\Controllers;

use App\Models\Calon;
use Illuminate\Http\Request;

class CalonsController extends Controller
{
    public function index()
    {
        $calon = Calon::all();
        return view('calon', [
            'judul' => 'Daftar Calon Ketua OSIS',
            'calon' => $calon]);
    }

    public function create()
    {
        return view('tambahcalon', [
            'judul'     => 'Tambah Calon Ketua OSIS'
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_calon'    => 'required|unique:calons',
            'jargon'        => 'required',
            'visi_dan_misi' => 'required',
            'poster'        => 'required'
        ]);
        $calon = new Calon;
        $calon->nama_calon      = $request->nama_calon;
        $calon->jargon          = $request->jargon;
        $calon->visi_dan_misi   = $request->visi_dan_misi;
        $calon->jargon          = $request->jargon;
        $calon->poster          = $request->poster;
        $calon->save();
        return redirect('calon')->with('pesan', 'Data Berhasil ditambahkan');
    }

    public function show(Calon $calon)
    {
    }

    public function edit($id)
    {
        $data = Calon::find($id);
        return view('editcalon', [
            'judul'     => 'Edit Calon '.$data->nama_calon.'',
            'data'      => $data
        ]);
    }

    public function update(Request $request, Calon $calon)
    {

    }

    public function destroy($id)
    {
        $data = Calon::find($id);
        $data->delete();
        return redirect('calon')->with('pesan', 'Berkas Berhasi Dihapus');
    }
}
