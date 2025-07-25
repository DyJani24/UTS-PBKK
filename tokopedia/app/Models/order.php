<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $primaryKey = 'order_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['order_id', 'customer_id', 'order_date', 'total_amount', 'status'];

    public function customer()
    {
        return $this->belongsTo(customer::class, 'customer_id');
    }

    public function items()
    {
        return $this->hasMany(order_item::class, 'order_id');
    }
}
