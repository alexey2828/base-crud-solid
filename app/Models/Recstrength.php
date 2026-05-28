<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recstrength extends Model
{
    use HasFactory;

    protected $table = 'recstrength';
    public $timestamps = false;
    protected $fillable = ['name', 'code'];
}
