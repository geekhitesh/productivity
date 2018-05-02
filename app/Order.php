<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    public function product_instances()
    {
    	return $this->hasMany('App\ProductInstance');
    }
}
