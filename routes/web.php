<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::match(['get', 'post'],'/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/test', [\App\Http\Controllers\TestController::class, 'index'])->name('test');

Route::match(['get', 'post'],'/catalog', [\App\Http\Controllers\CatalogController::class, 'index'])->name('catalog');

Route::match(['get', 'post'],'/sample', [\App\Http\Controllers\ProductController::class, 'index'])->name('sample');

//Route::match(['get', 'post'],'/catalog', ['as' => 'catalog', 'uses' => 'CatalogController@index']);
//Route::get('/sample', ['as' => 'sample', 'uses' => 'ProductController@index']);

