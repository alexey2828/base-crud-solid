<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Consumptioncomponentweight extends Model
{
    use HasFactory;

    protected $table = 'consumptioncomponentweight';
    public $timestamps = false;
    protected $fillable = ['date', 'code', 'weight', 'silCemCode'];
}
