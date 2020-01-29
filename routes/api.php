<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::any('arnulfo', 'Exercise1');
Route::any('arnulfo', 'Exercise2');
Route::any('arnulfo', 'Exercise3@index');
Route::any('arnulfo/store', 'Exercise3@store');
Route::any('arnulfo-final', 'ExerciseFinal@login');
Route::any('arnulfo-final/store', 'ExerciseFinal@store');
