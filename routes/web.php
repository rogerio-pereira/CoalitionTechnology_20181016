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

Route::get('/', 'Test\\ProductController@index')->name('index');
Route::post('/product/storeAjax', 'Test\\ProductController@storeAjax');
Route::get('/product/all', 'Test\\ProductController@all');

Route::group(['namespace' => 'Test',], function() 
{
    Route::resource('product', 'ProductController');
});
