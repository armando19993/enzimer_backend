<?php

use App\Http\Controllers\AreasController;
use App\Http\Controllers\PlanesController;
use App\Http\Controllers\UniversidadController;
use App\Models\Planes;
use App\Models\Universidad;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {
    Route::get('universidades', [UniversidadController::class, 'index_api']);
    Route::get('areas_universidad/{universidad}', [AreasController::class, 'index_api']);
    Route::get('planes', [PlanesController::class, 'index_api']);

    Route::post('registro', [UserController::class, 'registro']);
});
