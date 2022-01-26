@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper" >
<section class="content-header">
<div class="container">
<h3 style="color:red;">Sửa Danh Mục</h3>
    <div class="row">
        
        <div class="col-4">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tên danh mục</label>
                <input type="text" class="form-control" id="TenDiaDanh" placeholder="Tên địa danh">
             </div>
        </div>
</div>
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">Hình ảnh</label>
  <input class="form-control" type="file" id="HinhAnh">
</div>
<div class="align-middle text-end">
   <button type="button" class="btn btn-outline-success ">Sửa</button>
   <a href="{{url('danhmuc')}}"> <button type="button" class="btn btn-outline-danger">Hủy</button></a>
</div>
</section>
</div>
@stop