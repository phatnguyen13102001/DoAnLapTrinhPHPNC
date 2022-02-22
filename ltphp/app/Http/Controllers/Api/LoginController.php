<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        if ($request->TenDangNhap == $request->MatKhau) {
            return json_encode("success");
        } else {
            return json_encode("fail");
        }
    }
}
