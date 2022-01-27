@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1 style="text-align:center;font-weight:bold;">QUẢN LÝ LƯỢT XEM</h1>
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
                      <th>ID Người Xem</th>
                      <th>ID_Bài Viết</th>
                      <th>Trang Thai</th>
                      <th>Created_At</th>
                      <th>Updated_At</th>
                      <th>Deleted_At</th>
                      <th>Chuc Nang</th>
                    </tr>
                    </thead>
                    @foreach ($lstluotxem as $luotxem)
                    <tbody>
                    <tr>
                      <td>{{$luotxem->id}}</td>
                      <td>{{$luotxem->ID_NGUOIXEM}}</td>
                      <td>{{$luotxem->ID_BAIVIET}}</td>
                      <td>{{$luotxem->TRANGTHAI}}</td>
                      <td>{{$luotxem->created_at}}</td>
                      <td>{{$luotxem->updated_at}}</td>
                      <td>{{$luotxem->deleted_at}}</td>
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