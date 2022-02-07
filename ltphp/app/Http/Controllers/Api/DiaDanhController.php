<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\diadanh;
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
}
