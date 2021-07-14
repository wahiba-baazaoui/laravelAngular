<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApiController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/create',[ApiController::class ,'createapi']);

Route::get('/api',[ApiController::class ,'api']);

Route::get('/index',[ApiController::class ,'index']);

Route::get('/show/{id}',[ApiController::class ,'show']);
Route::get('/find/{id?}',[ApiController::class,'findoneall']);


Route::put('update',[ApiController::class,'update']);

Route::get('search/{title}',[ApiController::class,'search']);


Route::delete('delete/{id}',[ApiController::class,'delete']);


Route::post('validation',[ApiController::class,'testdata']);

