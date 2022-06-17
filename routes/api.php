<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RajaOngkirApi;
use App\Http\Controllers\ProvincesApi;
use App\Http\Controllers\CitiesApi;

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

Route::controller(RajaOngkirApi::class)->group(function () {
    Route::get('/provinces', 'getProvinces');
    Route::get('/cities', 'getCities');
});

Route::controller(ProvincesApi::class)->group(function () {
    Route::get('/search/provinces', 'show');
    Route::get('/swap/provinces', 'swap');
});

Route::controller(CitiesApi::class)->group(function () {
    Route::get('/search/cities', 'show');
    Route::get('/swap/cities', 'swap');
});