@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý Yêu Thích</h1>
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
                      <th>ID Người Thích</th>
                      <th>ID Địa Danh</th>
                      <th>Trạng Thái</th>
                      <th>Created_At</th>
                      <th>Updated_At</th>
                      <th>Deleted_At</th>
                    </tr>
                    </thead>
                    @foreach ($lstyeuthich as $yeuthich)
                    <tbody>
                    <tr>
                      <td>{{$yeuthich->id}}</td>
                      <td>{{$yeuthich->ID_NGUOITHICH}}</td>
                      <td>{{$yeuthich->ID_DIADANH}}</td>
                      <td>{{$yeuthich->TRANGTHAI}}</td>
                      <td>{{$yeuthich->created_at}}</td>
                      <td>{{$yeuthich->updated_at}}</td>
                      <td>{{$yeuthich->deleted_at}}</td>
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