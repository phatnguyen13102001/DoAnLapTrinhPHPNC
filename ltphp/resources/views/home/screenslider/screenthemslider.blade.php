@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container">
      <h1 style="color:red; text-align:center;font-weight:bold;">THÊM SLIDER</h1>
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{route('slider.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label class="control-label">Hình Ảnh</label>
              <span style="color:red;">*</span>
              <input accept="*.jpg,*.png" type="file" id="ful_hinhanh" name="HINHANH" class="form-control" />
              @if($errors->has('HINHANH'))
              <div class="alert alert-danger" style="margin-top:10px;">
                {{$errors->first('HINHANH')}}
              </div>
              @endif
            </div>
            <div class="form-group" style="text-align:center;">
              <input type="submit" value="Thêm Slider" class="btn btn-dark" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
@stop
