<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilingAreaController;
use App\Http\Controllers\CorrespondenceController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/', function () {
    return 'Hello World!';
});

// Auth Routes
Route::post('/register', [Auth::class, 'register']);
Route::post('/login', [Auth::class, 'login']);
Route::post('/logout', [Auth::class, 'logout'])->middleware('auth:sanctum');

//Correspondence Routes
Route::apiResource('/correspondence', CorrespondenceController::class);
Route::apiResource('/filing-area', FilingAreaController::class);
