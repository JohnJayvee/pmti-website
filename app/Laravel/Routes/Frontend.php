<?php

Route::group([
	'as' => "frontend.",
	'namespace' => "Frontend",
	'middleware' => ["web"],
], function () {

	Route::get('/', ['as' => "index", 'uses' => "MainController@index"]);
	Route::get('product', ['as' => "product", 'uses' => "MainController@product"]);
	Route::get('solution', ['as' => "solution", 'uses' => "MainController@solutions"]);
	Route::get('clients', ['as' => "clients", 'uses' => "MainController@clients"]);
	Route::get('about-us', ['as' => "about-us", 'uses' => "MainController@about"]);
	Route::get('contact', ['as' => "contact", 'uses' => "MainController@contact"]);

	Route::group(['as' => "admin.", 'prefix' => "admin"], function () {
		Route::get('/', ['as' => "index", 'uses' => "PmtiController@index"]);

		Route::get('request-demo', ['as' => "create", 'uses' => "PmtiController@create"]);
		Route::post('request-demo', ['uses' => "PmtiController@store"]);

		Route::get('request-demo-contactUs', ['as' => "create", 'uses' => "PmtiController@create_contactUs"]);
		Route::post('request-demo-contactUs', ['uses' => "PmtiController@store_contactUs"]);

		// Route::get('edit/{id?}', ['as' => "edit", 'uses' => "PmtiController@edit"]);
		// Route::post('edit/{id?}', ['uses' => "PmtiController@update"]);

		Route::get('view', ['as' => "view", 'uses' => "PmtiController@view"]);
		// Route::any('delete/{id?}', ['as' => "destroy", 'uses' => "PmtiController@destroy"]);


	});
});
