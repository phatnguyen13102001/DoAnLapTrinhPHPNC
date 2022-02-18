<?php

namespace App\Http\Controllers;

use App\Models\binhluan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BinhluanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lstbinhluan = binhluan::all();
        return view('home.binhluan', ['lstbinhluan' => $lstbinhluan]);
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
     * @param  \App\Models\binhluan  $binhluan
     * @return \Illuminate\Http\Response
     */
    public function show(binhluan $binhluan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\binhluan  $binhluan
     * @return \Illuminate\Http\Response
     */
    public function edit(binhluan $binhluan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\binhluan  $binhluan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, binhluan $binhluan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\binhluan  $binhluan
     * @return \Illuminate\Http\Response
     */
    public function destroy(binhluan $binhluan)
    {
        //
    }
}
