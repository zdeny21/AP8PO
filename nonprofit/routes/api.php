<?php

use App\Http\Controllers\articleController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\userController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Categories
Route::get('/categories',[categoryController::class,'index']);
Route::prefix('/category')->group( function () {
    Route::get('/{id}', [categoryController::class,'show']);
    Route::post('/store', [categoryController::class,'store']);
    Route::put('/{id}', [categoryController::class,'update']);
    Route::delete('/{id}', [categoryController::class,'destroy']);
});

//Users
Route::get('/users',[userController::class,'index']);
Route::prefix('/user')->group( function () {
    Route::get('/{id}', [userController::class,'show']);
    Route::post('/store', [userController::class,'store']);
    Route::put('/{id}', [userController::class,'update']);
    Route::delete('/{id}', [userController::class,'destroy']);
});

//Articles
Route::get('/articles',[articleController::class,'index']);
Route::prefix('/article')->group( function () {
    Route::get('/{id}', [articleController::class,'show']);
    Route::post('/store', [articleController::class,'store']);
    Route::put('/{id}', [articleController::class,'update']);
    Route::delete('/{id}', [articleController::class,'destroy']);
});
