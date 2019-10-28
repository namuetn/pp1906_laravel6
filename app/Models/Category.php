<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
    	'user_id',
    	'parent_id',
    	'name'
    ];

    public function parent() {
    	return $this->belongsTo('App\Models\Category');
    }

    
}
