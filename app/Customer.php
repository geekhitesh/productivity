<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    //

     use Notifiable;


    protected $fillable = [
        'first_name', 'email', 'password','provider', 'provider_id'
    ];

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
