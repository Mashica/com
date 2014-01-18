<?php


// Show the placeholder in the homepage.
Route::get('/', function()
{
	return View::make('mashica');
});


// ZonaBici page
Route::get('/zonabici', function()
{
	return View::make('zonabici');
});

// primer ladino pedido
Route::get('/ladino', function()
{
	return View::make('ladino');
});


// Calendarios
Route::get('/cal2014', function()
{
	return View::make('cal2014.cal2014');
});






// Lista de atletas activas de Mashica Sport
Route::get('atletas', function(){
	
	$users = User::where('isactive','=',1)->orderBy('name')->orderBy('lastname1')->get();
	//->where('name','=','Maritza')
	//return View::make('athletelist.zonabici')->with('users', $users);
	return View::make('athletelist.atletas')->with(array(
		'users'=> $users,
		'atype'=> ''
		));
});


// Lista de atletas activas de Mashica Sport
Route::get('exatletas', function(){
	
	$users = User::where('isactive','=',0)->orderBy('name')->orderBy('lastname1')->get();
	//->where('name','=','Maritza')
	//return View::make('athletelist.zonabici')->with('users', $users);
	return View::make('athletelist.atletas')->with(array(
		'users'=> $users,
		'atype'=> 'ex'
		));
});




// Environment checker
Route::get('/environment', array('as' => 'env' , function()
{
	$environment = App::environment();
	return $environment;
}));

