<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ArtikelController;
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


Route::get('/admin', function () {
    return view('index');})->name('news.index');
Route::resource('/',PhotoController::class);
Route::resource('admin/news', NewsController::class);
Route::resource('/artikel', ArtikelController::class);