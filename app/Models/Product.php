<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'nameslug',
        'category_id',              
        'avatar',
        'images',
        'is_feature',
        'price',
        'sale',
        'author_id',
        'id_product',
        'short_description',
        'description',
        'status',
    ];
   
}
