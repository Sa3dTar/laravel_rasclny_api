<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;


/*
|--------------------------------------------------------------------------
| API Routes
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

Route::get('/categories',[CategoriesController::class,'index']);
Route::get('/categories/{id}',[CategoriesController::class,'show']);
Route::get('/categories/products/{catid}',[ProductsController::class, "index"]);
Route::get('/categories/products/{catid}/{product_id}',[ProductsController::class, "show"]);
Route::put('profile/{id}',[UserController::class,'update']);
Route::get('profile/{id}',[UserController::class,'show']);
