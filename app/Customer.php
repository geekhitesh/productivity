<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //




    public function addresses()
    {
    	return $this->hasMany('App\Address');
    }

    public function orders()
    {
    	
    	return $this->hasMany('App\Order');
    }    

    public function cart()
    {
    	return $this->hasMany('App\CustomerCart');
    }
}
