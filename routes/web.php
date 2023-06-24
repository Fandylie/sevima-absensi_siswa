<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\adminController; 
use  App\Http\Controllers\absenControler; 
use  App\Http\Controllers\sesionControler; 
use  App\Http\Controllers\chataiControler; 
use  App\Http\Controllers\siswaCRUD; 
use  App\Http\Controllers\kelasCRUD; 
use  App\Http\Controllers\adminCRUD; 

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
    return redirect('absen');;
});

Route::get('/absen', [absenControler::class, 'index']);
Route::post('/absen', [absenControler::class, 'absen']);

Route::get('/bot', [chataiControler::class, 'index']);

Route::get('/admin/login', [sesionControler::class, 'index'])->middleware('isTamu');
Route::post('/admin/login', [sesionControler::class, 'ceklogin']);
Route::get('/admin/logout', [sesionControler::class, 'logout']);

Route::get('/admin', [adminController::class, 'index'])->middleware('isLogin');
Route::get('/admin/rekap', [adminController::class, 'rekap'])->middleware('isLogin');
Route::resource('/admin/siswa', siswaCRUD::class)->middleware('isLogin');
Route::resource('/admin/admin', adminCRUD::class)->middleware('isLogin');
Route::resource('/admin/kelas', kelasCRUD::class)->middleware('isLogin');