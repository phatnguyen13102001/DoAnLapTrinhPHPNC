<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\MienController;
use App\Http\Controllers\Api\TinhThanhController;
use App\Http\Controllers\Api\DiaDanhController;
use App\Http\Controllers\Api\DanhMucController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\BaiVietController;
use App\Http\Controllers\Api\YeuThichController;
use App\Http\Controllers\Api\BinhLuanController;
use App\Http\Controllers\Api\luotXemController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Api Đăng Ký Đăng Nhập
Route::post('/dangnhap', [AuthController::class, 'login']);
Route::post('/dangky', [AuthController::class, 'register']);

//Api Miền
Route::get('/vungmien', [MienController::class, 'index']);

//Api Tỉnh Thành
Route::get('/tinhthanh/{id}', [TinhThanhController::class, 'show']);

//Api Địa Danh Theo ID Địa Danh
Route::get('/chitietdiadanh/{id}', [DiaDanhController::class, 'ShowSiteByIDSite']);

//Api Địa Danh Theo Tỉnh Thành
Route::get('/diadanhtheotinh/{id}', [DiaDanhController::class, 'ShowSiteByProvince']);

//Api Địa Danh Theo Danh Mục
Route::get('/diadanhtheodanhmuc/{id}', [DiaDanhController::class, 'ShowSiteByCategory']);

//Api Danh Mục
Route::get('/danhmuc', [DanhMucController::class, 'index']);

//Api User
Route::get('/user/{email}', [UserController::class, 'show']);

//Api Update User
Route::post('/userupdate/{email}', [UserController::class, 'update']);

//Api Update Avatar User
Route::post('/upload/{email}', [UserController::class, 'upload']);

//Api Thêm Bài Viết
Route::post('/thembaiviet', [BaiVietController::class, 'InsertPost']);

//Api Bài Viết Theo Địa Danh
Route::get('/baiviettheodiadanh/{id}', [BaiVietController::class, 'ShowPostByIDSite']);

//Api Bài Viết Theo Người Dùng
Route::get('/baiviettheonguoidung/{id}', [BaiVietController::class, 'ShowPostByIDUser']);

//Api Bài Viết Theo ID Bài Viết
Route::get('/chitietbaiviet/{id}', [BaiVietController::class, 'ShowPostByIDPost']);

//Api Tất Cả Bài Viết
Route::get('/tatcabaiviet', [BaiVietController::class, 'ShowAllPost']);

//Api Xử Lí Yêu Thích
Route::get('/xuliyeuthich/{id1}/{id2}', [YeuThichController::class, 'favorite_handle']);

//Api Yêu Thích Theo Địa Danh
Route::get('/yeuthichtheodiadanh/{id}', [YeuThichController::class, 'ShowFavoriteBySite']);

//Api Yêu Thích Theo User
Route::get('/yeuthichtheouser/{id}', [YeuThichController::class, 'ShowFavoriteByIDUser']);

//Api Trạng Thái Yêu Thích
Route::get('/trangthaiyeuthich/{id1}/{id2}', [YeuThichController::class, 'ShowStatusFavorite']);

//Api Địa Danh Nổi Bật
Route::get('/diadanhnoibat', [DiaDanhController::class, 'ShowHotSite']);

//Api Bình Luận Theo Bài Viết
Route::get('/binhluan/{id}', [BinhLuanController::class, 'ShowCommentByIDPost']);

//Api Thêm Bình Luận
Route::post('/thembinhluan', [BinhLuanController::class, 'InsertComment']);

//Api Them Luot Xem
Route::post('/themluotxem', [LuotXemController::class, 'InsertView']);

//Api Hien Thi Luot Xem
Route::get('/hienthiluotxem/{id}', [BaiVietController::class, 'ShowView']);
