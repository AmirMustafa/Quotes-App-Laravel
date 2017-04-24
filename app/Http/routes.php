<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middeware' => ['web']], function() {
	/*Route::get('/', function () {
		return view('index');
	});*/

	Route::get('/{author?}', [		//author is optional as ? is given, done for filter purpose
		'uses' => 'QuoteController@getIndex',
		'as' => 'index'
	]);

	Route::post('/new', [
		'uses' => 'QuoteController@postQuote',
		'as' => 'create'
	]);

	Route::get('/delete/{quote_id}', [	//passed query string should be same as index.blade.php line 52
		'uses' => 'QuoteController@getDeleteQuote',
		'as' => 'delete'
	]);

	Route::get('/gotemail/{author_name}', [		//setting up Route for Mail Callback
		'uses' => 'QuoteController@getMailCallback',
		'as' => 'mail_callback'
	]);

});














/*Route::get('login', 'AdminController@login');
Route::post('login', 'AdminController@login');

Route::get('signup', 'AdminController@signup');
Route::post('signup', 'AdminController@signup');
Route::get('/edit/{id}','AdminController@edit');
Route::post('update', 'AdminController@update');

Route::get('/home','AdminController@home');
Route::post('home', 'AdminController@home');

Route::get('/delete/{id}','AdminController@delete');
Route::get('logout', 'AdminController@logout');
*/


