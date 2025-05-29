<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categori extends Model
{
    use HasUlids;
    
    protected $fillable =[
    'name',
    'description',
    ];

    protected $table = 'categories';

    protected function casts(): array
    {
        return [
            'name' => 'string',
        ];
    }

    public function product():HasMany
    {
        return $this->hasMany(Product::class,'product_id');
    }

}