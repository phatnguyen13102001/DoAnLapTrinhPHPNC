@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 style="text-align:center;font-weight:bold;">QUẢN LÝ YÊU THÍCH</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="table-responsive">
          <table class="table table-light">
            <thead class="thead thead-dark">
              <tr>
                <th>ID</th>
                <th>Người Thích</th>
                <th>Địa Danh</th>
                <th>Trạng Thái</th>
                <th>Created_At</th>
                <th>Updated_At</th>
              </tr>
            </thead>
            @foreach ($lstyeuthich as $yeuthich)
            <tbody>
              <tr>
                <td>{{$yeuthich->id}}</td>
                <td>{{$yeuthich->taikhoan->HOTEN}}</td>
                <td>{{$yeuthich->diadanh->TENDIADANH}}</td>
                @if($yeuthich->TRANGTHAI == 1)
                <td>Đã Thích</td>
                @elseif ($yeuthich->TRANGTHAI == 0)
                <td>Bỏ Thích</td>
                @endif
                <td>{{$yeuthich->created_at}}</td>
                <td>{{$yeuthich->updated_at}}</td>
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