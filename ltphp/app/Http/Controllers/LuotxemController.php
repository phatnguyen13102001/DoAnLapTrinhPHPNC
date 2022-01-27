<?php

namespace App\Http\Controllers;

use App\Models\luotxem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LuotxemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lstluotxem = DB::table('luotxems')-> select('*')-> get();
        return view('home.luotxem', ['lstluotxem' => $lstluotxem]);
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
     * @param  \App\Models\luotxem  $luotxem
     * @return \Illuminate\Http\Response
     */
    public function show(luotxem $luotxem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\luotxem  $luotxem
     * @return \Illuminate\Http\Response
     */
    public function edit(luotxem $luotxem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\luotxem  $luotxem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, luotxem $luotxem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\luotxem  $luotxem
     * @return \Illuminate\Http\Response
     */
    public function destroy(luotxem $luotxem)
    {
        //
    }
}
