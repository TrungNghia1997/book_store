<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [        
        'author',
        'des_author',
        'image_author',        
    ];
}
