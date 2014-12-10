<?php

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

/*
 * Add route to the logo.
 * Adds custom routes.
 * @param Illuminate\Http\Request $request
 * @return null
 */
App::before(function($request)
{
	Route::get('/logo', function () {
		$response = Response::make( \Backend\Models\BrandSettings::instance()->logo->output(), 200);
		$response->header('Content-Type', 'image/png');
		return $response;
	});

	$ctrl = new \Cms\Classes\Controller();
	
	foreach (\AxC\DataManagement\Models\Route::published() as $route) 
	{
		$language[] = (object)['code' => $route->language];
		if ($route->language == '') $language = array_merge( $language, \RainLab\Translate\Models\Locale::get( ['code'] )->all() );

		foreach ($language as $l)
			Route::any("$l->code/$route->path", function () use ($ctrl, $route)
			{
				return $ctrl->run($route->page);
			});
	}
});