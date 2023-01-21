<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

Route::get('/',[IndexController::class,'index']);
Route::get('/CV',[IndexController::class,'cv']);
Route::get('/Contact',[IndexController::class,'contact']);
Route::get('/HireMe',[IndexController::class,'hireme']);
Route::get('/AllProjects',[IndexController::class,'allproject']);