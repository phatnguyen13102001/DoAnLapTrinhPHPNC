<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\yeuthich;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class YeuThichController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function favorite_handle($id_nguoithich, $id_diadanh)
    {
        $yeuthich = DB::table('yeuthiches')
            ->select('*')
            ->Where('ID_NGUOITHICH', '=', $id_nguoithich)
            ->Where('ID_DIADANH', '=', $id_diadanh)
            ->get();

        $data =
            json_decode($yeuthich, true);
        $yeuthich1 = $yeuthich->count();
        if ($yeuthich1 == 1) {
            if ($data[0]['TRANGTHAI'] == 1) {
                $updated = DB::update('update yeuthiches set TRANGTHAI = ? where ID_NGUOITHICH = ? AND ID_DIADANH= ?', [0, $id_nguoithich, $id_diadanh]);
            } else {
                $updated = DB::update('update yeuthiches set TRANGTHAI = ? where ID_NGUOITHICH = ? AND ID_DIADANH= ?', [1, $id_nguoithich, $id_diadanh]);
            }
        } else {
            $insert =
                DB::insert('insert into yeuthiches (ID_NGUOITHICH, ID_DIADANH) values (?, ?)', [$id_nguoithich, $id_diadanh]);
        }
        echo json_encode($yeuthich);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ShowFavoriteBySite($id_diadanh)
    {
        $yeuthich = DB::select("select COUNT(yeuthiches.ID_DIADANH) AS 'YEUTHICH' from yeuthiches where ID_DIADANH=? and TRANGTHAI =?", [$id_diadanh, 1]);
        $response['YeuThich'] =  $yeuthich;
        return json_encode($response);
    }

    public function ShowStatusFavorite($id_diadanh, $id_nguoithich)
    {
        $yeuthich = DB::select("select TRANGTHAI from yeuthiches where ID_DIADANH=? and ID_NGUOITHICH =?", [$id_diadanh, $id_nguoithich]);
        $response['TrangThaiYeuThich'] =  $yeuthich;
        return json_encode($response);
    }

    public function ShowFavoriteByIDUser($id_nguoithich)
    {
        $diadanh = DB::select("SELECT diadanhs.id,diadanhs.ID_TINH,diadanhs.ID_DANHMUC,diadanhs.TENDIADANH,diadanhs.HINHANH,diadanhs.DIACHI,diadanhs.KINHDO,diadanhs.VIDO,diadanhs.MOTA,COUNT(yeuthiches.ID_DIADANH) AS 'YEUTHICH' FROM diadanhs,yeuthiches WHERE diadanhs.id=yeuthiches.ID_DIADANH AND TRANGTHAI=1 AND yeuthiches.ID_NGUOITHICH=? GROUP BY diadanhs.id,diadanhs.ID_DANHMUC,diadanhs.ID_TINH,diadanhs.TENDIADANH,diadanhs.HINHANH,diadanhs.DIACHI,diadanhs.KINHDO,diadanhs.VIDO,diadanhs.MOTA,diadanhs.created_at,diadanhs.updated_at,diadanhs.deleted_at,yeuthiches.ID_DIADANH,yeuthiches.id,yeuthiches.ID_NGUOITHICH,yeuthiches.TRANGTHAI,yeuthiches.created_at,yeuthiches.updated_at,yeuthiches.deleted_at ORDER BY COUNT(yeuthiches.ID_DIADANH) DESC LIMIT 0,10", [$id_nguoithich]);
        $response['YeuThich'] =  $diadanh;
        return json_encode($response);
    }
}
