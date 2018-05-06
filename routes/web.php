<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('customer.general.welcome');
});


Route::get('/test', function () {

	//return  App\Customer::find(1)->get(); // get customer
	//return  App\Customer::find(1)->addresses; // get customer addresses
	//return  App\Customer::find(1)->orders; // get all orders
	//return  App\Customer::find(1)->cart; // get all items in cart
	
    //return  App\User::find(1)->get(); // get user
    //return  App\User::find(1)->addresses; // addresses
    //return  App\User::find(1)->product_categories; // product categories
    //return  App\User::find(1)->product_sub_categories; // product sub categories

	//return App\ProductCategory::find(1); // get product category
    //return App\ProductCategory::find(2)->products; // get products
	// return App\ProductCategory::find(2)->user; // get corresponding user

     
    //return App\Product::all(); // get product
	//return App\Product::find(1); // get product
	//return App\Product::find(1)->instances; // get product instances - sold
	//return App\Product::find(1)->cart; // get products in cart
	//return App\Product::find(1)->productCategory; // get product category
	//return App\Product::find(1)->productSubCategory; // get product sub category
	//return App\Product::find(1)->discount; // get product discount
	//return App\Product::find(1)->user; // get user who created the product
	//return App\Product::find(2)->groups; // get all groups this product belongs to.

	//return App\Order::find(1); // get order details by id
	//return App\Order::find(1)->customer; // get customer details by order id
	//return App\Order::find(1)->product_instances; // get all items in order

	//return App\ProductInstance::find(1); // get instance details
	//return App\ProductInstance::find(1)->order; // get order details
	//return App\ProductInstance::find(1)->product; // get product details

	//return App\ProductGroup::find(1); // get package details
	//return App\ProductGroup::find(2)->products; // get products in a package

});




Route::get('/login','AdminController@login');

Route::get('/logout/{user_id}','AdminController@logout');

Route::get('/admin/orders/{user_id}','AdminController@getAllOrdersByUserId');
Route::get('/admin/product-instances/{user_id}','AdminController@getProductsByUserId');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// OAuth Routes
Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');



//Route::get('/cache/build/{user_id}','CacheController@build');

Route::middleware(['api_auth'])->group(function () {
    Route::get('/cache/build','CacheController@build');
    Route::get('/cache/get/{key}','CacheController@get');
    Route::get('/cache/destroy','CacheController@destroy');
    Route::get('/cache/all','CacheController@all');

});