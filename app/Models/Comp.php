<?php
// App/Models/Comp.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comp extends Model
{
    use HasFactory;
    
    protected $table = 'comp';
    protected $primaryKey = 'id';
    public $timestamps = false;
    
    protected $fillable = [
        'name',
        'code',
        'typeCode'
    ];
    
    protected $casts = [
        'id' => 'integer'
    ];
}