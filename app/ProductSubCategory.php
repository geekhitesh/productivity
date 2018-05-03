<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSubCategory extends Model
{
    //


    public function user()
    {
    	
    	return $this->belongsTo('App\User');
    }

    public function product_category()
    {
    	
    	return $this->belongsTo('App\ProductCategory');
    }
}
