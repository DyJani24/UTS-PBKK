<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasUlids;
    
    protected $fillable =[
    'name',
    'description',
    'price',
    'stock',
    'category_id',
    ];

    protected $table = 'Product';

    protected function casts(): array
    {
        return [
            'name' => 'string',
        ];
    }

    public function categori(): BelongsTo
    {
        return $this->belongsTo(Categori::class, 'category_id');
    }

    public function ordersitems():HasMany
    {
        return $this->hasMany(OrdersItems::class,'product_id');
    }
}