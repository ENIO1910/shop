<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index']);

Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products.index')->middleware('auth');
Route::get('/products/create', [App\Http\Controllers\ProductController::class, 'create'])->name('products.create')->middleware('auth');
Route::get('/products/{product}', [App\Http\Controllers\ProductController::class, 'show'])->name('products.show')->middleware('auth');
Route::post('/products', [App\Http\Controllers\ProductController::class, 'store'])->name('products.store')->middleware('auth');
Route::get('/products/edit/{product}', [App\Http\Controllers\ProductController::class, 'edit'])->name('products.edit')->middleware('auth');
Route::post('/products/{product}', [App\Http\Controllers\ProductController::class, 'update'])->name('products.update')->middleware('auth');
Route::delete('/products/{product}/delete', [App\Http\Controllers\ProductController::class, 'destroy'])->name('products.destroy')->middleware('auth');

Route::get('/users/list', [App\Http\Controllers\UserController::class, 'index'])->middleware('auth');
Route::delete('/users/{user}/delete', [App\Http\Controllers\UserController::class, 'destroy'])->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
