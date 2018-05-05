<?php

namespace App\Repositories;

class Helper {


	/*public static function __to_assoc($object_array)
	{

		return json_decode(json_encode($object_array),TRUE);
	}*/


	public static function to_assoc($object_array)
    {

    	$prim_array = json_decode(json_encode($object_array),TRUE);
    	$assoc_array = array();
    	foreach($prim_array as $val)
    	{
    		$assoc_array[$val['id']] = $val;
    	}

    	return $assoc_array;
    }

}

?>