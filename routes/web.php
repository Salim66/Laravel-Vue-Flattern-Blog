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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/{anypath}', 'App\Http\Controllers\HomeController@index')->where('path', '.*');

//Category
Route::get('/all-category', 'App\Http\Controllers\CategoryController@allCategory');
Route::post('/add-category', 'App\Http\Controllers\CategoryController@addCategory');
Route::get('/category-delete/{id}', 'App\Http\Controllers\CategoryController@deleteCategory');
Route::get('/edit-category/{id}', 'App\Http\Controllers\CategoryController@editCategory');
Route::post('/update-category/{id}', 'App\Http\Controllers\CategoryController@updateCategory');
