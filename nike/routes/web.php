<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){

	return view('layouts.frontend');

});
Route::get('/men',[
'uses'=>'FrontEndController@items',
'as'=>'men'
]);
Route::get('/checkout/{id}',[
'uses'=>'FrontEndController@checkout',
'as'=>'checkout'
]);
Route::get('checkoutwomen/{id}',[
'uses'=>'FrontEndController@checkoutwomen',
'as'=>'checkoutwomen'
]);
Route::get('checkoutkids/{id}',[
'uses'=>'FrontEndController@checkoutkids',
'as'=>'checkoutkids'
]);

Route::get('/women',[
'uses'=>'FrontEndController@women',
'as'=>'women'
]);
Route::get('/women',[
'uses'=>'FrontEndController@womenitems',
'as'=>'women'
]);
Route::get('/kids',[
'uses'=>'FrontEndController@kidsitems',
'as'=>'kids'
]);
Route::get('/register1',[
'uses'=>'FrontUsersController@register',
'as'=>'register1'
	]);
Route::get('/login1',[
	'uses'=>'FrontUsersController@login',
	'as'=>'login1'
	]);

Route::get('/results', function(){

	$nike=\App\Nike::where('name','like','%'.request('search').'%')->get();

	return view('results')->with('products',$products)
	->with('name','Search results:'.request('search'))
	->with('search',request('search'));

});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::resource('/products', 'BackendController');

Route::get('/products/delete/{id}',[

'uses'=>'BackendController@destroy',
'as'=>'products.destroy'

]);


Route::resource('/womenproducts','WomenController');

Route::get('/womenproducts/delete/{id}',[
'uses'=>'WomenController@destroy',
'as'=>'womenproducts.destroy'

]);

Route::resource('/productskids','KidsController');
