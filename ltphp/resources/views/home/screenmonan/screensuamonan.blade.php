@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container">
            <h1 style="color:red; text-align:center;font-weight:bold;">CẬP NHẬT MÓN ĂN</h1>
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{route('monan.update',['monan'=>$monan])}}" enctype="multipart/form-data">
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
                            <label class="control-label">Tên Món Ăn</label>
                            <span style="color:red;">*</span>
                            <input class="form-control" type="text" name="tenmonan" value="{{$monan->TENMONAN}}" placeholder="Nhập tên món ăn" />
                            @if($errors->has('tenmonan'))
                            <div class="alert alert-danger" style="margin-top:10px;">
                                {{$errors->first('tenmonan')}}
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
                            <img style="width:200px; max-height:200px; object-fit:contain; margin-top:20px;" src="{{$monan->HINHANH}}">
                        </div>
                        <div class="form-group" style="text-align:center;">
                            <input type="submit" value="Cập Nhập Món Ăn" class="btn btn-dark" />
                        </div>
                    </form>
                </div>
            </div>

    </section>
</div>
@stop