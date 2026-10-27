<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\PagosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::post('login', [AuthController::class, 'signin']);
Route::post('register', [AuthController::class, 'signup']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('cuotas/{cedula?}', [PagosController::class, 'index']);
    Route::post('pagocuota', [PagosController::class, 'pagoCuota']);
    Route::post('reversa', [PagosController::class, 'reversaCuota']);
});
