<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\dexuat;

class DeXuatDiaDanhController extends Controller
{
   public function offersite(Request $request )
   {
        $dexuat = new dexuat;
        $dexuat->ID_TAIKHOAN= $request->ID_TAIKHOAN;
        $dexuat->TENDANHMUC = $request->TENDANHMUC;
        $dexuat->TENDIADANH = $request->TENDIADANH;
        $dexuat->TENTINHTHANH = $request->TENTINHTHANH;
        $dexuat->DIACHI = $request->DIACHI;
        $dexuat->HINHANH = $request->file('HINHANH');
        if ($request->hasFile('HINHANH'))
        {
            $dexuat->HINHANH = $request->file('HINHANH')->store('images/dexuat/', 'public');
        } else {
            return response()->json('image null');
        }
        if ( $dexuat->save()) {
            return response()->json([
                "DeXuat" =>  $dexuat,
                "msg" => "Đề Xuất Thành Công"
            ], 201);
        } else {
            return response()->json([
                "DeXuat" => null,
                'msg' => "Đề Xuất Thất Bại"
            ], 400);
        }
   }
}
