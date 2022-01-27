@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1 style="text-align:center;font-weight:bold;">QUẢN LÝ DANH MỤC</h1>
            <div class="col-sm-6">
            <a href="{{url('screenthemdanhmuc')}}"> <button style="background-color:#00cc00;" type="button" class="btn btn-outline-success ">Thêm</button></a>
          </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Id</th>
                      <th>Ten Danh Muc</th>
                      <th>Hinh Anh</th>
                      <th>Created_At</th>
                      <th>Updated_At</th>
                      <th>Deleted_At</th>
                      <th>Chuc Nang</th>
                    </tr>
                    </thead>
                    @foreach ($lstdanhmuc as $danhmuc)
                    <tbody>
                    <tr>
                      <td>{{$danhmuc->id}}</td>
                      <td>{{$danhmuc->TENDANHMUC}}</td>
                      <td>{{$danhmuc->HINHANH}}</td>
                      <td>{{$danhmuc->created_at}}</td>
                      <td>{{$danhmuc->updated_at}}</td>
                      <td>{{$danhmuc->deleted_at}}</td>
                      <td>
                      <a href="{{url('screensuadanhmuc')}}"> <button type="button" class="btn btn-outline-success "><i class="fas fa-edit"></i></button></a>
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