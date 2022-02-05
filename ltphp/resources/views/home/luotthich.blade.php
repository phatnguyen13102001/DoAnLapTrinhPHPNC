@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 style="text-align:center;font-weight:bold;">QUẢN LÝ LƯỢT THÍCH</h1>
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
                <th>ID Bài Viết</th>
                <th>Trạng Thái</th>
                <th>Created_At</th>
                <th>Update_At</th>
              </tr>
            </thead>
            @foreach ($lstluotthich as $luotthich)
            <tbody>
              <tr>
                <td>{{$luotthich->id}}</td>
                <td>{{$luotthich->ID_NGUOITHICH}}</td>
                <td>{{$luotthich->ID_BAIVIET}}</td>
                <td>{{$luotthich->TRANTHAI}}</td>
                <td>{{$luotthich->created_at}}</td>
                <td>{{$luotthich->updated_at}}</td>
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