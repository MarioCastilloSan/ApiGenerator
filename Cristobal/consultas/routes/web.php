<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MetadatosController;

Route::get('/', function () {
    return view('welcome');
});


 /*Route::resource('metadatos', MetadatosController::class);*/ 


Route::get('/metadatos/index', [MetadatosController::class, 'index']);

Route::get('/metadatos/view', [MetadatosController::class, 'show']);

Route::get('/metadatos/tables', [MetadatosController::class, 'show1']);

Route::get('/metadatos/proc', [MetadatosController::class, 'show2']);




