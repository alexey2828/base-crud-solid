<?php
// App/Models/Mixture.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mixture extends Model
{
    use HasFactory;
    
    protected $table = 'mixture';
    protected $primaryKey = 'id';
    public $timestamps = false;
    
    protected $fillable = [
        'fullName',
        'code',
        'shortName'
    ];
    
    protected $casts = [
        'id' => 'integer'
    ];
}