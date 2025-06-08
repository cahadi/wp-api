<?php

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


Route::get('/incomes', [\App\Http\Controllers\IncomeControllers\GetController::class, 'getdata']);
Route::get('/orders', [\App\Http\Controllers\OrderControllers\GetController::class, 'getdata']);
Route::get('/sales', [\App\Http\Controllers\SaleControllers\GetController::class, 'getdata']);
Route::get('/stocks', [\App\Http\Controllers\StockControllers\GetController::class, 'getdata']);
