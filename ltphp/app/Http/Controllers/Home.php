<?php

namespace App\Http\Controllers;

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
}
