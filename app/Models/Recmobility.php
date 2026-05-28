<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recmobility extends Model
{
    use HasFactory;

    protected $table = 'recmobility';
    public $timestamps = false;
    protected $fillable = ['name', 'code'];
}
