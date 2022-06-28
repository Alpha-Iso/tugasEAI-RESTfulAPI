<?php

use App\Http\Controllers\aston_martin_Controller;
use App\Http\Controllers\ferrari_Controller;
use App\Http\Controllers\porche_Controller;
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

Route::get('astonmartin', [aston_martin_Controller::class, 'index']);
Route::get('astonmartin/show/{id}', [aston_martin_Controller::class, 'show']);
Route::post('astonmartin/store', [aston_martin_Controller::class, 'store']);
Route::post('astonmartin/update/{id}', [aston_martin_Controller::class, 'update']);
Route::get('astonmartin/destroy/{id}', [aston_martin_Controller::class, 'destroy']);

Route::get('ferrari', [ferrari_Controller::class, 'index']);
Route::get('ferrari/show/{id}', [ferrari_Controller::class, 'show']);
Route::post('ferrari/store', [ferrari_Controller::class, 'store']);
Route::post('ferrari/update/{id}', [ferrari_Controller::class, 'update']);
Route::get('ferrari/destroy/{id}', [ferrari_Controller::class, 'destroy']);

Route::get('porche', [porche_Controller::class, 'index']);
Route::get('porche/show/{id}', [porche_Controller::class, 'show']);
Route::post('porche/store', [porche_Controller::class, 'store']);
Route::post('porche/update/{id}', [porche_Controller::class, 'update']);
Route::get('porche/destroy/{id}', [porche_Controller::class, 'destroy']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
