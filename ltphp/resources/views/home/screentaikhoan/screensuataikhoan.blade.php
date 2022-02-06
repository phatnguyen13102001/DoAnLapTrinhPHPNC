@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper">
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
                            <span style="color:red;">*</span>
                            <input class="form-control" type="text" name="hoten" value="{{$taikhoan->HOTEN}}" placeholder="Nhập Họ Tên" />
                            @if($errors->has('hoten'))
                            <div class="alert alert-danger" style="margin-top:10px;">
                                {{$errors->first('hoten')}}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input class="form-control" type="text" name="email" value="{{$taikhoan->email}}" placeholder="Nhập Email" disabled />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Mật Khẩu</label>
                            <span style="color:red;">*</span>
                            <input class="form-control" type="password" name="matkhau" value="{{$taikhoan->password}}" placeholder="Nhập Mật Khẩu" />
                            @if($errors->has('matkhau'))
                            <div class="alert alert-danger" style="margin-top:10px;">
                                {{$errors->first('matkhau')}}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Số Điện Thoại</label>
                            <span style="color:red;">*</span>
                            <input class="form-control" type="text" name="sodienthoai" value="{{$taikhoan->SDT}}" placeholder="Nhập Số Điện Thoại" />
                            @if($errors->has('sodienthoai'))
                            <div class="alert alert-danger" style="margin-top:10px;">
                                {{$errors->first('sodienthoai')}}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Avatar</label>
                            <input accept="*.jpg,*.png" type="file" id="ful_hinhanh" name="HINHANH" class="form-control" />
                            @if($errors->has('HINHANH'))
                            <div class="alert alert-danger" style="margin-top:10px;">
                                {{$errors->first('HINHANH')}}
                            </div>
                            @endif
                            <img style="width:200px; max-height:200px; object-fit:contain; margin-top:20px;" src="{{$taikhoan->HINHANH}}">
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