<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ttnstate extends Model
{
    use HasFactory;

    protected $table = 'ttnstate';
    public $timestamps = false;

    protected $fillable = [
        'date',
        'state',
        'idTtn',
        'json',
        'isPause',
    ];

    protected $casts = [
        'isPause' => 'boolean',
    ];
}
