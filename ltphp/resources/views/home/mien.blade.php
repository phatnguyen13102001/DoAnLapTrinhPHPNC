@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý Miền</h1>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <a href="{{url('screenthemmien')}}"> <button type="button" class="btn btn-outline-success ">Thêm</button></a>
            </ol>
          </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="table-responsive">
                  <table class="table table-light" >
                    <thead class="thead thead-dark">
                    <tr>
                      <th>ID</th>
                      <th>Tên Miền</th>
                      <th>Hình Ảnh</th>
                      <th>Created_At</th>
                      <th>Updated_At</th>
                      <th>Deleted_At</th>
                      <th>Chức Năng</th>
                    </tr>
                    </thead>
                    @foreach($lstVungMien as $vungmien)
                    <tbody>
                    <tr>
                      <td>{{$vungmien->id}}</td>
                      <td>{{$vungmien->TENMIEN}}</td>
                      <td>{{$vungmien->HINHANH}}</td>
                      <td>{{$vungmien->created_at}}</td>
                      <td>{{$vungmien->updated_at}}</td>
                      <td>{{$vungmien->deleted_at}}</td>
                      <td>
                      <a href="{{url('screensuamien')}}"> 
                        <button type="button" class="btn btn-outline-success ">
                          <i class="fas fa-edit"></i>
                        </button>
                      </a>
                      <a href="">
                        <button type="button" class="btn btn-outline-danger">
                          <i class="fas fa-trash"></i>
                        </button>
                      </a>
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