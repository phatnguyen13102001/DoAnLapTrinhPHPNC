@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 style="text-align:center;font-weight:bold;">QUẢN LÝ MÓN ĂN</h1>
                    <div class="col-sm-6">
                        <a href="{{route('monan.create')}}"> <button type="button" class="btn btn-success">Thêm</button></a>
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
                                <th>Tên Món Ăn</th>
                                <th>Hình Ảnh</th>
                                <th>Created_At</th>
                                <th>Updated_At</th>
                                <th>Chức Năng</th>
                            </tr>
                        </thead>
                        @foreach($lstmonan as $monan)
                        <tbody>
                            <tr>
                                <td>{{$monan->id}}</td>
                                <td>{{$monan->diadanh->TENDIADANH}}</td>
                                <td>{{$monan->TENMONAN}}</td>
                                <td><img style="width:100px; max-height:100px; object-fit:contain" src="{{$monan->HINHANH}}"></td>
                                <td>{{$monan->created_at}}</td>
                                <td>{{$monan->updated_at}}</td>
                                <td>
                                    <form method="post" action="{{route('monan.destroy',['monan'=>$monan])}}">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('monan.edit',['monan'=>$monan])}}">
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