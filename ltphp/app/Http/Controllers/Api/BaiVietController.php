<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\baiviet;
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
        $baiviet->ID_NGUOIDANG = $request->ID_NGUOIDANG;
        $baiviet->ID_DIADANH = $request->ID_DIADANH;
        $baiviet->NOIDUNG = $request->NOIDUNG;
        $baiviet->HINHANH = $request->file('HINHANH');
        if ($request->hasFile('HINHANH')) {
            $baiviet->HINHANH = $request->file('HINHANH')->store('images/baiviet/', 'public');
        } else {
            return response()->json('image null');
        }
        if ($baiviet->save()) {
            return response()->json([
                "BaiViet" => $baiviet,
                "msg" => "Thêm Thành Công"
            ], 201);
        } else {
            return response()->json([
                "BaiViet" => null,
                'msg' => "Thêm Thất Bại"
            ], 400);
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
            ->select('users.HOTEN', 'users.HINHANH as HINHANHTK', 'diadanhs.TENDIADANH', 'baiviets.NOIDUNG', 'baiviets.HINHANH as HINHANHBV', 'baiviets.id', 'users.id as ID_NGUOIDANG', 'diadanhs.id as ID_DIADANH')
            ->where('baiviets.ID_DIADANH', $id)
            ->Where('baiviets.deleted_at', '=', null)
            ->get();
        $response['BaiViet'] =  $baiviet;
        return json_encode($response);
    }

    public function ShowPostByIDUser($id_nguoidang)
    {
        $baiviet = DB::table('baiviets')
            ->join('users', 'ID_NGUOIDANG', '=', 'users.id')
            ->join('diadanhs', 'ID_DIADANH', '=', 'diadanhs.id')
            ->select('users.HOTEN', 'users.HINHANH as HINHANHTK', 'diadanhs.TENDIADANH', 'baiviets.NOIDUNG', 'baiviets.HINHANH as HINHANHBV', 'baiviets.id', 'users.id as ID_NGUOIDANG', 'diadanhs.id as ID_DIADANH')
            ->where('baiviets.ID_NGUOIDANG', $id_nguoidang)
            ->Where('baiviets.deleted_at', '=', null)
            ->get();
        $response['BaiViet'] =  $baiviet;
        return json_encode($response);
    }

    public function ShowAllPost()
    {
        $baiviet = DB::table('baiviets')
            ->join('users', 'ID_NGUOIDANG', '=', 'users.id')
            ->join('diadanhs', 'ID_DIADANH', '=', 'diadanhs.id')
            ->select('users.HOTEN', 'users.HINHANH as HINHANHTK', 'diadanhs.TENDIADANH', 'baiviets.NOIDUNG', 'baiviets.HINHANH as HINHANHBV', 'baiviets.id', 'users.id', 'diadanhs.id')
            ->Where('baiviets.deleted_at', '=', null)
            ->get();
        $response['BaiViet'] =  $baiviet;
        return json_encode($response);
    }

    public function ShowPostByIDPost($id)
    {
        // $baiviet = DB::table('baiviets')
        //     ->join('users', 'ID_NGUOIDANG', '=', 'users.id')
        //     ->join('diadanhs', 'ID_DIADANH', '=', 'diadanhs.id')
        //     ->select('users.HOTEN', 'users.HINHANH as HINHANHTK', 'diadanhs.TENDIADANH', 'baiviets.NOIDUNG', 'baiviets.HINHANH as HINHANHBV', 'baiviets.id', 'users.id as ID_NGUOIDANG', 'diadanhs.id as ID_DIADANH')
        //     ->where('baiviets.id', $id)
        //     ->Where('baiviets.deleted_at', '=', null)
        //     ->get();
        $baiviet = DB::select('SELECT users.HOTEN, users.HINHANH as HINHANHTK, diadanhs.TENDIADANH, baiviets.NOIDUNG, baiviets.HINHANH as HINHANHBV, baiviets.id, users.id as ID_NGUOIDANG, diadanhs.id as ID_DIADANH, COUNT(binhluans.ID_BAIVIET) as SOLUONGBL FROM baiviets,users,diadanhs,binhluans WHERE baiviets.ID_NGUOIDANG =users.id AND baiviets.ID_DIADANH =diadanhs.id AND baiviets.id=binhluans.ID_BAIVIET AND baiviets.id=? AND baiviets.deleted_at is NULL AND binhluans.deleted_at is NULL', [$id]);
        $response['BaiViet'] =  $baiviet;
        return json_encode($response);
    }

    public function ShowView($id)
    {
        $baiviet = DB::select('SELECT users.HOTEN, users.HINHANH as HINHANHTK, diadanhs.TENDIADANH, baiviets.NOIDUNG, baiviets.HINHANH as HINHANHBV, baiviets.id, users.id as ID_NGUOIDANG, diadanhs.id as ID_DIADANH, COUNT(luotxems.ID_BAIVIET) as SOLUONGLX FROM baiviets,users,diadanhs,luotxems WHERE baiviets.ID_NGUOIDANG =users.id AND baiviets.ID_DIADANH =diadanhs.id AND baiviets.id =luotxems.ID_BAIVIET AND baiviets.id=? AND baiviets.deleted_at is NULL;', [$id]);
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
