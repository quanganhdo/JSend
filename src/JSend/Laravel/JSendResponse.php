<?php
namespace JSend\Laravel;

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Contracts\JsonableInterface;

class JSendResponse extends Facade
{
	public static function getFacadeAccessor() { return 'jsend'; }
}

class JSendResponseHack extends \JSend\JSendResponse implements JsonableInterface 
{
	public function toJson($options = 0)
	{
		return $this->encode();
	}	
}