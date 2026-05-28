<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Weightmanual extends Model
{
    use HasFactory;

    protected $table = 'weightmanual';
    public $timestamps = false;

    protected $fillable = [
        'indProduct',
        'numLoop',
        'code',
        'weight',
        'dispenser',
        'idProduct',
    ];
}
