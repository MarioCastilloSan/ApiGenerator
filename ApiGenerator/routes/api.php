<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tablesController;
use App\Http\Controllers\routinesController;
use App\Http\Controllers\viewController;
// use App\Http\Controllers\AuthController;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});





//API LOGIN AND REGISTER USER FOR TOKEN
Route::post('login', 'AuthController@login');
Route::post('register', 'AuthController@register');


// API GET ROUTES [tables,views,routines]

Route::resource('tables', 'tablesController',
                ['only' => ['index']]);

Route::resource('routines', 'routinesController',
                ['only' => ['index']]);

Route::resource('views', 'viewController',
                ['only' => ['index']]);