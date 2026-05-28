<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Compmain extends Model
{
    use HasFactory;

    protected $table = 'compmain';
    public $timestamps = false;
    protected $fillable = ['name', 'code'];
}
