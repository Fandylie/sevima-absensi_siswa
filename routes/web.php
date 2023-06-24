<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\adminController; 
use  App\Http\Controllers\siswaCRUD; 
use  App\Http\Controllers\absenControler; 

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
    return view('admin_dashboard');
});

Route::get('/absen', [absenControler::class, 'index']);
Route::post('/absen', [absenControler::class, 'absen']);


Route::get('/admin', [adminController::class, 'index']);
Route::resource('/admin/siswa', siswaCRUD::class);
Route::post('/rekap', [absenControler::class, 'rekap']);