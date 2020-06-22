<?php 


/*Required Route with parameter
Route::get('welcome/{name}',function($name){
	return "Welcome to laravel and parameter is ".$name;
});
*/

// Optional Route with Dynamic parameter
/*Redirect Route method
Route::Redirect('/','welcome');
Route::permanentRedirect('/','welcome');*/



// Route::get('welcome','WelcomeController@welcome');
// Route::post('form','WelcomeController@form');
// Route::get('user','UserController@index');


Route::group(['middleware'=>['loginCheck']],function(){
	Route::get('logout','Profiles@logout');
	Route::get('profiles','Profiles@profile');
	Route::get('/','WelcomeController@home');
	Route::get('flash','Profiles@profile');
	Route::get('/db','Profiles@db');
	Route::post('fileupload','Profiles@fileupload');
});



Route::group(['middleware'=>['logoutCheck']],function(){
	Route::view('login','login');
	Route::post('login','Profiles@login');
});










 ?>