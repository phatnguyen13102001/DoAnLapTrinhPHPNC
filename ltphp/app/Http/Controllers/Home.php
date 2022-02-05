<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
class Home extends Controller
{
    public function index(){
        return view('home.taikhoan');
    }
    public function mien(){
        return view('home.mien');
    }
    public function yeuthich(){
        return view('home.yeuthich');
    }
    public function luotxem(){
        return view('home.luotxem');
    }
    public function luotthich(){
        return view('home.luotthich');
    }
    public function diadanh(){
        return view('home.diadanh');
    }
    public function danhmuc(){
        return view('home.danhmuc');
    }
    public function binhluan(){
        return view('home.binhluan');
    }
    public function baiviet(){
        return view('home.baiviet');
    }
    public function login(){
        return view('login.login');
    }
    public function screenthemdiadanh(){
        return view('home.screendiadanh.screenthemdiadanh');
    }
    public function screensuadiadanh(){
        return view('home.screendiadanh.screensuadiadanh');
    }
    public function screenthemdanhmuc(){
        return view('home.screendanhmuc.screenthemdanhmuc');
    }
    public function screensuadanhmuc(){
        return view('home.screendanhmuc.screensuadanhmuc');
    }
    public function screenthemtinhthanh(){
        return view('home.screentinhthanh.screenthemtinhthanh');
    }
    public function screensuatinhthanh(){
        return view('home.screentinhthanh.screensuatinhthanh');
    }
    public function screenthemmien(){
        return view('home.screenmien.screenthemmien');
    }
    public function screensuamien(){
        return view('home.screenmien.screensuamien');
    }
}