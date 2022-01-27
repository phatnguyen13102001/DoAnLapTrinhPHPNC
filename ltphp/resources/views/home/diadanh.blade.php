@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1 style="text-align:center;font-weight:bold;">QUẢN LÝ ĐỊA DANH</h1>
            <div class="col-sm-6">
             <a href="{{url('screenthemdiadanh')}}"> <button style="background-color:#00cc00;" type="button" class="btn btn-outline-success ">Thêm</button></a>
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
                      <th>Id_Tinh</th>
                      <th>Id_Danh Muc</th>
                      <th>Ten Dia Danh</th>
                      <th>Hinh Anh </th>
                      <th>Dia Chi</th>
                      <th>Kinh Do</th>
                      <th>Vi Do</th>
                      <th>Mo Ta</th>
                      <th>Created_At</th>
                      <th>Updated_At</th>
                      <th>Deleted_At</th>
                      <th>Chuc Nang</th>
                    </tr>
                    </thead>
                    @foreach ($lstdiadanh as $diadanh)
                    <tbody>
                    <tr>
                      <td>{{$diadanh->id}}</td>
                      <td>{{$diadanh->ID_DANHMUC}}</td>
                      <td>{{$diadanh->ID_TINH}}</td>
                      <td>{{$diadanh->TENDIADANH}}</td>
                      <td>{{$diadanh->HINHANH}}</td>
                      <td>{{$diadanh->DIACHI}}</td>
                      <td>{{$diadanh->KINHDO}}</td>
                      <td>{{$diadanh->VIDO}}</td>
                      <td>{{$diadanh->MOTA}}</td>
                      <td>{{$diadanh->created_at}}</td>
                      <td>{{$diadanh->updated_at}}</td>
                      <td>{{$diadanh->deleted_at}}</td>
                      <td>
  <a href="{{url('screensuadiadanh')}}"> <button type="button" class="btn btn-outline-success "><i class="fas fa-edit"></i></button></a>
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