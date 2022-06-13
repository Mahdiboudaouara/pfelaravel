<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('Reclamation','App\Http\Controllers\ReclamationController');
Route::resource('Personnel','App\Http\Controllers\PersonnelController');
Route::resource('Client','App\Http\Controllers\ClientController');
Route::resource('Departement','App\Http\Controllers\DepartementController');
Route::resource('Role','App\Http\Controllers\RoleController');
