<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reportcurrentloop extends Model
{
    use HasFactory;

    protected $table = 'reportcurrentloop';
    public $timestamps = false;
    protected $fillable = ['vLoop', 'loopNumber', 'code', 'dispencer', 'doisingError', 'doisingErrorPersent', 'doisingKorr', 'humidityKorr', 'weightFactLoop', 'weightFactM3', 'weightRecipeLoop', 'weightRecipeM3', 'idProduct', 'indProduct', 'powerLoop'];
}
