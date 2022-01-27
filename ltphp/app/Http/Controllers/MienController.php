<?php

namespace App\Http\Controllers;

use App\Models\mien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
class MienController extends Controller
{
    protected function fiximage(mien $mien){
        if(Storage::disk('public')->exists($mien->HINHANH)){
            $mien->HINHANH = Storage::url($mien->HINHANH);
        }
    else{

    }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $lstVungMien = DB::table('vungmiens')
        ->select('*')
        ->get();
       // foreach($lstVungMien as $vungmien){
         //   $this->fiximage($vungmien);
        //}
        return view('home.mien',[
            'lstVungMien'=>$lstVungMien
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
     * @param  \App\Models\mien  $mien
     * @return \Illuminate\Http\Response
     */
    public function show(mien $mien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mien  $mien
     * @return \Illuminate\Http\Response
     */
    public function edit(mien $mien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mien  $mien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mien $mien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mien  $mien
     * @return \Illuminate\Http\Response
     */
    public function destroy(mien $mien)
    {
        //
    }
}
