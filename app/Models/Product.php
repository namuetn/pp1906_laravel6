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
    	'price'
    ];	

   
    public function user() {
        
        return $this->belongsTo('App\User');
    }

    public function orders() {
        
        return $this->belongsToMany('App\Models\Order', 'product_order');
    }

    public function category() {
        
        return $this->belongsTo('App\Models\Category');
    }

}
