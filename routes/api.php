<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FilingAreaController;
use App\Http\Controllers\CorrespondenceController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/', function () {
    return 'Hello World!';
});

// Auth Routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// Correspondence Routes
Route::apiResource('/correspondence', CorrespondenceController::class)->middleware('auth:sanctum');
Route::get('/flagged', [CorrespondenceController::class, 'flagged'])->middleware('auth:sanctum')->name('correspondence.flagged');

// Filing Area Routes
Route::apiResource('/filing-area', FilingAreaController::class)->middleware('auth:sanctum');
