<?php

use Pecee\Http\Request;
use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace( 'Website\Controllers' );

SimpleRouter::group( [ 'prefix' => site_url() ], function () {

	SimpleRouter::get('/', 'websitecontroller@home')->name('home');
	SimpleRouter::get('/diensten', 'websitecontroller@diensten')->name('diensten');
	SimpleRouter::get('/contact', 'websitecontroller@contact')->name('contact');
	SimpleRouter::get('/over', 'websitecontroller@over')->name('over');
	SimpleRouter::get('/diensten', 'websitecontroller@diensten')->name('diensten');
} );

SimpleRouter::error( function ( Request $request, \Exception $exception ) {
	if ( $exception instanceof NotFoundHttpException && $exception->getCode() === 404 ) {
		response()->redirect( site_url() . '/');
	}
}
);

