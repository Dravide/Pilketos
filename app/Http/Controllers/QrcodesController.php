<?php

namespace App\Http\Controllers;

use App\Models\Qrcode;
use Illuminate\Http\Request;

class QrcodesController extends Controller
{
    public function index()
    {
        $qr = Qrcode::all();
        return view('qr.index', [
            'judul'     => 'QR Code',
            'qr'        => $qr
    ]);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
    }

    public function show(Qrcode $qrcode)
    {
    }

    public function edit(Qrcode $qrcode)
    {
    }

    public function update(Request $request, Qrcode $qrcode)
    {
    }

    public function destroy(Qrcode $qrcode)
    {
    }
}
