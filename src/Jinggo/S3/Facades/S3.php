<?php namespace Jinggo\S3\Facades;

use Illuminate\Support\Facades\Facade;

class S3 extends Facade {

	protected static function getFacadeAccessor() { return 'S3'; }
	
}