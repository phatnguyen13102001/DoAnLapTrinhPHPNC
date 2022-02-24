@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container">
            <h1 style="color:red; text-align:center;font-weight:bold;">CẬP NHẬT NƠI LƯU TRÚ</h1>
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{route('luutru.update',['luutru'=>$luutru])}}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label class="form-label">Địa Danh</label>
                            <select name="id_diadanh">
                                @foreach($lstdiadanh as $diadanh)
                                <option value="{{$diadanh->id}}">{{$diadanh->TENDIADANH}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Tên Khách Sạn</label>
                            <span style="color:red;">*</span>
                            <input class="form-control" type="text" name="tenkhachsan" value="{{$luutru->TENKHACHSAN}}" placeholder="Nhập tên khách sạn" />
                            @if($errors->has('tenkhachsan'))
                            <div class="alert alert-danger" style="margin-top:10px;">
                                {{$errors->first('tenkhachsan')}}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Địa Chỉ</label>
                            <span style="color:red;">*</span>
                            <input class="form-control" type="text" name="diachi" value="{{$luutru->DIACHI}}" placeholder="Nhập Địa chỉ" />
                            @if($errors->has('diachi'))
                            <div class="alert alert-danger" style="margin-top:10px;">
                                {{$errors->first('diachi')}}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Hình Ảnh</label>
                            <input accept="*.jpg,*.png" type="file" id="ful_hinhanh" name="HINHANH" class="form-control" />
                            @if($errors->has('HINHANH'))
                            <div class="alert alert-danger" style="margin-top:10px;">
                                {{$errors->first('HINHANH')}}
                            </div>
                            @endif
                            <img style="width:200px; max-height:200px; object-fit:contain; margin-top:20px;" src="{{$luutru->HINHANH}}">
                        </div>
                        <div class="form-group" style="text-align:center;">
                            <input type="submit" value="Cập Nhập Nơi Lưu Trú" class="btn btn-dark" />
                        </div>
                    </form>
                </div>
            </div>
    </section>
</div>
@stop