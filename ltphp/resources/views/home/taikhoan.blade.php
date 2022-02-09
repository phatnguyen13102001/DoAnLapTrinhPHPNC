@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 style="text-align:center;font-weight:bold;">QUẢN LÝ TÀI KHOẢN</h1>
          <div class="col-sm-6">
            <a href="{{route('taikhoan.create')}}"> <button type="button" class="btn btn-success">Thêm</button></a>
          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <table class="table table-light">
          <thead class="thead thead-dark">
            <tr>
              <th>ID</th>
              <th>Hình Ảnh</th>
              <th>Họ Tên</th>
              <th>Email</th>
              <th>Mật Khẩu</th>
              <th>SĐT</th>
              <th>Phân Quyền</th>
              <th>Chức Năng</th>
            </tr>
          </thead>
          @foreach ($lstTaiKhoan as $taikhoan)
          <tbody>
            <tr>
              <td>{{$taikhoan->id}}</td>
              <td><img style="width:100px; max-height:100px; object-fit:contain" src="{{$taikhoan->HINHANH}}"></td>
              <td>{{$taikhoan->HOTEN}}</td>
              <td>{{$taikhoan->email}}</td>
              <td>secret</td>
              <td>{{$taikhoan->SDT}}</td>
              @if($taikhoan->QUYEN == 1)
              <td>Admin</td>
              @elseif ($taikhoan->QUYEN == 2)
              <td>Người Dùng</td>
              @endif
              <td>
                <form method="post" action="{{route('taikhoan.destroy',['taikhoan'=>$taikhoan])}}">
                  @csrf
                  @method('DELETE')
                  <a href="{{route('taikhoan.edit',['taikhoan'=>$taikhoan])}}">
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
        <!-- /.invoice -->
      </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
</section>
</div>
@stop()