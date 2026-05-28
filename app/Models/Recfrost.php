<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recfrost extends Model
{
    use HasFactory;

    protected $table = 'recfrost';
    public $timestamps = false;
    protected $fillable = ['name', 'code'];
}
