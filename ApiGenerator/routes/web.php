<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\getInfoController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[getInfoController::class, 'getInfo']);
Route::get('/filter',[getInfoController::class, 'filterData']);


// PHP INFO PAGE --- Mario esto fue necesario para verificar si los driver de sqlsrv estaban instalados, cosa que no, tuve que hacerlo manual
Route::get('phpinfo', function () {
    phpinfo();
})->name('phpmyinfo');