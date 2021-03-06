<?php

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

Route::get("categoria", "App\Http\Controllers\categoriaControler@getCategoria");

Route::get("categoria/{id}", "App\Http\Controllers\categoriaControler@getCategoriaId");

Route::post("addCategoria", "App\Http\Controllers\categoriaControler@insertCategoria");

Route::put("updateCategoria/{id}", "App\Http\Controllers\categoriaControler@updateCategoria");

Route::delete("removeCategoria/{id}", "App\Http\Controllers\categoriaControler@deleteCategoria");