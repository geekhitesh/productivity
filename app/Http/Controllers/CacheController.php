<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\CacheRepository;


class CacheController extends Controller
{
    //

    private $cacheRepository;

    public function __construct()
    {
    	$this->cacheRepository = new CacheRepository();
    }

    public function build()
    {
    	$this->cacheRepository->build();
    	return $this->all();
    }

    public function destroy()
    {
    	$this->cacheRepository->destroy();

    }

    public function get($key)
    {
    	return $this->cacheRepository->get($key);
    }

    public function all()
    {
    	return $this->cacheRepository->all();
    }

}
