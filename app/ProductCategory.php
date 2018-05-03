<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    //

    public function product_sub_categories()
    {
        return $this->hasMany('App\ProductSubCategory');
    }


    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
