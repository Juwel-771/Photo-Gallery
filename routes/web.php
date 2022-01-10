<?php

use App\Http\Controllers\AlbumController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\File;

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

// Route::get('/', [AlbumController::class,'index']);
Route::get('/album/index',[AlbumController::class,'index']);
Route::get('/album/create',[AlbumController::class,'create']);
Route::post('/album/store',[AlbumController::class,'store']);
Route::get('/album/{id}',[AlbumController::class,'show']);
