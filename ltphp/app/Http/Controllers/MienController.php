<?php

namespace App\Http\Controllers;

use App\Models\mien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class MienController extends Controller
{
    protected function fixImage(mien $mien)
    {
        if (Storage::disk('public')->exists($mien->HINHANH)) {
            $mien->HINHANH = Storage::url($mien->HINHANH);
        } else {
            $mien->HINHANH = '/uploads/NoImage.jpg';
        }
    }
    public function index()
    {

        $lstVungMien = mien::all();
        foreach ($lstVungMien as $mien) {
            $this->fixImage($mien);
        }
        return view('home.mien', [
            'lstVungMien' => $lstVungMien
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.screenmien.screenthemmien');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mien = new mien;
        $mien->fill([
            'TENMIEN' => $request->input('tenmien'),
            'HINHANH' => ''
        ]);
        $mien->save();
        if ($request->hasFile('HINHANH')) {
            $mien->HINHANH = $request->file('HINHANH')->store('images/mien/', 'public');
        }
        $mien->save();
        return Redirect::route('mien.index', ['mien' => $mien]);
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
        return view('home.screenmien.screensuamien', [
            'mien' => $mien
        ]);
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
        if ($request->hasFile('HINHANH')) {
            $mien->HINHANH = $request->file('HINHANH')->store('images/mien/', 'public');
        }
        $mien->fill([
            'TENMIEN' => $request->input('tenmien'),
        ]);
        $mien->save();
        return Redirect::route('mien.index', ['mien' => $mien]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mien  $mien
     * @return \Illuminate\Http\Response
     */
    public function destroy(mien $mien)
    {
        $mien->delete();
        return Redirect::route('mien.index');
    }
}
