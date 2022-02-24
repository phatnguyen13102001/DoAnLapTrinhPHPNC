@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 style="text-align:center;font-weight:bold;">QUẢN LÝ NƠI LƯU TRÚ</h1>
                    <div class="col-sm-6">
                        <a href="{{route('luutru.create')}}"> <button type="button" class="btn btn-success">Thêm</button></a>
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
                                <th>Địa Danh</th>
                                <th>Tên Khách Sạn</th>
                                <th>Địa Chỉ</th>
                                <th>Hình Ảnh</th>
                                <th>Created_At</th>
                                <th>Updated_At</th>
                                <th>Chức Năng</th>
                            </tr>
                        </thead>
                        @foreach($lstluutru as $luutru)
                        <tbody>
                            <tr>
                                <td>{{$luutru->id}}</td>
                                <td>{{$luutru->diadanh->TENDIADANH}}</td>
                                <td>{{$luutru->TENKHACHSAN}}</td>
                                <td>{{$luutru->DIACHI}}</td>
                                <td><img style="width:100px; max-height:100px; object-fit:contain" src="{{$luutru->HINHANH}}"></td>
                                <td>{{$luutru->created_at}}</td>
                                <td>{{$luutru->updated_at}}</td>
                                <td>
                                    <form method="post" action="{{route('luutru.destroy',['luutru'=>$luutru])}}">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('luutru.edit',['luutru'=>$luutru])}}">
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