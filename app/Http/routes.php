<?php
Route::get('/', function () {
    return view('welcome');
});
Route::get('thankyou', function(){
    return view('thankyou');
});
Route::resource('apply', 'ApplyController');

Route::auth();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index');

    Route::resource('vendors', 'VendorsController');

});
