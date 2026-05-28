<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reccomment extends Model
{
    use HasFactory;

    protected $table = 'reccomment';
    public $timestamps = false;
    protected $fillable = ['name'];
}
