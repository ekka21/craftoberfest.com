<?php
Route::get('/', function () {
    return view('welcome');
});
Route::get('thankyou', function(){
    return view('thankyou');
});
Route::get('participate', 'ApplyController@index');
Route::resource('apply', 'ApplyController');

Route::get('about', function(){
	return  view('about');
});

Route::get('vendors', function(){
	return  view('vendors');
});




Route::auth();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index');

    Route::resource('admin-vendors', 'VendorsController');

});
