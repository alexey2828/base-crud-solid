<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bsu extends Model
{
    protected $table = 'bsu';

    public $timestamps = false;

    protected $fillable = [
        'codePlant',
        'code',
        'name',
        'vMixer',
        'isWork',
    ];

    protected $casts = [
        'isWork' => 'boolean',
        'vMixer' => 'float',
    ];
}
