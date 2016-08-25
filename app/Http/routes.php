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


Route::get('vendor-contract', function(){
    return view('vendorContract');
});

use Illuminate\Http\Request;

Route::post('vendor-contract', function(Request $request){


    // dd($request->all());
     $rules = [
         'business_name'           => 'required',
         'name'                    => 'required',
         'email'                   => 'required|email',
         'phone_number'            => 'required',
         'loss_prevention'         => 'required',
         'tax_responsibility'      => 'required',
         'remain_responsibility' => 'required',
         'outdoors_understanding'  => 'required',
         'tables_responsibility'   => 'required',

    ];

    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails())
    {   
        return redirect()->back()->withInput()->withErrors($validator);
    }

    App\vendorContract::create($request->all()); 
    
    return view('vendorContract-thankyou');
});
