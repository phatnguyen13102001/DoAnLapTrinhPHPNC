@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container">
            <h1 style="color:red; text-align:center;font-weight:bold;">CẬP NHẬP TỈNH THÀNH</h1>
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{route('tinhthanh.update',['tinhthanh'=>$tinhthanh])}}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label class="control-label">Tên Tỉnh Thành</label>
                            <span style="color:red;">*</span>
                            <input class="form-control" type="text" name="tentinh" value="{{$tinhthanh->TENTINH}}" placeholder="Nhập Tên Tỉnh Thành" />
                            @if($errors->has('tentinh'))
                            <div class="alert alert-danger" style="margin-top:10px;">
                                {{$errors->first('tentinh')}}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label">Vùng Miền</label>
                            <select name="id_mien">
                                @foreach($lstmien as $mien)
                                <option value="{{$mien->id}}">{{$mien->TENMIEN}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group" style="text-align:center;">
                            <input type="submit" value="Cập Nhập Tỉnh Thành" class="btn btn-dark" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@stop