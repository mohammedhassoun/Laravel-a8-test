<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

 Route::resource('products', App\Http\Controllers\Backend\ProductController::class);
/*
Route::group(['prefix' => 'products'], function () {
    Route::get('', 'App\Http\Controllers\Backend\ProductController@index')->name('products.index');
    Route::get('show', 'App\Http\Controllers\Backend\ProductController@show')->name('products.show');
    Route::get('create', 'App\Http\Controllers\Backend\ProductController@create')->name('products.create');
    Route::post('', 'App\Http\Controllers\Backend\ProductController@store')->name('products.store');
    Route::get('edit/{Product}', 'App\Http\Controllers\Backend\ProductController@edit')->name('products.edit');
    Route::post('update/{Product}', 'App\Http\Controllers\Backend\ProductController@update')->name('products.update');
    Route::get('delete/{Product}', 'App\Http\Controllers\Backend\ProductController@destroy')->name('products.destroy');

});
*/
