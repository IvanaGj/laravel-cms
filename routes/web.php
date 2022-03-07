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


Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function() {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::post('/create-status',  [App\Http\Controllers\HomeController::class, 'createStatus'])->name('create.status');
    Route::post('/status/{status}/like',  [App\Http\Controllers\HomeController::class, 'likeStatus'])->name('like.status');
    Route::post('/status/{status}/unlike',  [App\Http\Controllers\HomeController::class, 'unlike'])->name('unlike.status');


    Route::resource('/users', App\Http\Controllers\UserController::class);
    Route::get('/users/{user}/delete', [App\Http\Controllers\UserController::class, 'destroy']);
    Route::resource('/categories', App\Http\Controllers\CategoriesController::class);
    Route::get('/categories/{id}/delete', [App\Http\Controllers\CategoriesController::class, 'destroy'])->name('categories.delete');


    Route::get('/settings/', [App\Http\Controllers\SettingsController::class, 'index'])->name('settings.index');
    Route::get('/settings/create', [App\Http\Controllers\SettingsController::class, 'create'])->name('settings.create');
    Route::post('/settings/', [App\Http\Controllers\SettingsController::class, 'store'])->name('settings.store');
    Route::get('/settings/edit/{id}', [App\Http\Controllers\SettingsController::class, 'edit'])->name('settings.edit');
    Route::put('/settings/edit/{id}', [App\Http\Controllers\SettingsController::class, 'update'])->name('settings.update');


    Route::get('/products/', [App\Http\Controllers\ProductsController::class, 'index'])->name('products.index');
    Route::get('/products/create', [App\Http\Controllers\ProductsController::class, 'create'])->name('products.create');
    Route::post('/products/', [App\Http\Controllers\ProductsController::class, 'store'])->name('products.store');
    Route::get('/products/{id}/edit', [App\Http\Controllers\ProductsController::class, 'edit'])->name('products.edit');


});

