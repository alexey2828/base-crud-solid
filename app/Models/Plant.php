<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plant extends Model
{
    use HasFactory;

    protected $table = 'plants';
    public $timestamps = false;
    protected $fillable = ['codePlant', 'name', 'comment'];
}
