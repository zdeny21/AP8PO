<?php

use App\Http\Controllers\categoryController;
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
