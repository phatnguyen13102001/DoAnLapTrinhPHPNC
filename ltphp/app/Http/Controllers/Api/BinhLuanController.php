<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\binhluan;

class BinhLuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ShowCommentByIDPost($id_baiviet)
    {
        $binhluan = DB::table('binhluans')
            ->join('users', 'ID_NGUOIBL', '=', 'users.id')
            ->select('binhluans.id', 'users.HOTEN', 'binhluans.ID_BAIVIET', 'users.HINHANH', 'binhluans.NOIDUNG')
            ->where('binhluans.ID_BAIVIET', $id_baiviet)
            ->Where('binhluans.deleted_at', '=', null)
            ->get();
        $response['BinhLuan'] =  $binhluan;
        return json_encode($response);
    }

    public function InsertComment(Request $request)
    {
        $binhluan = binhluan::create([
            'ID_BAIVIET' => $request->ID_BAIVIET,
            'ID_NGUOIBL' => $request->ID_NGUOIBL,
            'NOIDUNG' => $request->NOIDUNG
        ]);

        return json_encode($binhluan);
    }
}
