@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container">
      <h1 style="color:red; text-align:center;font-weight:bold;">CẬP NHẬT SLIDER</h1>
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{route('slider.update',['slider'=>$slider])}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
              <label class="control-label">Hình Ảnh</label>
              <input accept="*.jpg,*.png" type="file" id="ful_hinhanh" name="HINHANH" class="form-control" />
              <img style="width:200px; max-height:200px; object-fit:contain; margin-top:20px;" src="{{$slider->HINHANH}}">
            </div>
            <div class="form-group" style="text-align:center;">
              <input type="submit" value="Cập Nhập Slider" class="btn btn-dark" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
@stop
