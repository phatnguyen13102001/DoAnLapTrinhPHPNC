@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper" >
<section class="content-header">
<div class="container">
<h3 style="color:red;">Sửa Tỉnh Thành</h3>
    <div class="row">
    <form method="post" action="{{route('tinhthanh.update',['tinhthanh'=>$tinhthanh])}}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
            <div class="form-group">
                <label for="exampleFormControlInput1" class="form-label">Tên tỉnh thành</label>
                <input type="text" class="form-control" value="{{$tinhthanh->TENTINH}}" id="tentinh" name="tentinh" placeholder="Tên địa danh">
</div>
        </div>
        <div class="col-4">
            <label for="exampleFormControlInput1" class="form-label">Miền</label>
            <select name="id_mien">
            @foreach($lstmien as $mien)
              <option  value="{{$mien->id}}" @if ($mien->id==$tinhthanh->ID_MIEN) selected @endif>{{$mien->TENMIEN}}</option>
            @endforeach
            </select>
        </div>
        <div class="col-4">
        <div class="align-middle text-end">
   <button type="submit" class="btn btn-outline-success ">Sửa</button>
   <a href="{{url('tinhthanh')}}"> <button type="button" class="btn btn-outline-danger">Hủy</button></a>
</div>
</div>
    </form>
    </div></br>
</div>
</div>
</section>
</div>
@stop