<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class order_item extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['id', 'order_id', 'product_id', 'quantity', 'price'];

    public function order()
    {
        return $this->belongsTo(order::class, 'order_id');
    }

    public function product()
    {
        return $this->belongsTo(product::class, 'product_id');
    }
}
