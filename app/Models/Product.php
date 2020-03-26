<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'user_id',
        'category_id',
    	'name',
    	'content',
    	'quantity',
    	'price',
        'image'
    ];	

   
    public function user() {
        
        return $this->belongsTo('App\User');
    }

    public function orders() {
        
        return $this->belongsToMany('App\Models\Order', 'product_order');
    }

     public function sizes() {
        
        return $this->belongsToMany('App\Models\Size', 'product_size');
    }

    public function category() {
        
        return $this->belongsTo('App\Models\Category');
    }

}
