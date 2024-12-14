<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NegaraController;
use App\Http\Controllers\ProvinsiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[DashboardController::class,'index']);
Route::get('/negara',[NegaraController::class,'index']);
Route::get('/provinsi',[ProvinsiController::class,'index']);
Route::post('/negara',[NegaraController::class,'store']);
Route::post('/provinsi',[ProvinsiController::class,'store']);
Route::get('/negara/create',[NegaraController::class,'create']);
Route::get('/provinsi/create',[ProvinsiController::class,'create']);
Route::get('/negara/{id}/edit',[NegaraController::class,'edit']);
Route::put('/negara/{id}',[NegaraController::class,'update']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
