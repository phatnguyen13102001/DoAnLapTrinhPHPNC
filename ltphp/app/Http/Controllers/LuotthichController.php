<?php

namespace App\Http\Controllers;

use App\Models\luotthich;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LuotthichController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lstluotthich = luotthich::all();
        return view('home.luotthich', [
            'lstluotthich' => $lstluotthich
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
     * @param  \App\Models\luotthich  $luotthich
     * @return \Illuminate\Http\Response
     */
    public function show(luotthich $luotthich)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\luotthich  $luotthich
     * @return \Illuminate\Http\Response
     */
    public function edit(luotthich $luotthich)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\luotthich  $luotthich
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, luotthich $luotthich)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\luotthich  $luotthich
     * @return \Illuminate\Http\Response
     */
    public function destroy(luotthich $luotthich)
    {
        //
    }
}
