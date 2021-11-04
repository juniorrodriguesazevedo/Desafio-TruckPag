<?php

use App\Http\Controllers\API\AddressController;
use App\Http\Controllers\API\CityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('cities', [CityController::class, 'index']);
Route::apiResource('address', AddressController::class);