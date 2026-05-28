<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mainstate extends Model
{
    use HasFactory;

    protected $table = 'mainstate';
    public $timestamps = false;
    protected $fillable = ['name', 'code', 'options', 'entityName', 'isPause'];
}
