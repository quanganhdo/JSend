<?php
namespace JSend\Laravel;

use JSend\JSendResponse;
use Illuminate\Support\ServiceProvider;

class JSendServiceProvider extends ServiceProvider
{

	public function register()
	{
		$this->app->bind('jsend', function($app) {
			return new JSendResponseHack('success');
		});
	}

	public function provides()
	{
		return array('jsend');
	}

}
