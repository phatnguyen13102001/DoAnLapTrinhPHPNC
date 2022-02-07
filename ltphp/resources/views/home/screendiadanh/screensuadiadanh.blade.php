@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container">
            <h1 style="color:red; text-align:center;font-weight:bold;">CẬP NHẬP ĐỊA DANH</h1>
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{route('diadanh.update',['diadanh'=>$diadanh])}}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label class="control-label">Tên Địa Danh</label>
                            <span style="color:red;">*</span>
                            <input class="form-control" type="text" name="tendiadanh" value="{{$diadanh->TENDIADANH}}" placeholder="Nhập Tên Địa Danh" />
                            @if($errors->has('tendiadanh'))
                            <div class="alert alert-danger" style="margin-top:10px;">
                                {{$errors->first('tendiadanh')}}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Hình Ảnh</label>
                            <span style="color:red;">*</span>
                            <input accept="*.jpg,*.png" type="file" id="ful_hinhanh" name="HINHANH" class="form-control" />
                            @if($errors->has('HINHANH'))
                            <div class="alert alert-danger" style="margin-top:10px;">
                                {{$errors->first('HINHANH')}}
                            </div>
                            @endif
                            <img style="width:200px; max-height:200px; object-fit:contain; margin-top:20px;" src="{{$diadanh->HINHANH}}">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Địa Chỉ</label>
                            <span style="color:red;">*</span>
                            <input class="form-control" type="text" name="diachi" value="{{$diadanh->DIACHI}}" placeholder="Nhập Địa Chỉ" />
                            @if($errors->has('diachi'))
                            <div class="alert alert-danger" style="margin-top:10px;">
                                {{$errors->first('diachi')}}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">Tỉnh thành</label>
                            <select name="idtinh">
                                @foreach($lsttinhthanh as $tinhthanh)
                                <option value="{{$tinhthanh->id}}">{{$tinhthanh->TENTINH}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">Danh mục</label>
                            <select name="iddanhmuc">
                                @foreach($lstdanhmuc as $danhmuc)
                                <option value="{{$danhmuc->id}}">{{$danhmuc->TENDANHMUC}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kinh độ</label>
                                        <span style="color:red;">*</span>
                                        <input type="text" class="form-control" id="kinhdo" name="kinhdo" value="{{$diadanh->KINHDO}}" placeholder="Kinh Độ">
                                        @if($errors->has('kinhdo'))
                                        <div class="alert alert-danger" style="margin-top:10px;">
                                            {{$errors->first('kinhdo')}}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Vĩ độ</label>
                                        <span style="color:red;">*</span>
                                        <input type="text" class="form-control" id="vido" name="vido" value="{{$diadanh->VIDO}}" placeholder="Vĩ dộ">
                                        @if($errors->has('vido'))
                                        <div class="alert alert-danger" style="margin-top:10px;">
                                            {{$errors->first('vido')}}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
                                <span style="color:red;">*</span>
                                <textarea class="form-control" id="mota" name="mota" rows="3">{{$diadanh->MOTA}}</textarea>
                            </div>
                            <div class="form-group" style="text-align:center;">
                                <input type="submit" value="Cập Nhật Địa Danh" class="btn btn-dark" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@stop