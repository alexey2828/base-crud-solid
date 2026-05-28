<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Currentcomponentweight extends Model
{
    use HasFactory;

    protected $table = 'currentcomponentweight';
    public $timestamps = false;
    protected $fillable = ['date', 'weight', 'code', 'bsuCode', 'silCemCode', 'deltaWeight', 'isIncreased'];
}
