<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCustomer extends Model
{
    $fillable = [
    	'customer_id',
    	'product_id'
    ];
}
