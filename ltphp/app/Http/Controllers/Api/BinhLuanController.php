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
            ->select('*')
            ->where('binhluans.ID_BAIVIET', $id_baiviet)
            ->Where('baiviets.deleted_at', '=', null)
            ->get();
        $response['BinhLuan'] =  $binhluan;
        return json_encode($response);
    }

    public function InsertComment(Request $request)
    {
        $binhluan = binhluan::create([
            'ID_BAIVIET' => $request->ID_BAIVIET,
            'ID_NGUOIBL' => $request->ID_NGUOIBL,
            'HINHANHTK' => $request->HINHANHTK,
            'NOIDUNG' => $request->NOIDUNG
        ]);

        return json_encode($binhluan);
    }
}
