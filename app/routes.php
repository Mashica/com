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



// Show the placeholder in the homepage.
Route::get('/', function()
{
	return View::make('mashica');
});





// Environment checker
Route::get('/environment', array('as' => 'env' , function()
{
	$environment = App::environment();
	return $environment;
}));

