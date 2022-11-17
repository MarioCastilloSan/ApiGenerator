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
Route::group([ 'middleware' => 'api', 'prefix' => 'auth' ], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});


Route::post('register', 'AuthController@register');

/**
* @API: GET ROUTES [tables,views,routines]
**/
Route::group(['middleware' => ['auth:api'], 'prefix' => 'v1'], function(){
    Route::get('tables', 'tablesController@index');
    Route::get('views', 'viewController@index');
    Route::get('routines', 'routinesController@index');
});

