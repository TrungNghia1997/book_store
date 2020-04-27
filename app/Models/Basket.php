<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    protected $table= 'basket';

     protected $fillable = [
       'name',
       'email',
       'phone',
       'address',       
       'status',
       'checked',
       'nameproduct',
       'qty',       
       'sum',	
    ];
}
