@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper" >
<section class="content-header">
<div class="container">
<h1 style="color:red; text-align:center;font-weight:bold;">CẬP NHẬT TÀI KHOẢN</h1>
    <div class="row">
        <div class="col-md-12">
        <form method="post" action="{{route('taikhoan.update',['taikhoan'=>$taikhoan])}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label class="control-label">Họ Tên</label>
                <input class="form-control" type="text" name="hoten" value="{{$taikhoan->HOTEN}}" placeholder="Nhập Họ Tên"/>
            </div>
            <div class="form-group">
                <label class="control-label">Email</label>
                <input class="form-control" type="text" name="email" value="{{$taikhoan->email}}" placeholder="Nhập Email"/>
            </div>
            <div class="form-group">
                <label class="control-label">Mật Khẩu</label>
                <input class="form-control" type="password" name="matkhau" value="{{$taikhoan->password}}" placeholder="Nhập Mật Khẩu"/>
            </div>
            <div class="form-group">
                <label class="control-label">Số Điện Thoại</label>
                <input class="form-control" type="text" name="sodienthoai" value="{{$taikhoan->SDT}}" placeholder="Nhập Số Điện Thoại"/>
            </div>
            <div class="form-group">
                <label class="control-label">Avatar</label>
                <input accept="*.jpg,*.png" type="file" id="ful_hinhanh" name="HINHANH" class="form-control" />
                <img style="width:100px; max-height:100px; object-fit:contain" src="{{$taikhoan->HINHANH}}">
            </div>
            <div class="form-group">
                <label class="form-label">Phân Quyền</label>
                <select class="form-select" name="phanquyen">
                    <option value=1>Admin</option>
                    <option value=2>Người Dùng</option>
                </select>
            </div>
            <div class="form-group" style="text-align:center;">
                <input type="submit" value="Cập Nhập Tài Khoản" class="btn btn-dark" />
            </div>
        </form>
    </div>
    </div>
</div>
</section>
</div>
@stop