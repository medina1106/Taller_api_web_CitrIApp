<?php

use App\Http\Controllers\AccessUserController;
use App\Http\Controllers\CategorysController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductsController;
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


Route::post('/auth/register',[AccessUserController::class, 'register']);
    


Route::post('/auth/login',[AccessUserController::class, 'login']);

Route::post('/auth/logout',[AccessUserController::class, 'logout'])->middleware('auth:sanctum');

Route::apiResource('/category', CategorysController::class);

Route::apiResource('/product', ProductController::class);


// ruta carrito de compras //
Route::apiResource('/order',OrderController::class);