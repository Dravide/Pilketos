<?php

namespace App\Http\Controllers;

use App\Http\Requests\CalonRequest;
use App\Http\Requests\UpdateCalonRequest;
use App\Models\Calon;
use Illuminate\Http\Request;

class CalonsController extends Controller
{
    public function index()
    {
        $calon = Calon::all();
        return view('calon.calon', [
            'judul'     => 'Daftar Calon Ketua OSIS',
            'calon'     => $calon
        ]);
    }

    public function create()
    {
        return view('calon.tambahcalon', [
            'judul'     => 'Tambah Calon Ketua OSIS'
        ]);
    }

    public function store(CalonRequest $request)
    {
        $calon = new Calon;
        $calon->nama_calon      = $request->nama_calon;
        $calon->jargon          = $request->jargon;
        $calon->visi_dan_misi   = $request->visi_dan_misi;
        $calon->poster          = $request->poster;
        $calon->save();
        return redirect('calon')->with('pesan', '<strong>Sukses!</strong> Data Berhasil ditambahkan');
    }

    public function show($id)
    {
        $calon = Calon::find($id);
        return view('calon.editcalon', compact('calon'));
    }

    public function edit($id)
    {
        $data = Calon::find($id);
        return view('calon.editcalon', [
            'judul'     => 'Edit Calon '.$data->nama_calon.'',
            'data'      => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_calon'    => 'required|unique:calons,nama_calon,'.$id,
            'jargon'        => 'required',
            'visi_dan_misi' => 'required',
            'poster'        => 'image|file|max:5000'
        ]);
        $calon = Calon::find($id);
        $calon->nama_calon      = $request->nama_calon;
        $calon->visi_dan_misi   = $request->visi_dan_misi;
        $calon->jargon          = $request->jargon;
        $calon->poster          = $request->poster;
        $calon->save();
        return redirect('calon')->with('pesan', '<strong>Sukses!</strong> Data Berhasil diedit');
    }

    public function destroy($id)
    {
        $data = Calon::find($id);
        $data->delete();
        return redirect('calon')->with('pesan', 'Berkas Berhasi Dihapus');
    }
}
