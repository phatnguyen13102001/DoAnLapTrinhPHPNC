@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper" >
<section class="content-header">
<div class="container">
<h3 style="color:red;">Thêm Miền</h3>
    <div class="row">
        
        <div class="col-4">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tên miền</label>
                <input type="text" class="form-control" id="TenDiaDanh" placeholder="Tên miền">
             </div>
        </div>
</div>
</div>
<div class="align-middle text-end">
   <button type="button" class="btn btn-outline-success ">Thêm</button>
   <a href="{{url('mien')}}"> <button type="button" class="btn btn-outline-danger">Hủy</button></a>
</div>
</section>
</div>
@stop