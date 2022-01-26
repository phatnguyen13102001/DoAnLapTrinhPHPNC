<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request){
       $this->validate($request, [
           'HOTEN' => "required|string",
           'email' => "required|email|unique:users",
           'password' => "required",
           'SDT' =>"required|string"
       ]);
       
       $user = User::create([
           'HOTEN' => $request->HOTEN,
           'email' => $request->email,
           'password' => bcrypt($request->password),
           'SDT' =>$request->SDT
       ]);

       return json_encode($user);

   }

   public function login(Request $request){
       $credentials = [
           'email' => $request->email,
           'password' => $request->password,
        ];

        if(auth()->attempt($credentials)){
            return json_encode("Success");
        }else{
            return json_encode("Error");
        }
   }
}
