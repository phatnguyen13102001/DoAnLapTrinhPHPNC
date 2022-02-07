@extends('layoutadmin.layout')
@section('body')
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="https://scontent.fvca1-1.fna.fbcdn.net/v/t1.6435-9/135059568_1106577266444792_7297047493716215427_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=174925&_nc_ohc=QitLZfu8DUMAX82oKZp&tn=eL1T1qt6HfI-Umkv&_nc_ht=scontent.fvca1-1.fna&oh=00_AT8Z8dn7duBbGfs2WkB8e2jAj-225dVWuNxmD58gM7M7-A&oe=621A7433" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Minh Sanh
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('AdminLTE-3.2.0-rc/dist/img/user9.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  An Ngô
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{ asset('AdminLTE-3.2.0-rc/dist/img/user10.png')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Đạt Võ
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      @auth
        
        <li class="nav-item">
          <a href="{{route('logout')}}">
          @csrf
        <i class="fas fa-sign-out-alt" style='font-size:18px'></i>
          
          </a>
        </li>
        @endauth
    </ul>
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('taikhoan.index')}}" class="brand-link">
      <img src="{{ asset('AdminLTE-3.2.0-rc/dist/img/LogoAppTravel.png')}}" alt="AppTravel Logo" class="brand-image">
      <span class="brand-text font-weight-light">PSD Travel Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('AdminLTE-3.2.0-rc/dist/img/user8.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          
          <a href="#" class="d-block"> {{Auth::user()->HOTEN}}</a>
         
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('taikhoan.index')}}" class="nav-link ">
              <i class="fas fa-user"></i>
              <p>
                Quản Lý Tài Khoản
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('tinhthanh.index')}}" class="nav-link">
              <i class="fas fa-city"></i>
              <p>
                Quản Lý Tỉnh Thành
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('mien.index')}}" class="nav-link">
              <i class="fas fa-building"></i>
              <p>
                Quản Lý Miền
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('diadanh')}}" class="nav-link">
              <i class="fas fa-sitemap"></i>
              <p>
                Quản Lý Địa Danh
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('danhmuc')}}" class="nav-link">
              <i class="fas fa-align-right"></i>
              <p>
                Quản Lý Danh Mục
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="baiviet" class="nav-link">
              <i class="fas fa-clone"></i>
              <p>
                Quản Lý Bài Viết
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="binhluan" class="nav-link">
              <i class="fas fa-comment"></i>
              <p>
                Quản Lý Bình Luận
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="luotthich" class="nav-link">
              <i class="far fa-thumbs-up"></i>
              <p>
                Quản Lý Lượt Thích
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="luotxem" class="nav-link">
              <i class="fas fa-eye"></i>
              <p>
                Quản Lý Lượt Xem
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="yeuthich" class="nav-link">
              <i class="fas fa-heart"></i>
              <p>
                Quản Lý Lượt Yêu Thích
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
  <!-- /.content-wrapper -->
  @yield('section');
  <footer class="main-footer">
  </footer>
  @endsection