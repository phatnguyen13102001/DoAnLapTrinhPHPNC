@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 style="text-align:center;font-weight:bold;">QUẢN LÝ MIỀN</h1>
          <div class="col-sm-6">
            <a href="{{route('mien.create')}}"><button type="button" class="btn btn-success"><i class="fas fa-plus"> Thêm</i></button></a>
          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="table-responsive">
        <table class="table table-light">
          <thead class="thead thead-dark">
            <tr>
              <th>ID</th>
              <th>Tên Miền</th>
              <th>Hình Ảnh</th>
              <th>Created_At</th>
              <th>Updated_At</th>
              <th>Chức Năng</th>
            </tr>
          </thead>
          @foreach($lstVungMien as $mien)
          <tbody>
            <tr>
              <td>{{$mien->id}}</td>
              <td>{{$mien->TENMIEN}}</td>
              <td><img style="width:100px; max-height:100px; object-fit:contain" src="{{$mien->HINHANH}}"></td>
              <td>{{$mien->created_at}}</td>
              <td>{{$mien->updated_at}}</td>
              <td>
                <form method="post" action="{{route('mien.destroy',['mien'=>$mien])}}">
                  @csrf
                  @method('DELETE')
                  <a href="{{route('mien.edit',['mien'=>$mien])}}">
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
@stop