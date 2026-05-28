<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Silcem extends Model
{
    use HasFactory;

    protected $table = 'silcem';
    public $timestamps = false;
    protected $fillable = ['codeBSU', 'code', 'batcher', 'capacity'];
}
