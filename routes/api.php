<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UnityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routesadmin
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/')->name("admin.")->group(function () {
    Route::resource('stores', StoreController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('unities', UnityController::class);
    Route::resource('items', ItemController::class);
});
