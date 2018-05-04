<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    public function instances()
    {
    	return $this->hasMany('App\ProductInstance');
    }

    public function cart()
    {
    	return $this->hasMany('App\CustomerCart');
    }

    public function productCategory()
    {
    	return $this->belongsTo('App\ProductCategory');
    }

    public function productSubCategory()
    {
    	return $this->belongsTo('App\ProductSubCategory');
    }

    public function discount()
    {
    	return $this->belongsTo('App\Discount');
    }

    public function user()
    {
    	return $this->belongsTo('App\Discount');	
    }

    public function groups()
    {
        return $this->belongsToMany('App\ProductGroup','product_groups_product');
    }    

}
