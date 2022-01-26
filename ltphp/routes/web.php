<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaiKhoanController;
use App\Http\Controllers\MienController;
use App\Http\Controllers\TinhthanhController;

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

Route::get('/', [TaiKhoanController::class,'index']);

Route::get('mien', [MienController::class,'index']);

Route::get('yeuthich', function () {
  return view('home.yeuthich');
});
Route::get('/tinhthanh', [TinhthanhController::class,'index']);
Route::get('luotxem', function () {
  return view('home.luotxem');
});
Route::get('luotthich', function () {
  return view('home.luotthich');
});
Route::get('diadanh', function () {
  return view('home.diadanh');
});
Route::get('danhmuc', function () {
  return view('home.danhmuc');
});
Route::get('binhluan', function () {
  return view('home.binhluan');
});
Route::get('baiviet', function () {
  return view('home.baiviet');
});
Route::get('login', function () {
  return view('login.login');
});
Route::get('screenthemdiadanh', function () {
  return view('home.screendiadanh.screenthemdiadanh');
});
Route::get('screensuadiadanh', function () {
  return view('home.screendiadanh.screensuadiadanh');
});
Route::get('screenthemdanhmuc', function () {
  return view('home.screendanhmuc.screenthemdanhmuc');
});
Route::get('screensuadanhmuc', function () {
  return view('home.screendanhmuc.screensuadanhmuc');
});
Route::get('screenthemtinhthanh', function () {
  return view('home.screentinhthanh.screenthemtinhthanh');
});
Route::get('screensuatinhthanh', function () {
  return view('home.screentinhthanh.screensuatinhthanh');
});
Route::get('screenthemmien', function () {
  return view('home.screenmien.screenthemmien');
});
Route::get('screensuamien', function () {
  return view('home.screenmien.screensuamien');
});