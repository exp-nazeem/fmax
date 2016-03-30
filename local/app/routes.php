<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/*
Route::get('/', function()
{
	return View::make('hello');
});
*/
Route::get('/', 'HomeController@showWelcome');

Route::group(['prefix' => 'subscribe'], function(){
	Route::get('mail/{id}', 'SubscribeController@mail');
	Route::post('feedback', 'SubscribeController@feedback');
});

Route::group(['prefix' => 'contact'], function(){
	Route::get('/', 'HomeController@contact');
});

Route::group(['prefix' => 'about'], function(){
	Route::get('/', 'HomeController@about');
});
Route::group(['prefix' => 'news'], function(){
	//Route::get('/{id}', 'HomeController@news');
	Route::get('/{id}{title?}', array('uses' => 'HomeController@news'))->where('title', '.*');

});

Route::group(['prefix' => 'product'], function(){
	Route::get('/', 'HomeController@product');
});
Route::group(['prefix' => 'business'], function(){
	Route::get('/', 'HomeController@business');
});
Route::group(['prefix' => 'casestudy'], function(){
	Route::get('/', 'HomeController@casestudy');
});
Route::group(['prefix' => 'downloads'], function(){
	Route::get('/', 'HomeController@customerStories');
});
Route::group(['prefix' => 'downloads'], function(){
	Route::post('/', 'HomeController@downloads');
});
Route::group(['prefix' => 'freedownloads'], function(){
	Route::get('/', 'HomeController@freeDownloads');
});
Route::group(['prefix' => 'faq'], function(){
	Route::get('/', 'HomeController@faq');
});
Route::group(['prefix' => 'industry'], function(){
	Route::get('/', 'HomeController@industry');
});

Route::group(['prefix' => 'cpg'], function(){
	Route::get('/', 'HomeController@cpg');
});
Route::group(['prefix' => 'vansales'], function(){
	Route::get('/', 'HomeController@vansales');
});
Route::group(['prefix' => 'pharma'], function(){
	Route::get('/', 'HomeController@pharma');
});
Route::group(['prefix' => 'retail'], function(){
	Route::get('/', 'HomeController@retail');
});
Route::group(['prefix' => 'audit'], function(){
	Route::get('/', 'HomeController@audit');
});