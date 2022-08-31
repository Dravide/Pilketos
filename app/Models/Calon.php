<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calon extends Model
{
    protected $fillable = [
        'nama_calon',
        'jargon',
        'visi_dan_misi',
        'poster'
    ];
}
