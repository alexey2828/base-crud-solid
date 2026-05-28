<?php

use App\Http\Controllers\Api\BsuController;
use App\Http\Controllers\Api\CarController;
use App\Http\Controllers\Api\CompController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\DriverController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\OrderStateController;
use App\Http\Controllers\Api\DispatcherController;
use App\Http\Controllers\Api\MixtureController;
use App\Http\Controllers\Api\ResourceController;
use App\Http\Controllers\Api\ClassrecipeController;
use App\Http\Controllers\Api\ClasscomponentController;
use App\Http\Controllers\Api\CompmainController;
use App\Http\Controllers\Api\ConsumptioncomponentweightController;
use App\Http\Controllers\Api\CurrentcomponentweightController;
use App\Http\Controllers\Api\MainstateController;
use Illuminate\Support\Facades\Route;

Route::apiResource('comp', CompController::class);
Route::apiResource('dispatcher', DispatcherController::class);
Route::apiResource('customer', CustomerController::class);
Route::apiResource('driver', DriverController::class);
Route::apiResource('order', OrderController::class);
Route::apiResource('mixture', MixtureController::class);
Route::apiResource('order-state', OrderStateController::class);
Route::apiResource('class-recipe', ClassrecipeController::class);
Route::apiResource('class-component', ClasscomponentController::class);
Route::apiResource('comp-main', CompmainController::class);
Route::apiResource('consumption-component-weight', ConsumptioncomponentweightController::class);
Route::apiResource('current-component-weight', CurrentcomponentweightController::class);
Route::apiResource('main-state', MainstateController::class);

Route::middleware('register.resource')->group(function () {
    Route::get('/{resource}', [ResourceController::class, 'index']);
    Route::get('/{resource}/{id}', [ResourceController::class, 'show'])->whereNumber('id');
    Route::post('/{resource}', [ResourceController::class, 'store']);
    Route::put('/{resource}/{id}', [ResourceController::class, 'update'])->whereNumber('id');
    Route::delete('/{resource}/{id}', [ResourceController::class, 'destroy'])->whereNumber('id');
});

