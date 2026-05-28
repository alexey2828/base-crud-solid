<?php
// App/Models/Driver.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Driver extends Model
{
    use HasFactory;
    
    protected $table = 'driver';
    protected $primaryKey = 'id';
    public $timestamps = false;
    
    protected $fillable = [
        'name',
        'codeRFID',
        'comment'
    ];
    
    protected $casts = [
        'id' => 'integer'
    ];
}