@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý Tỉnh Thành</h1>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <a href="{{url('screenthemtinhthanh')}}"> <button style="background-color:#00cc00;" type="button" class="btn btn-outline-success ">Thêm</button></a>
            </ol>
          </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="table-responsive">
                  <table class="table table-light" >
                    <thead class="thead thead-dark">
                    <tr>
                      <th>ID</th>
                      <th>Vùng Miền</th>
                      <th>Tên Tỉnh</th>
                      <th>Created_At</th>
                      <th>Updated_At</th>
                      <th>Deleted_At</th>
                      <th>Chức Năng</th>
                    </tr>
                    </thead>
                    @foreach($lstTinhThanh as $tinhthanh)
                    <tbody>
                    <tr>
                      <td>{{$tinhthanh->id}}</td>
                      <td>{{$tinhthanh->TENMIEN}}</td>
                      <td>{{$tinhthanh->TENTINH}}</td>
                      <td>{{$tinhthanh->created_at}}</td>
                      <td>{{$tinhthanh->updated_at}}</td>
                      <td>{{$tinhthanh->deleted_at}}</td>
                      <td>
                      <a href="{{url('screensuatinhthanh')}}"> <button type="button" class="btn btn-outline-success "><i class="fas fa-edit"></i></button></a>
   <button type="button" class="btn btn-outline-danger"><i class="fas fa-trash"></i></button>
                      </td>
                    </tr>
                    </tbody>
                    @endforeach
                  </table>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
</div>
  @stop