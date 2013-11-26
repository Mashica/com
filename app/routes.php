<?php


// Show the placeholder in the homepage.
Route::get('/', function()
{
	return View::make('mashica');
});


// Show the placeholder in the homepage.
Route::get('/zonabici', function()
{
	return View::make('zonabici');
});




// Lista de atletas activas de Mashica Sport
Route::get('atletas', function(){
	
	$users = User::where('isactive','=',1)->orderBy('name')->get();
	//->where('name','=','Maritza')
	//return View::make('athletelist.zonabici')->with('users', $users);
	return View::make('athletelist.atletas')->with('users', $users);
});








// Environment checker
Route::get('/environment', array('as' => 'env' , function()
{
	$environment = App::environment();
	return $environment;
}));

