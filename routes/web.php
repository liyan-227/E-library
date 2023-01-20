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

Route::get('artikel/{id}/{slug}', [ArtikelController::class, 'show'])->name('artikel');
Route::get('/admin', function () {
    return view('index');
})->name('news.index');


Route::get('/',[PhotoController::class ,'index'])->name('index');

Route::resource('admin/news', NewsController::class);

//Route::resource('artikel/{id}', ArtikelController::class);

Route::prefix('/')->group(function () {
    
});
