<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RajaOngkirApi;
use App\Http\Controllers\ProvincesApi;
use App\Http\Controllers\CitiesApi;
use App\Http\Controllers\UserAuth;

Route::post('/register', [UserAuth::class, 'register']);
Route::post('/login', [UserAuth::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(RajaOngkirApi::class)->group(function () {
    Route::get('/provinces', 'getProvinces');
    Route::get('/cities', 'getCities');
});

Route::controller(ProvincesApi::class)->group(function () {
    Route::get('/search/provinces', 'show');
});

Route::controller(CitiesApi::class)->group(function () {
    Route::get('/search/cities', 'show');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [UserAuth::class, 'logout']);
    Route::get('/swap/provinces', [ProvincesApi::class, 'swap']);
    Route::get('/swap/cities', [CitiesApi::class, 'swap']);
});
