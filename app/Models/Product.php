<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'cate_id',
        'product_name',
        'product_description',
        'brand_id',
        'image',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
        'fiche',
        'qty',
        'product_reference',
        'price',
        'trending',
    ];

    public function category()
    {
        return $this->belongsto(SubCategory::class, 'cate_id', 'id');
    }
    public function brand()
    {
        return $this->belongsto(Brand::class, 'brand_id', 'id');
    }
}
