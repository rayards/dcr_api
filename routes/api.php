<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilingAreaController;
use App\Http\Controllers\CorrespondenceController;

Route::get('/user', function (Request $request) {
    return $request->user();
});
// })->middleware('auth:sanctum');

Route::get('/', function () {
    return 'Hello World!';
});

//Correspondence Routes
Route::apiResource('/correspondence', CorrespondenceController::class);
Route::get('/correspondence/{correspondence}/flag', [CorrespondenceController::class, 'flag']);

//Filing Area Routes
Route::apiResource('/filing-area', FilingAreaController::class);
