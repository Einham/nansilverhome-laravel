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

Route::get('/', 'FrontController@index')->name('home');
Route::get('/shirts', 'FrontController@shirts')->name('shirts');
Route::get('/necklace', 'FrontController@necklace')->name('necklace');
Route::get('/shirt', 'FrontController@shirt')->name('shirt');


Auth::routes();

Route::get('/foo',function(){
  return "พี่จุง";
});

Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index');


Route::resource('ddd', 'add_product_typeController');
Route::resource('/cart','CartController');

Route::get('/cartupdate/{id}','CartController@update');

Route::get('cartedit/{id}/{type}', 'CartController@edit');
// Route::get('sendemail','sendcontroller@index');

Route::get('sendemail', 'sendcontroller@toorders')->name('sendemail.tomail');


// ----------------------------------------------------------------------------------
Route::group(['prefix' => 'admin', 'middleware'=> ['auth','admin']], function ()
{
    Route::get('/', function ()
    {
        return view('admin.index');
    })->name('admin.index');

    Route::resource('product', 'ProductsController');
    Route::resource('ring', 'RingController');
    Route::resource('necklace', 'necklaceController');
    Route::resource('category', 'CategoriesController');
});
