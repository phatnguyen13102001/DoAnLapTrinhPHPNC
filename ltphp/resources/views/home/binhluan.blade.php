@extends('layoutadmin.dash')
@section('section')
<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý Bình Luận</h1>
            <div class="col-sm-6">
          </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Id</th>
                      <th>Id_Nguoi Binh Luan</th>
                      <th>Id_Bai Viet</th>
                      <th>Noi Dung</th>
                      <th>Trang Thai</th>
                      <th>Chuc Nang</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>vominhsanh.jpg</td>
                      <td>Vo Minh Sanh</td>
                      <td>sanh@gmail.com</td>
                      <td>123</td>
                      <td>
                      <button type="button" class="btn btn-outline-danger"><i class="fas fa-trash"></i></button>
                      </td>
                    </tr>
                    <tr>
                    <td>2</td>
                      <td>NguyenTanPhat.jpg</td>
                      <td>Nguyen Tan Phat</td>
                      <td>phat@gmail.com</td>
                      <td>123</td>
                      
                    </tr>
                    <tr>
                    <td>3</td>
                      <td>vothanhdat.jpg</td>
                      <td>Vo Thanh Dat</td>
                      <td>dat@gmail.com</td>
                      <td>123</td>
                     
                    </tr>
                    </tbody>
                  </table>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
</div>
  @stop