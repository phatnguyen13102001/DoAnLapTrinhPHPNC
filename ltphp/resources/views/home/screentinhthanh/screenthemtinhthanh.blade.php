@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container">
            <h3 style="color:red;">Thêm Tỉnh Thành</h3>
            <div class="row">
                <form method="post" action="{{route('tinhthanh.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tên tỉnh thành</label>
                            <input type="text" class="form-control" id="tentinh" name="tentinh" placeholder="Tên tỉnh thành">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="col-3">

                            <select name="id_mien">
                                <option> chọn miền</option>
                                @foreach($lstmien as $mien)
                                <option value="{{$mien->id}}">{{$mien->TENMIEN}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div></br>
                    <div class="align-middle text-end">
                        <button type="submit" class="btn btn-outline-success ">Thêm</button>
                        <a href="{{url('tinhthanh')}}"> <button type="button" class="btn btn-outline-danger">Hủy</button></a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@stop