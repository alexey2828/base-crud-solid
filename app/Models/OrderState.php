<?php
// App/Models/OrderState.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderState extends Model
{
    use HasFactory;
    
    protected $table = 'orderstate';
    protected $primaryKey = 'id';
    public $timestamps = false;
    
    protected $fillable = [
        'date',
        'state',
        'idOrder'
    ];
    
    protected $casts = [
        'id' => 'integer',
        'date' => 'datetime',
        'state' => 'string',
        'idOrder' => 'integer'
    ];
    
    // Связь с заказом
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class, 'idOrder', 'id');
    }
}