<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($email)
    {
        $user = DB::table('users')->where('email', $email)->get();
        $response['User'] =  $user;
        return json_encode($response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $email)
    {
        $user = User::where('email', $email)->first();
        $user->HOTEN = $request->HOTEN;
        $user->SDT = $request->SDT;
        $user->password = encrypt($request->password);
        $user->save();

        return json_encode($user);
    }

    public function upload(Request $request, $email)
    {
        $user = User::where('email', $email)->first();
        $user->HINHANH = $request->file('HINHANH');
        if ($request->hasFile('HINHANH')) {
            $user->HINHANH = $request->file('HINHANH')->store('images/avatar/', 'public');
            return response()->json('has image');
        } else {
            return response()->json('image null');
        }
    }
}
