<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BarangController;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\MutasiController;
use App\Http\Controllers\Api\SupplierController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('user', UserController::class);
    Route::apiResource('kategori', KategoriController::class);
    Route::apiResource('supplier', SupplierController::class);
    Route::apiResource('barang', BarangController::class);
    Route::apiResource('mutasi', MutasiController::class);
    Route::get('history-mutasi-user/{id}', [MutasiController::class, 'historyMutasiUser']);
    Route::get('history-mutasi-barang/{id}', [MutasiController::class, 'historyMutasiBarang']);

    Route::post('/logout', [AuthController::class, 'logout']);
});
