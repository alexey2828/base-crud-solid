<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classrecipe extends Model
{
    use HasFactory;

    protected $table = 'classrecipe';

    public $timestamps = false;

    protected $fillable = ['code', 'name', 'shortName'];
}
