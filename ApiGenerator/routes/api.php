<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\getInfoController;
use App\Http\Controllers\tablesController;
use App\Http\Controllers\routinesController;
use App\Http\Controllers\viewController;
use App\Http\Controllers\AuthController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});





//API LOGIN AND REGISTER USER FOR TOKEN
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

// API GET ROUTES [tables,views,routines]

Route::get('/tables',[tablesController::class, 'index']);
Route::get('/routines',[routinesController::class, 'index']);
Route::get('/views',[viewController::class, 'index']);
Route::get('/filter',[getInfoController::class, 'filterData']);
Route::get('/view',[getInfoController::class, 'returnData']);