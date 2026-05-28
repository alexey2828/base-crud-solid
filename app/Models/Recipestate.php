<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recipestate extends Model
{
    use HasFactory;

    protected $table = 'recipestate';
    public $timestamps = false;
    protected $fillable = ['state', 'date', 'codeBsu'];
}
