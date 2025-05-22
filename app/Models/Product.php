<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }


    // mutator untuk nama produk
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
    }

    // accessor untuk nama produk
    public function getNameAttribute($value)
    {
        return strtolower($value);
    }
}  
