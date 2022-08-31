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
    }

    public function store(Request $request)
    {
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
        return view('calon')->with('pesan', 'Berkas Berhasi Dihapus');
    }
}
