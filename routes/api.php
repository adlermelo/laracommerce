<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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


Route::get('/produtos', function () {
    $response = Http::get('https://dummyjson.com/products');
    return $response->json();
});

Route::get('/produtos/{id}', function ($id) {
    $response = Http::get('https://dummyjson.com/products/'.$id);
    return $response->json();
});
