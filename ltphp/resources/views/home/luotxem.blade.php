@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 style="text-align:center;font-weight:bold;">QUẢN LÝ LƯỢT XEM</h1>
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
                <th>Người Xem</th>
                <th>Bài Viết</th>
                <th>Created_At</th>
                <th>Updated_At</th>
              </tr>
            </thead>
            @foreach ($lstluotxem as $luotxem)
            <tbody>
              <tr>
                <td>{{$luotxem->id}}</td>
                <td>{{$luotxem->taikhoan->HOTEN}}</td>
                <td>{{$luotxem->baiviet->diadanh->TENDIADANH}}</td>
                <td>{{$luotxem->created_at}}</td>
                <td>{{$luotxem->updated_at}}</td>
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