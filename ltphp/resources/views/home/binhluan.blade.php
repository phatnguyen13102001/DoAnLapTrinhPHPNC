@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 style="text-align:center;font-weight:bold;">QUẢN LÝ BÀI VIẾT</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
                 <div class="table-responsive">
                  <table class="table table-light" >
                    <thead class="thead thead-dark" >
                    <tr>
                      <th>ID</th>
                      <th>Người BL</th>
                      <th>ID Bài Viết</th>
                      <th>Nội Dung</th>
                      <th>Created_At</th>
                      <th>Update_At</th>
                      <th>Chức Năng</th>
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
                      <td>
                      <button type="button" class="btn btn-outline-danger"><i class="fas fa-trash"></i></button>
                      </td>
                    </tr>
                    </tbody>
                    @endforeach
                  </table>
                </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
</div>
  @stop