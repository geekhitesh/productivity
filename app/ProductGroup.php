<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductGroup extends Model
{
    //

    public function products()
    {
    	return $this->belongsToMany('App\Product','product_groups_product');
    }

}
