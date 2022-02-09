@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý Bình Luận</h1>
            <div class="col-sm-6"></div>
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
                      <th>Id_Nguoi Binh Luan</th>
                      <th>Id_Bai Viet</th>
                      <th>Noi Dung</th>
                      <th>Created_At</th>
                      <th>Update_At</th>
                      <th>Deleted_At</th>
                      <th>Chuc Nang</th>
                    </tr>
                    </thead>
                    @foreach ($lstbinhluan as $binhluan)
                    <tbody>
                    <tr>
                      <td>{{$binhluan->id}}</td>
                      <td>{{$binhluan->ID_NGUOIBL}}</td>
                      <td>{{$binhluan->ID_BAIVIET}}</td>
                      <td>{{$binhluan->NOIDUNG}}</td>
                      <td>{{$binhluan->created_at}}</td>
                      <td>{{$binhluan->updated_at}}</td>
                      <td>{{$binhluan->deleted_at}}</td>
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