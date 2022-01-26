<?php

namespace App\Http\Controllers;

use App\Models\tinhthanh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TinhthanhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lstTinhThanh = DB::table('tinhthanhs')
        ->join('vungmiens', 'ID_MIEN', '=', 'vungmiens.id')
        ->select('tinhthanhs.id','vungmiens.TENMIEN','tinhthanhs.TENTINH','tinhthanhs.created_at','tinhthanhs.updated_at','tinhthanhs.deleted_at')
        ->get();

        return view('home.tinhthanh',[
            'lstTinhThanh'=>$lstTinhThanh
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\tinhthanh  $tinhthanh
     * @return \Illuminate\Http\Response
     */
    public function show(tinhthanh $tinhthanh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tinhthanh  $tinhthanh
     * @return \Illuminate\Http\Response
     */
    public function edit(tinhthanh $tinhthanh)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tinhthanh  $tinhthanh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tinhthanh $tinhthanh)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tinhthanh  $tinhthanh
     * @return \Illuminate\Http\Response
     */
    public function destroy(tinhthanh $tinhthanh)
    {
        //
    }
}
