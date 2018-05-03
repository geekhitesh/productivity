<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    // New comments to add code into me.
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','provider', 'provider_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function addresses()
    {
        return $this->hasMany('App\Address');
    }

    public function product_categories()
    {
        return $this->hasMany('App\ProductCategory');
    }

    public function product_sub_categories()
    {
        return $this->hasMany('App\ProductSubCategory');
    }


    public function discounts()
    {
        return $this->hasMany('App\Discount');
    }

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    

}
