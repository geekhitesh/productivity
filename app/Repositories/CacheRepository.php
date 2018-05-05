<?php

namespace App\Repositories;

use App\Discount;
use App\Product;
use App\ProductCategory;
use App\ProductSubCategory;
use App\ProductGroup;

use Cache;


class CacheRepository {

	private $modules;
    private $product_category_cache;
    private $product_group_cache;
    private $product_cache;
    private $featured_product_cache;
    private $discount_cache;

    public function __construct()
    {

    }

    public function build()
    {
    	$data = ProductCategory::with(
                ['product_sub_categories' => function ($query) {
                        $query->where('push_to_website','true');
                    },
                 'products'
                ])->where('push_to_website','true')->get();
    	//$this->product_category_cache = $this->to_assoc(json_decode(json_encode($data),TRUE));
        $this->product_category_cache = Helper::to_assoc($data);

    	$data = ProductGroup::with(['products'])->where('push_to_website','true')->get();
    	$this->product_group_cache = Helper::to_assoc($data);

    	$data = Product::all()->where('featured','true')->where('push_to_website','true');
    	$this->featured_product_cache = Helper::to_assoc($data);

    	$data = Discount::all();
    	$this->discount_cache = Helper::to_assoc($data);

    	Cache::forever('product_category',$this->product_category_cache);
    	Cache::forever('product_group',$this->product_group_cache);
    	Cache::forever('featured_product',$this->featured_product_cache);
    	Cache::forever('discount',$this->discount_cache);
    }

    public function destroy()
    {
    	Cache::flush();
    }

    public function all()
    {
    	$cache = array();
    	if(Cache::has('product_category'))
		{
			$cache['product_category'] = Cache::get('product_category');
		}

    	if(Cache::has('product_group'))
		{
			$cache['product_group'] = Cache::get('product_group');
		}	

    	if(Cache::has('featured_product'))
		{
			$cache['featured_product'] = Cache::get('featured_product');
		}	
	
    	if(Cache::has('discount'))
		{
			$cache['discount'] = Cache::get('discount');
		}


		return $cache;

    }


    public function get($key)
    {
    	if(Cache::has($key))
    	{
    		return Cache::get($key);
    	}
        else
        {
            return "$key Cache Empty";
        }

    }

    private function to_assoc($prim_array)
    {
    	$assoc_array = array();
    	foreach($prim_array as $val)
    	{
    		$assoc_array[$val['id']] = $val;
    	}

    	return $assoc_array;
    }


}

