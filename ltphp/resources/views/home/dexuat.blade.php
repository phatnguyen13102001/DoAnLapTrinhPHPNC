@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 style="text-align:center;font-weight:bold;">QUẢN LÝ ĐỀ XUẤT ĐỊA DANH</h1>
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
                <th>Tài Khoản</th>
                <th>Danh Mục</th>
                <th>Địa Danh</th>
                <th>Tỉnh Thành</th>
                <th>Hình Ảnh</th>
                <th>Địa Chỉ</th>
                <th>Duyệt</th>
              </tr>
            </thead>
            @foreach ($lstdexuat as $dexuat)
            <tbody>
              <tr>
                <td>{{$dexuat->id}}</td>
                <td>{{$dexuat->taikhoan->HOTEN}}</td>
                <td>{{$dexuat->TENDANHMUC}}</td>
                <td>{{$dexuat->TENDIADANH}}</td>
                <td>{{$dexuat->TENTINHTHANH}}</td>
                <td><img style="width:100px; max-height:100px; object-fit:contain" src="{{$dexuat->HINHANH}}"></td>
                <td>{{$dexuat->DIACHI}}</td>
                <td>
                  <form method="post" action="{{route('dexuat.destroy',['dexuat'=>$dexuat])}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-success">
                      <i class="fas fa-check"></i>
                    </button>
                  </form>
                </td>
              </tr>
            </tbody>

            @endforeach
          </table>
          <hr>
        </div>
        <!-- /.invoice -->
      </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
</section>
</div>
@stop