<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\diadanh;
use App\Models\yeuthich;
use Illuminate\Support\Facades\DB;

class DiaDanhController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ShowSiteByProvince($id)
    {
        $diadanh = DB::table('diadanhs')->where('ID_TINH', $id)->Where('deleted_at', '=', null)->get();
        $response['DiaDanh'] =  $diadanh;
        return json_encode($response);
    }

    public function ShowSiteByCategory($id)
    {
        $diadanh = DB::table('diadanhs')->where('ID_DANHMUC', $id)->Where('deleted_at', '=', null)->get();
        $response['DiaDanh'] =  $diadanh;
        return json_encode($response);
    }

    public function ShowSiteByIDSite($id)
    {
        $diadanh = DB::table('diadanhs')->where('id', $id)->Where('deleted_at', '=', null)->get();
        $response['DiaDanh'] =  $diadanh;
        return json_encode($response);
    }

    public function ShowHotSite()
    {
        // $diadanh = DB::table('diadanhs')
        //     ->selectRaw('count(yeuthiches.ID_DIADANH) as YEUTHICH, diadanhs.id,diadanhs.ID_TINH,diadanhs.ID_DANHMUC,diadanhs.TENDIADANH,diadanhs.HINHANH,diadanhs.DIACHI,diadanhs.KINHDO,diadanhs.VIDO,diadanhs.MOTA')
        //     ->join('yeuthiches', 'ID_DIADANH', '=', 'yeuthiches.ID_DIADANH')
        //     ->Where('yeuthiches.TRANGTHAI', '=', 1)
        //     ->Where('diadanhs.deleted_at', '=', null)
        //     ->groupBy('yeuthiches.ID_DIADANH')
        //     ->orderByDesc('YEUTHICH')
        //     ->limit(2)
        //     ->get();
        $diadanh = DB::select("SELECT diadanhs.id,diadanhs.ID_TINH,diadanhs.ID_DANHMUC,diadanhs.TENDIADANH,diadanhs.HINHANH,diadanhs.DIACHI,diadanhs.KINHDO,diadanhs.VIDO,diadanhs.MOTA,COUNT(yeuthiches.ID_DIADANH) AS 'YEUTHICH' FROM diadanhs,yeuthiches WHERE diadanhs.id=yeuthiches.ID_DIADANH AND TRANGTHAI=1 GROUP BY yeuthiches.ID_DIADANH ORDER BY COUNT(yeuthiches.ID_DIADANH) DESC LIMIT 0,10;");
        $response['DiaDanhNoiBat'] =  $diadanh;
        return json_encode($response);
    }
    public function ShowAllSite()
    {
        $diadanh = diadanh::all();
        $response['DIADANH'] = $diadanh;
        return json_encode($response);
    }
}
