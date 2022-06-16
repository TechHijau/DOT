<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RajaOngkirApi;
use App\Http\Controllers\ProvinsiApi;
use App\Http\Controllers\KotaApi;

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
    Route::get('/provinsi', 'getProvinsi');
    Route::get('/kota', 'getKota');
    Route::get('/addProvinsi', 'addProvinsi');
});

Route::controller(ProvinsiApi::class)->group(function () {
    Route::get('/search/provinces', 'show');
});

Route::controller(KotaApi::class)->group(function () {
    Route::get('/search/kota', 'show');
});