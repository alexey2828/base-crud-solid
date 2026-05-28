<?php
// App/Models/Order.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;
    
    protected $table = 'order';
    protected $primaryKey = 'id';
    public $timestamps = false;
    
    protected $fillable = [
        'idCustomer',
        'number',
        'dispatcher',
        'dateCreate',
        'classRecipe',
        'nameRecipe',
        'vOrder',
        'state',
        'adress',
        'dateFinish',
        'dateStart',
        'interval',
        'fromObject',
        'toObject',
        'idPlant'
    ];
    
    protected $casts = [
        'id' => 'integer',
        'idCustomer' => 'integer',
        'vOrder' => 'float',
        'dateCreate' => 'datetime',
        'dateFinish' => 'datetime',
        'dateStart' => 'datetime',
        'interval' => 'integer',
        'idPlant' => 'integer'
    ];
    
    // Связь с заказчиком
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'idCustomer', 'id');
    }
    
    // Связь с состояниями заказа
    public function orderStates(): HasMany
    {
        return $this->hasMany(OrderState::class, 'idOrder', 'id');
    }
    
    // Связь с БСУ
    public function bsu(): BelongsTo
    {
        return $this->belongsTo(Bsu::class, 'idPlant', 'id');
    }
}