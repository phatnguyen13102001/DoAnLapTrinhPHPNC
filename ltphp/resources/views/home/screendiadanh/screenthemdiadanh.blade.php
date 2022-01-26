@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper" >
<section class="content-header">
<div class="container">
<h3 style="color:red;">Thêm Địa Danh</h3>
    <div class="row">
        
        <div class="col-4">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tên địa danh</label>
                <input type="text" class="form-control" id="TenDiaDanh" placeholder="Tên địa danh">
             </div>
        </div>
    <div class="col-4">
        <div class="col-3">
            <label for="exampleFormControlInput1" class="form-label">Tỉnh thành</label>
            <select class="form-select" aria-label="Default select example">
              <option selected>All</option>
              <option value="1">Vũng Tàu</option>
              <option value="2">Bạc Liêu</option>
              <option value="3">Nam Định</option>
            </select>
        </div>
    </div></br>
    <div class="mb-4">
        <div class="col-3">
            <label for="exampleFormControlInput1" class="form-label">Danh mục</label>
            <select class="form-select" aria-label="Default select example">
              <option selected>All</option>
              <option value="1">Phượt</option>
              <option value="2">Nghỉ dưỡng</option>
              <option value="3">Dã ngoại</option>
              <option value="4">Cắm trại</option>
            </select>
        </div>
    </div></br>
</div>
</div>
<div>
<div class="col-4">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Địa chỉ</label>
                <input type="text" class="form-control" id="TenDiaDanh" placeholder="Tên địa danh">
             </div>
        </div>
<div>
       <div class="row">
        <div class="col-4">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Kinh độ</label>
                <input type="text" class="form-control" id="KinhDo" placeholder="Kinh Độ">
             </div>
        </div>
    <div class="col-4">
        <div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">Vĩ độ</label>
                <input type="text" class="form-control" id="ViDo" placeholder="Vĩ dộ">
        </div>
    </div>
</div>
<div class="mb-4">
        <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
        <textarea class="form-control" id="CanhVat" rows="3"></textarea>
    </div>
<div class="mb-3">
  <label for="formFile" class="form-label">Hình ảnh</label>
  <input class="form-control" type="file" id="HinhAnh">
</div>
<div class="align-middle text-end">
   <button type="button" class="btn btn-outline-success ">Thêm</button>
   <a href="{{url('diadanh')}}"> <button type="button" class="btn btn-outline-danger">Hủy</button></a>
</div>
</section>
</div>
@stop