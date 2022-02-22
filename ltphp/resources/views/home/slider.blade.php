@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 style="text-align:center;font-weight:bold;">QUẢN LÝ SLIDER</h1>
          <div class="col-sm-6">
            <a href="{{route('slider.create')}}"> <button type="button" class="btn btn-success">Thêm</button></a>
            </ol>
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
            <thead class="thead thead-dark">
              <tr>
                <th>ID</th>
                <th>Hình Ảnh</th>
                <th>Created_At</th>
                <th>Updated_At</th>
                <th>Chức Năng</th>
              </tr>
            </thead>
            @foreach ($lstslider as $slider)
            <tbody>
              <tr>
                <td>{{$slider->id}}</td>
                <td><img style="width:100px; max-height:100px; object-fit:contain" src="{{$slider->HINHANH}}"></td>
                <td>{{$slider->created_at}}</td>
                <td>{{$slider->updated_at}}</td>
                <td>
                  <form method="post" action="{{route('slider.destroy',['slider'=>$slider])}}">
                    @csrf
                    @method('DELETE')
                    <a href="{{route('slider.edit',['slider'=>$slider])}}">
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
        </div>
        <!-- /.invoice -->
      </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
</section>
</div>
@stop
