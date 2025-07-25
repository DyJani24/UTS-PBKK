<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    protected $primaryKey = 'category_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['category_id', 'name', 'description'];

    public function product()
    {
        return $this->hasMany(product::class, 'category_id');
    }
}
