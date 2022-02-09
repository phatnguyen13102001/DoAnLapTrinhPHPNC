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
          <table class="table table-light">
            <thead class="thead thead-dark">
              <tr>
                <th>ID</th>
                <th>Người Đăng</th>
                <th>Địa Danh</th>
                <th>Nội Dung</th>
                <th>Hình Ảnh</th>
                <th>Created_At</th>
                <th>Update_At</th>
                <th>Chức Năng</th>
              </tr>
            </thead>
            @foreach ($lstbaiviet as $baiviet)
            <tbody>
              <tr>
                <td>{{$baiviet->id}}</td>
                <td>{{$baiviet->taikhoan->HOTEN}}</td>
                <td>{{$baiviet->diadanh->TENDIADANH}}</td>
                <td>{{$baiviet->NOIDUNG}}</td>
                <td><img style="width:100px; max-height:100px; object-fit:contain" src="{{$baiviet->HINHANH}}"></td>
                <td>{{$baiviet->created_at}}</td>
                <td>{{$baiviet->updated_at}}</td>
                <td>
                  <form method="post" action="{{route('baiviet.destroy',['baiviet'=>$baiviet])}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger">
                      <i class="fas fa-trash"></i>
                    </button>
                  </form>
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