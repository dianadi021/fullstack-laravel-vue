<?php

use App\Http\Controllers\Sections\SearchController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')->group(function () {
    Route::prefix('search')->group(function () {
        Route::get('/regions', [SearchController::class, 'getRegions']);
    });
});
