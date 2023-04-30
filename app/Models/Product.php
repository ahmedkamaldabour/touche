<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    final public const IMAGE_PATH = 'images/products/';
    protected $fillable = [
        'name',
        'description',
        'price',
        'category_id',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    protected $hidden = [
        'created_at',
        'updated_at',
    ];


    public function getImageAttribute($value)
    {
        return '/'. self::IMAGE_PATH . $value;
    }

}
