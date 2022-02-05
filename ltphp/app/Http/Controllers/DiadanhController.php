<?php

namespace App\Http\Controllers;

use App\Models\diadanh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DiadanhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lstdiadanh = diadanh::all();
        return view('home.diadanh', [
            'lstdiadanh' => $lstdiadanh
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
     * @param  \App\Models\diadanh  $diadanh
     * @return \Illuminate\Http\Response
     */
    public function show(diadanh $diadanh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\diadanh  $diadanh
     * @return \Illuminate\Http\Response
     */
    public function edit(diadanh $diadanh)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\diadanh  $diadanh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, diadanh $diadanh)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\diadanh  $diadanh
     * @return \Illuminate\Http\Response
     */
    public function destroy(diadanh $diadanh)
    {
        //
    }
}
