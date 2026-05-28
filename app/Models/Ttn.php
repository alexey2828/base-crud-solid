<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ttn extends Model
{
    use HasFactory;

    protected $table = 'ttn';
    public $timestamps = false;

    protected $fillable = [
        'date',
        'idPlant',
        'idOrder',
        'dispatcher',
        'vProduct',
        'driver',
        'car',
        'finishAdress',
        'finishDate',
        'state',
        'isPause',
        'idProduct',
        'idBsu',
    ];

    protected $casts = [
        'isPause' => 'boolean',
    ];
}
