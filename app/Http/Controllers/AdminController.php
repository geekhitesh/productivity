<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;
use App\Order;

class AdminController extends Controller
{
    //

    public function login(Request $request)
    {
    	$id = $request->input('id');

    	$customer = Customer::find(1);

    	return $customer->name;

    }

    public function logout($user_id)
    {

    	return $user_id;

    }   


    public function getAllOrdersByUserId($user_id)
    {

    	$orders = Customer::find(1)->orders;

    	echo $orders->count();

    }


    public function getProductsByUserId($userId)
    {
    	$orders = Customer::find(1)->orders;

    	$product_instances = $orders->find(1)->product_instances;

    	$products = $product_instances->where('name','i-phone');
    	echo $products->count();

    }




}
