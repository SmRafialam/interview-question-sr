<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;

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
    return redirect()->to('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware('auth')->group(function () {
    Route::resource('product-variant', 'VariantController');
    Route::resource('product', 'ProductController');
    Route::resource('blog', 'BlogController');
    Route::resource('blog-category', 'BlogCategoryController');
});

Route::group(['prefix'=>'/admin'],function(){
    // for product
        Route::group(['prefix'=>'/product'],function(){
            Route::get('/store','App\Http\Controllers\ProductController@store')->middleware(['auth'])->name('store');

            Route::get('/create','App\Http\Controllers\ProductController@create')->middleware(['auth'])->name('create');
    
            Route::get('/manage','App\Http\Controllers\ProductController@index')->middleware(['auth'])->name('manage');
    
            Route::get('/edit/{id}','App\Http\Controllers\ProductController@edit')->middleware(['auth'])->name('edit');
    
            Route::post('/update/{id}','App\Http\Controllers\ProductController@update')->middleware(['auth'])->name('update');
    
            Route::get('/delete/{id}','App\Http\Controllers\ProductController@destroy')->middleware(['auth'])->name('delete');

           // Route::get('/dropzone','App\Http\Controllers\ProductController@dropzone')->middleware(['auth'])->name('dropzone');

            Route::get('/dropzonestore','App\Http\Controllers\ProductController@dropzonestore')->middleware(['auth'])->name('dropzonestore');

        });
    });
    
    // Route::get('users', [UserController::class, 'index']);