<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    // Added changes to this file.
    public function product_instances()
    {
    	return $this->hasMany('App\ProductInstance');
    }


    public function customer()
    {
    	return $this->belongsTo('App\Customer');
    }

    public function address()
    {
    	return $this->belongsTo('App\Address');
    }

}

