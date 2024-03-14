<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/',[HomeController::class,'index'] );

Route::get('/admin/index', [AdminController::class, 'index']);
Route::get('/admin/create', [AdminController::class, 'create']);
Route::post('/admin/create', [AdminController::class, 'store']);
Route::get('/admin/edit/{project}', [AdminController::class, 'edit']);
Route::patch('/admin/{project}', [AdminController::class, 'update']);
Route::delete('/admin/{project}', [AdminController::class, 'destroy']);