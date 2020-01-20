<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $fillable = [
    	'name',
    ];	

    public function products() {
        
        return $this->belongsToMany('App\Models\Product', 'product_size', 'product_id', 'size_id');
    }
}
