<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table = 'penduduk';

    protected $fillable = [
        'name',
        'nik',
        'no_kk',
        'gender',
        'no_hp',
        'status_perkawinan',
        'place_of_birth',
        'fcm_token',
        'date_of_birth',
        'image',
        'address',
        'religion',
        'education',
        'profession'
    ];
}
