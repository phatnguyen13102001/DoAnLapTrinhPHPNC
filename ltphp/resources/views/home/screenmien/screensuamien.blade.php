@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper" >
<section class="content-header">
<div class="container">
<h3 style="color:red;">Sửa Miền</h3>
    <div class="row">
    <form method="post" action="{{route('mien.update',['mien'=>$mien])}}" enctype="multipart/form-data">
                @csrf
            @method('PATCH')
        <div class="col-4">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tên miền</label>
                <input type="text" class="form-control" id="tenmien" name="tenmien" value="{{$mien->TENMIEN}}" placeholder="Tên miền">
             </div>
             <div class="mb-3">
                            <label class="form-label">Hình ảnh</label>
                            <input accept="*.jpg,*.png" type="file" id="ful_hinhanh" name="HINHANH" class="form-control" />
                        </div>
        </div>
        <div class="align-middle text-end">
   <button type="submit" class="btn btn-outline-success ">Sửa</button>
   <a href="{{url('mien')}}"> <button type="button" class="btn btn-outline-danger">Hủy</button></a>
</div>
    </form>
</div>
</div>

</section>
</div>
@stop