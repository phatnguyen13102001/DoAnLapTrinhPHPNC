@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container">
            <h1 style="color:red; text-align:center;font-weight:bold;">THÊM TÀI KHOẢN</h1>
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{route('taikhoan.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Họ Tên</label>
                            <span style="color:red;">*</span>
                            <input class="form-control" type="text" name="hoten" placeholder="Nhập Họ Tên" />
                            @if($errors->has('hoten'))
                            <div class="alert alert-danger" style="margin-top:10px;">
                                {{$errors->first('hoten')}}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <span style="color:red;">*</span>
                            <input class="form-control" type="text" name="email" placeholder="Nhập Email" />
                            @if($errors->has('email'))
                            <div class="alert alert-danger" style="margin-top:10px;">
                                {{$errors->first('email')}}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Mật Khẩu</label>
                            <span style="color:red;">*</span>
                            <input class="form-control" type="password" name="matkhau" placeholder="Nhập Mật Khẩu" />
                            @if($errors->has('matkhau'))
                            <div class="alert alert-danger" style="margin-top:10px;">
                                {{$errors->first('matkhau')}}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Số Điện Thoại</label>
                            <span style="color:red;">*</span>
                            <input class="form-control" type="text" name="sodienthoai" placeholder="Nhập Số Điện Thoại" />
                            @if($errors->has('sodienthoai'))
                            <div class="alert alert-danger" style="margin-top:10px;">
                                {{$errors->first('sodienthoai')}}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Avatar</label>
                            <span style="color:red;">*</span>
                            <input accept="*.jpg,*.png" type="file" id="ful_hinhanh" name="HINHANH" class="form-control" />
                            @if($errors->has('HINHANH'))
                            <div class="alert alert-danger" style="margin-top:10px;">
                                {{$errors->first('HINHANH')}}
                            </div>
                            @endif
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