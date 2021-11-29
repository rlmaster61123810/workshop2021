<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', [HomeController::class, 'index']);


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/store', [App\Http\Controllers\PostController::class, 'store'])->name('store');

Route::get('/create', [App\Http\Controllers\PostController::class, 'create'])->name('create');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/edit/{id}', [App\Http\Controllers\PostController::class, 'edit'])->name('edit');
Route::post('/update', [App\Http\Controllers\PostController::class, 'update'])->name('update');
Route::get('/delete/{id}', [App\Http\Controllers\PostController::class, 'delete'])->name('delete');


Route::get('/delete', [App\Http\Controllers\HomeController::class, 'delete'])->name('delete');

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');


