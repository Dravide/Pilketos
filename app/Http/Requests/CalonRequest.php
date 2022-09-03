<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CalonRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nama_calon'    => 'required|unique:calons',
            'jargon'        => 'required',
            'visi_dan_misi' => 'required',
            'poster'        => 'image|file|max:5000'
        ];
    }

//    public function authorize(): bool
//    {
//        return true;
//    }
}
