<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsApiController;
use App\Http\Controllers\ArtikelController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/news', [NewsApiController::class, 'index']);
Route::get('/news/{id}', [NewsApiController::class, 'show']);
Route::post('/news', [NewsApiController::class, 'store']);
Route::put('/news/{id}', [NewsApiController::class, 'update']);
Route::delete('/news/{id}', [NewsApiController::class, 'destroy']);
Route::get('/artikel/{id}', [NewsApiController::class, 'show']);
