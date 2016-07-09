<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
/*
Route::get('product/droptable',function()
{
	Schema::drop('cates');
	echo "Droped";
});
*/
//Admin page
Route::get('admin/index',function(){
	return view('admin.index');
});
Route::get('home',function(){
	return redirect()->route('home');
});
//Category
Route::get('cate/create',['as'=>'cate.create','uses'=>'CatesController@create']);
Route::post('cate/store',['as'=>'cate.store','uses'=>'CatesController@store']);
Route::get('cate',['as'=>'cate.index','uses'=>'CatesController@index']);
Route::get('cate/{id}/edit',['as'=>'cate.edit','uses'=>'CatesController@edit']);
Route::get('cate/{id}',['as'=>'cate.show','uses'=>'CatesController@show']); //N/A
Route::put('cate/{id}',['as'=>'cate.update','uses'=>'CatesController@update']);
Route::delete('cate/{id}',['as'=>'cate.destroy','uses'=>'CatesController@destroy']);
//Product
Route::get('product/create',['as'=>'product.create','uses'=>'ProductsController@create']);
Route::post('product/store',['as'=>'product.store','uses'=>'ProductsController@store']);
Route::get('product',['as'=>'product.index','uses'=>'ProductsController@index']);
Route::get('product/{id}',['as'=>'product.show','uses'=>'ProductsController@show']); //N/A
Route::delete('product/{id}',['as'=>'product.destroy','uses'=>'ProductsController@destroy']);
Route::get('product/{id}/edit',['as'=>'product.edit','uses'=>'ProductsController@edit']);
Route::put('product/{id}',['as'=>'product.update','uses'=>'ProductsController@update']);
//Home page
Route::get('home/product',['as'=>'home.product.index','uses'=>'ProductsController@indexHome']);
Route::get('home/category',['as'=>'home.cate.index','uses'=>'CatesController@indexHome']);
Route::get('home/category/{id}',['as'=>'home.cate.show','uses'=>'CatesController@showHome']);
Route::get('/',['as'=>'home','uses'=>'CatesController@getAllProducts']);
Route::get('home/product/{id}',['as'=>'home.product.show','uses'=>'ProductsController@showHome']);

//Login (Only Admin)
Route::get('getRegister',['as'=>'auth.getRegister','uses'=>'Auth\AuthController@getRegister']);
Route::post('postRegister',['as'=>'auth.postRegister','uses'=>'Auth\AuthController@postRegister']);
Route::get('getLogin',['as'=>'auth.getLogin','uses'=>'Auth\AuthController@getLogin']);
Route::post('postLogin',['as'=>'auth.postLogin','uses'=>'Auth\AuthController@postLogin']);
