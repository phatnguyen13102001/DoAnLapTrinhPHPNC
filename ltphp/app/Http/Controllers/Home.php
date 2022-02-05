<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class Home extends Controller
{
    public function yeuthich()
    {
        return view('home.yeuthich');
    }
    public function luotxem()
    {
        return view('home.luotxem');
    }
    public function luotthich()
    {
        return view('home.luotthich');
    }
    public function diadanh()
    {
        return view('home.diadanh');
    }
    public function binhluan()
    {
        return view('home.binhluan');
    }
    public function login()
    {
        return view('login.login');
    }
    public function screenthemdiadanh()
    {
        return view('home.screendiadanh.screenthemdiadanh');
    }
    public function screensuadiadanh()
    {
        return view('home.screendiadanh.screensuadiadanh');
    }
}
