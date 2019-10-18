<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'user_id',
    	'name',
    	'content',
    	'quantity',
    	'price'
    ];	

   
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function customer() {
    	return $this->belongsToMany('App\Models\Customer', 'product_customers');
    }
}
