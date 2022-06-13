<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/Reclamation', function (Request $request) {
    return $request->Reclamation();
});
Route::get('/personnel', [App\Http\Controllers\PersonnelController::class, 'index']);
Route::post('/personnel', [App\Http\Controllers\PersonnelController::class, 'store']);
Route::get('/reclamation', [App\Http\Controllers\ReclamationController::class, 'index']);
Route::post('/reclamation', [App\Http\Controllers\ReclamationController::class, 'store']);
