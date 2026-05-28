<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reportweightmanual extends Model
{
    use HasFactory;

    protected $table = 'reportweightmanual';
    public $timestamps = false;
    protected $fillable = ['loopNumber', 'code', 'dispenser', 'weight'];
}
