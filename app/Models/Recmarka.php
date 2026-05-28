<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recmarka extends Model
{
    use HasFactory;

    protected $table = 'recmarka';
    public $timestamps = false;
    protected $fillable = ['name', 'code'];
}
