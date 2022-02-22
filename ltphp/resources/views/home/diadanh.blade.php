@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 style="text-align:center;font-weight:bold;">QUẢN LÝ ĐỊA DANH</h1>
          <div class="col-sm-6">
            <a href="{{route('diadanh.create')}}"> <button type="button" class="btn btn-success">Thêm</button></a>
          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="table-responsive">
          <table class="table table-light">
            <colgroup>
              <col width="10" span="1">
              <col width="150" span="2">
              <col width="150" span="1">
              <col width="100" span="4">
            </colgroup>
            <thead class="thead thead-dark">
              <tr>
                <th>ID</th>
                <th>Tỉnh Thành</th>
                <th>Danh Mục</th>
                <th>Tên Địa Danh</th>
                <th>Hình Ảnh</th>
                <th>Địa Chỉ</th>
                <th>Kinh Độ</th>
                <th>Vĩ Độ</th>
                <th>Mô Tả</th>
                <th>Chức Năng</th>
              </tr>
            </thead>
            @foreach ($lstdiadanh as $diadanh)
            <tbody>
              <tr>
                <td>{{$diadanh->id}}</td>
                <td>{{$diadanh->tinhthanh->TENTINH}}</td>
                <td>{{$diadanh->danhmuc->TENDANHMUC}}</td>
                <td>{{$diadanh->TENDIADANH}}</td>
                <td><img style="width:100px; max-height:100px; object-fit:contain" src="{{$diadanh->HINHANH}}"></td>
                <td>{{$diadanh->DIACHI}}</td>
                <td>{{$diadanh->KINHDO}}</td>
                <td>{{$diadanh->VIDO}}</td>
                <td>{{$diadanh->MOTA}}</td>
                <td>
                  <form method="post" action="{{route('diadanh.destroy',['diadanh'=>$diadanh])}}">
                    @csrf
                    @method('DELETE')
                    <a href="{{route('diadanh.edit',['diadanh'=>$diadanh])}}">
                      <button type="button" class="btn btn-outline-success ">
                        <i class="fas fa-edit"></i>
                      </button>
                    </a>
                    <button type="submit" class="btn btn-outline-danger">
                      <i class="fas fa-trash"></i>
                    </button>
                  </form>
                </td>
              </tr>
            </tbody>

            @endforeach
          </table>
          <hr>
          <div>
            {{$lstdiadanh->appends(request()->all())->links()}}
          </div>
        </div>
        <!-- /.invoice -->
      </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
</section>
</div>
@stop