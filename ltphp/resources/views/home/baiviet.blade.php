@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1 style="text-align:center;font-weight:bold;">QUẢN LÝ BÀI VIẾT</h1>
            <div class="col-sm-6">
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
                      <th>Id_Nguoi Dang</th>
                      <th>Id_Dia Danh</th>
                      <th>Noi Dung</th>
                      <th>Hinh Anh</th>
                      <th>Created_At</th>
                      <th>Update_At</th>
                      <th>Deleted_At</th>
                      <th>Chuc Nang</th>
                    </tr>
                    </thead>
                    @foreach ($lstbaiviet as $baiviet)
                    <tbody>
                    <tr>
                      <td>{{$baiviet->id}}</td>
                      <td>{{$baiviet->ID_NGUOIDANG}}</td>
                      <td>{{$baiviet->ID_DANHMUC}}</td>
                      <td>{{$baiviet->NOIDUNG}}</td>
                      <td>{{$baiviet->HINHANH}}</td>
                      <td>{{$baiviet->created_at}}</td>
                      <td>{{$baiviet->updated_at}}</td>
                      <td>{{$baiviet->deleted_at}}</td>
                      <td>
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