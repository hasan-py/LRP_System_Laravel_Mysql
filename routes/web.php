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

use Illuminate\Http\Request;

// Route::get('welcome','WelcomeController@welcome');
// Route::post('form','WelcomeController@form');
// Route::get('user','UserController@index');


Route::group(['middleware'=>['loginCheck']],function(){
	Route::get('logout','Profiles@logout');
	Route::get('profiles','Profiles@profile');
	Route::get('/','WelcomeController@home');
	Route::get('flash','Profiles@profile');
	Route::get('/db','Profiles@db');
});


//eita try koren bhai!

Route::view('fileupload','profile');
Route::post('fileupload',function(Request $request){
	 	$img->role_id = $request->input('image');
        if ($request->hasfile('image')) {
        $file = $request->file('image');
        $extention = $file->getClientOriginalExtension(); // get img extension
        $filename = time() . '.' . $extention;
        $file->move('upload/profile_image/',$filename);
        $img->image = $filename;
        }
        return "Success .";
});



Route::group(['middleware'=>['logoutCheck']],function(){
	Route::view('login','login');
	Route::post('login','Profiles@login');
});










 ?>