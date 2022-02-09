<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TinhThanhController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tinhthanh = DB::table('tinhthanhs')->where('ID_MIEN', $id)->Where('deleted_at', '=', null)->get();
        $response['TinhThanh'] =  $tinhthanh;
        return json_encode($response);
    }
}
