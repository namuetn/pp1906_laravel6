<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
    	'name',
    	'age',
    	'address'
    ];

    public function product() {
    	return $this->belongsToMany('App\Models\Customer', 'product_customers');
    } 
}
