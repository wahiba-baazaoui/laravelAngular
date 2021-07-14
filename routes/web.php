<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CvController;

use App\Http\Controllers\UserController ;
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

Route::get('/boot', function () {
    return view('lyouts.index');
});

Route::get('/www', function () {
    return view('.www');
});




Route::get('cvs',  [CvController::class, 'index']);
Route::get('cvs/create',  [CvController::class, 'create']);
Route::post('cvs',  [CvController::class, 'store']);
Route::get('cvs/{id}/edit',  [CvController::class, 'edit']);
Route::put('cvs/{id}',  [CvController::class, 'update']);
Route::delete('cvs/{id}',  [CvController::class, 'destroy']);



Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





Route::get('/phone',  [UserController::class, 'insert']);

Route::get('/get/{id}',  [UserController::class, 'getuserphone']);


Route::get('/addp',  [UserController::class, 'addpost']);

Route::get('/addc/{id}',  [UserController::class, 'addcomment']);


