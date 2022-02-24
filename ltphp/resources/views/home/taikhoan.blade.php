@extends('layoutadmin.dash')
@section('section')
<style>
  .search {
    position: relative;
    box-shadow: 0 0 40px rgba(51, 51, 51, .1)
  }

  .search input {
    height: 60px;
    text-indent: 25px;
    border: 2px solid #d6d4d4
  }

  .search input:focus {
    box-shadow: none;
    border: 2px solid blue
  }

  .search .fa-search {
    position: absolute;
    top: 20px;
    left: 16px
  }

  .search button {
    position: absolute;
    top: 5px;
    right: 5px;
    height: 50px;
    width: 110px;
    background: blue
  }
</style>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 style="text-align:center;font-weight:bold;">QUẢN LÝ TÀI KHOẢN</h1>
          <div class="col-sm-12">
            <a href="{{route('taikhoan.create')}}"><button type="button" class="btn btn-success"><i class="fas fa-plus"> Thêm</i></button></a>
            <form action="#" method="get">
              <div class="container">
                <div class="row height d-flex justify-content-center align-items-center">
                  <div class="col-md-8">
                    <div class="search"> <i class="fa fa-search"></i> <input type="text" class="form-control" placeholder="Have a question? Ask Now"> <button class="btn btn-primary" type="submit">Search</button> </div>
                  </div>
                </div>
              </div>
            </form>
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