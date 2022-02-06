<?php

namespace App\Http\Controllers;

use App\Models\mien;
use App\Models\tinhthanh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TinhthanhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lstTinhThanh = tinhthanh::all();
        return view('home.tinhthanh', [
            'lstTinhThanh' => $lstTinhThanh
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lstmien = mien::all();
        return view('home.screentinhthanh.screenthemtinhthanh', ['lstmien' => $lstmien]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'tentinh' => 'required',
            ],
            [
                'tentinh.required' => 'Tên Tỉnh Thành Không Được Bỏ Trống',
            ]
        );

        $tinhthanh = new tinhthanh;
        $tinhthanh->fill([
            'ID_MIEN' => $request->input('id_mien'),
            'TENTINH' => $request->input('tentinh'),
        ]);
        $tinhthanh->save();
        return Redirect::route('tinhthanh.index', ['tinhthanh' => $tinhthanh]);
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
        $lstmien = mien::all();
        return view(
            'home.screentinhthanh.screensuatinhthanh',
            ['tinhthanh' => $tinhthanh, 'lstmien' => $lstmien]
        );
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
        $validatedData = $request->validate(
            [
                'tentinh' => 'required',
            ],
            [
                'tentinh.required' => 'Tên Tỉnh Thành Không Được Bỏ Trống',
            ]
        );

        $tinhthanh->fill([
            'ID_MIEN' => $request->input('id_mien'),
            'TENTINH' => $request->input('tentinh'),
        ]);
        $tinhthanh->save();
        return Redirect::route('tinhthanh.index', ['tinhthanh' => $tinhthanh]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tinhthanh  $tinhthanh
     * @return \Illuminate\Http\Response
     */
    public function destroy(tinhthanh $tinhthanh)
    {
        $tinhthanh->delete();
        return Redirect::route('tinhthanh.index');
    }
}
