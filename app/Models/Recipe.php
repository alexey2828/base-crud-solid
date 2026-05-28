<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recipe extends Model
{
    use HasFactory;

    protected $table = 'recipe';
    public $timestamps = false;
    protected $fillable = ['code', 'name', 'mixt', 'strength', 'mobil', 'frost', 'water', 'marka', 'condition', 'date', 'classRecipe', 'recipeParam', 'comment'];
}
