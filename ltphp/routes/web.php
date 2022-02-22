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
use App\Http\Controllers\SliderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SliderController;
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

Route::middleware('auth')->group(function () {
  Route::resource('/taikhoan', TaikhoanController::class);
  Route::resource('/tinhthanh', TinhthanhController::class);
  Route::resource('/mien', MienController::class);
  Route::resource('/danhmuc', DanhmucController::class);
  Route::resource('/baiviet', BaivietController::class);
  Route::resource('/diadanh', DiadanhController::class);
  Route::resource('/yeuthich', YeuthichController::class);
  Route::resource('/binhluan', BinhluanController::class);
  Route::resource('/luotxem', LuotxemController::class);
  Route::resource('/luotthich', LuotthichController::class);
  Route::resource('/slider', SliderController::class);
  Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'authenticate'])->name('login');

