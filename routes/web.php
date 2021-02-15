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
Route::get('/selected-category-delete/{ids}', 'App\Http\Controllers\CategoryController@selectedCategoryDelete');

//Post
Route::get('/all-post', 'App\Http\Controllers\PostController@allPost');
Route::post('/add-post', 'App\Http\Controllers\PostController@addPost');
Route::get('/delete-post/{id}', 'App\Http\Controllers\PostController@deletePost');
Route::get('/edit-post/{id}', 'App\Http\Controllers\PostController@editPost');
Route::post('/update-post/{id}', 'App\Http\Controllers\PostController@updatePost');
Route::get('/selected-post-deleted/{ids}', 'App\Http\Controllers\PostController@selectedPostDeleted');
