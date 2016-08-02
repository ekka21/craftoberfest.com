<?php
Route::get('/', function () {
    return view('welcome');
});
Route::get('thankyou', function(){
    return view('thankyou');
});
Route::get('participate', function(){
	return redirect('/');
});
Route::get('RK2ypdP8', 'ApplyController@index');
Route::resource('apply', 'ApplyController');

Route::get('about', function(){
	return  view('about');
});

Route::get('2015-vendors', function(){
	return  view('vendors');
});

Route::get('2016-vendors', function(){
	return  view('vendors');
});




Route::auth();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index');

    Route::resource('vendors', 'VendorsController');

});
