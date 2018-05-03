<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Addded comments to file
class ProductInstance extends Model
{
    //


    public function order()
    {
    	return $this->belongsTo('App\Order');
    }


    public function product()
    {
    	return $this->belongsTo('App\Product');
    }
}
