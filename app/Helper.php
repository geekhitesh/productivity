<?php


class Helper {


	public static function __to_assoc($object_array)
	{

		return json_decode(json_encode($object_array),TRUE);
	}


}

?>