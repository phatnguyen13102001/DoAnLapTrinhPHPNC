<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\baiviet;
use App\Models\users;
use App\Models\diadanh;
use Illuminate\Support\Facades\DB;

class BaiVietController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function InsertPost(Request $request)
    {
        $baiviet = new baiviet;
        $baiviet ->ID_NGUOIDANG = $request->ID_NGUOIDANG;
        $baiviet ->ID_DIADANH = $request->ID_DIADANH;
        $baiviet ->NOIDUNG = $request->NOIDUNG;
        $baiviet->HINHANH = $request->file('HINHANH');
        if($request->hasFile('HINHANH')){
            $new_name=rand().'.'.$baiviet->HINHANH->getClientOriginalExtension();
            $baiviet->HINHANH->move(public_path('/uploads'),$new_name);
            $baiviet->HINHANH =$new_name;
        }else{
            return response()->json('image null');
        }
        if($baiviet->save()){
            return response()->json([
                "BaiViet" =>$baiviet,
                "msg" => "Thêm Thành Công"
            ],201);
        }else{
            return response()->json([
                "BaiViet" =>null,
                'msg' => "Thêm Thất Bại"
            ],400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ShowPostByIDSite($id)
    {
        $baiviet = DB::table('baiviets')
           ->join('users', 'ID_NGUOIDANG', '=', 'users.id')
           ->join('diadanhs', 'ID_DIADANH', '=', 'diadanhs.id')
           ->select('users.HOTEN','users.HINHANH as HINHANHTK','diadanhs.TENDIADANH', 'baiviets.NOIDUNG','baiviets.HINHANH','baiviets.id','users.id','diadanhs.id')
           ->where('baiviets.ID_DIADANH',$id)
           ->get();
        $response['BaiViet'] =  $baiviet;
        return json_encode($response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
