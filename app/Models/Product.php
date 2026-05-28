<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    public $timestamps = false;
    protected $fillable = ['dateStart', 'timeEnd', 'vProduct', 'loopNumber', 'vLoop', 'driver', 'car', 'classRecipe', 'nameRecipe', 'recipe', 'idTtn', 'timeStart', 'num_loop', 'idPlant', 'indProduct'];
}
