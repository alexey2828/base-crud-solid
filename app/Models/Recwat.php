<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recwat extends Model
{
    use HasFactory;

    protected $table = 'recwat';
    public $timestamps = false;
    protected $fillable = ['name', 'code'];
}
