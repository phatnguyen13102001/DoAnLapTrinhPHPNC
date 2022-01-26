@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper" >
<section class="content-header">
<div class="container">
<h3 style="color:red;">Thêm Tỉnh Thành</h3>
    <div class="row">
        
        <div class="col-4">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tên tỉnh thành</label>
                <input type="text" class="form-control" id="TenDiaDanh" placeholder="Tên địa danh">
             </div>
        </div>
        <div class="col-4">
        <div class="col-3">
            <label for="exampleFormControlInput1" class="form-label">Miền</label>
            <select class="form-select" aria-label="Default select example">
              <option selected>All</option>
              <option value="1">Bắc</option>
              <option value="2">Trung</option>
              <option value="3">Nam</option>
            </select>
        </div>
    </div></br>
</div>
</div>
<div class="align-middle text-end">
   <button type="button" class="btn btn-outline-success ">Thêm</button>
   <a href="{{url('tinhthanh')}}"> <button type="button" class="btn btn-outline-danger">Hủy</button></a>
</div>
</section>
</div>
@stop