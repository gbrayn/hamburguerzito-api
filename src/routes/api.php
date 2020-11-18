<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoryController;

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

Route::get('/products', [ProductsController::class, 'index']);
Route::post('/products', [ProductsController::class, 'store']);
Route::put('/products/{id}', [ProductsController::class, 'update']);
Route::get('/products/{id}', [ProductsController::class, 'getProduct']);
Route::delete('/products/{id}', [ProductsController::class, 'delete']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::post('/categories', [CategoryController::class, 'store']);
Route::put('/categories/{id}', [CategoryController::class, 'update']);
Route::get('/categories/{id}', [CategoryController::class, 'getCategory']);
Route::delete('/categories/{id}', [CategoryController::class, 'delete']);
