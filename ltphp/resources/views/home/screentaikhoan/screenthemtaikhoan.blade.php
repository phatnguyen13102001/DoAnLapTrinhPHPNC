@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper" >
<section class="content-header">
<div class="container">
<h1 style="color:red; text-align:center;font-weight:bold;">THÊM TÀI KHOẢN</h1>
    <div class="row">
        <div class="col-md-12">
        <form method="post" action="{{route('taikhoan.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="control-label">Họ Tên</label>
                <input class="form-control" type="text" name="hoten" placeholder="Nhập Họ Tên" required/>
            </div>
            <div class="form-group">
                <label class="control-label">Email</label>
                <input class="form-control" type="text" name="email" placeholder="Nhập Email" required/>
                <span class="alert text-danger">
                @if($errors->has('email'))
                {{$errors->first('email')}}
                </span>
                @endif
            </div>
            <div class="form-group">
                <label class="control-label">Mật Khẩu</label>
                <input class="form-control" type="password" name="matkhau" placeholder="Nhập Mật Khẩu" required/>
            </div>
            <div class="form-group">
                <label class="control-label">Số Điện Thoại</label>
                <input class="form-control" type="text" name="sodienthoai" placeholder="Nhập Số Điện Thoại" required/>
            </div>
            <div class="form-group">
                <label class="control-label">Avatar</label>
                <input accept="*.jpg,*.png" type="file" id="ful_hinhanh" name="HINHANH" class="form-control" />
            </div>
            <div class="form-group">
                <label class="form-label">Phân Quyền</label>
                <select class="form-select" name="phanquyen">
                    <option value=1>Admin</option>
                    <option value=2>Người Dùng</option>
                </select>
            </div>
            <div class="form-group" style="text-align:center;">
                <input type="submit" value="Thêm Tài Khoản" class="btn btn-dark" />
            </div>
        </form>
    </div>
    </div>
</div>
</section>
</div>
@stop