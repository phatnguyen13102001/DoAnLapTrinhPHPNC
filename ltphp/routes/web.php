<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaiKhoanController;
use App\Http\Controllers\MienController;
use App\Http\Controllers\TinhthanhController;
use App\Http\Controllers\DanhmucController;
use App\Http\Controllers\DiadanhController;
use App\Http\Controllers\BaivietController;
use App\Http\Controllers\BinhluanController;
use App\Http\Controllers\LuotthichController;
use App\Http\Controllers\LuotxemController;
use App\Http\Controllers\YeuthichController;
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

Route::resource('/taikhoan', TaikhoanController::class);
Route::resource('/tinhthanh', TinhthanhController::class);
Route::resource('/mien', MienController::class);
Route::resource('/danhmuc', DanhmucController::class);
Route::resource('/baiviet', BaivietController::class);

Route::get('diadanh', [DiadanhController::class, 'index']);
Route::get('binhluan', [BinhluanController::class, 'index']);
Route::get('luotthich', [LuotthichController::class, 'index']);
Route::get('luotxem', [LuotxemController::class, 'index']);
Route::get('yeuthich', [YeuthichController::class, 'index']);
Route::get('login', function () {
  return view('login.login');
});
Route::get('screenthemdiadanh', function () {
  return view('home.screendiadanh.screenthemdiadanh');
});
Route::get('screensuadiadanh', function () {
  return view('home.screendiadanh.screensuadiadanh');
});
