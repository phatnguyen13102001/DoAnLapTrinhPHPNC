@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper">
    <section class="content-header">
            <h3 style="color:red;">Sửa Địa Danh</h3>
            <div class="row">
                <form method="post" action="{{route('diadanh.update',['diadanh'=>$diadanh])}}" enctype="multipart/form-data">
                @csrf
            @method('PATCH')
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tên địa danh</label>
                            <input type="text" class="form-control" id="tendiadanh" name="tendiadanh" value="{{$diadanh->TENDIADANH}}" placeholder="Tên địa danh">
                        </div>
                        
                    </div>
                    <div class="col-4">
                        <div class="col-3">
                            <label for="exampleFormControlInput1" class="form-label">Tỉnh thành</label>
                            <select name="idtinh">
                                @foreach($lsttinhthanh as $tinhthanh)
                                <option  value="{{$tinhthanh->id}}" @if ($tinhthanh->id==$tinhthanh->ID_TINH) selected @endif>{{$tinhthanh->TENTINH}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div></br>
                    <div class="mb-4">
                        <div class="col-3">
                            <label for="exampleFormControlInput1" class="form-label">Danh mục</label>
                            <select name="iddanhmuc">
                                @foreach($lstdanhmuc as $danhmuc)
                                <option  value="{{$danhmuc->id}}" @if ($danhmuc->id==$danhmuc->ID_DANHMUC) selected @endif>{{$danhmuc->TENDANHMUC}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div></br>
                    <div>
                        <div class="row">
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Kinh độ</label>
                                    <input type="text" class="form-control" id="kinhdo" name="kinhdo" value="{{$diadanh->KINHDO}}" placeholder="Kinh Độ">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Vĩ độ</label>
                                    <input type="text" class="form-control" id="vido" name="vido" value="{{$diadanh->VIDO}}" placeholder="Vĩ dộ">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
                            <textarea class="form-control" id="mota" name="mota"rows="3">{{$diadanh->MOTA}}
                            </textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Hình ảnh</label>
                            <input accept="*.jpg,*.png" type="file" id="ful_hinhanh" name="HINHANH" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Địa chỉ</label>
                            <input type="text" class="form-control" id="diachi" name="diachi" value="{{$diadanh->DIACHI}}" placeholder="Địa chỉ">
                        </div>
                        <div class="align-middle text-end">
                            <button type="submit" class="btn btn-outline-success ">Sửa</button>
                            <a href="{{url('diadanh')}}"> <button type="button" class="btn btn-outline-danger">Hủy</button></a>
                        </div>
                    </div>
                </form>
            </div>
    </section>
</div>
@stop