<?php

namespace App\Http\Controllers;

use App\Models\danhmuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class DanhmucController extends Controller
{
    protected function fixImage(danhmuc $danhmuc)
    {
        if (Storage::disk('public')->exists($danhmuc->HINHANH)) {
            $danhmuc->HINHANH = Storage::url($danhmuc->HINHANH);
        } else {
            $danhmuc->HINHANH = '/uploads/NoImage.jpg';
        }
    }

    public function index()
    {
        $lstdanhmuc = danhmuc::all();
        foreach ($lstdanhmuc as $danhmuc) {
            $this->fixImage($danhmuc);
        }
        return view('home.danhmuc', [
            'lstdanhmuc' => $lstdanhmuc
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.screendanhmuc.screenthemdanhmuc');
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
                'tendanhmuc' => 'required',
                'HINHANH' => 'required',
            ],
            [
                'tendanhmuc.required' => 'Tên Danh Mục Không Được Bỏ Trống',
                'HINHANH.required' => 'Hình Ảnh Không Được Bỏ Trống',
            ]
        );
        $danhmuc = new danhmuc;
        $danhmuc->fill([
            'TENDANHMUC' => $request->input('tendanhmuc'),
            'HINHANH' => '',
        ]);
        $danhmuc->save();
        if ($request->hasFile('HINHANH')) {
            $danhmuc->HINHANH = $request->file('HINHANH')->store('images/danhmuc/', 'public');
        }
        $danhmuc->save();
        return Redirect::route('danhmuc.index', ['danhmuc' => $danhmuc]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\danhmuc  $danhmuc
     * @return \Illuminate\Http\Response
     */
    public function show(danhmuc $danhmuc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\danhmuc  $danhmuc
     * @return \Illuminate\Http\Response
     */
    public function edit(danhmuc $danhmuc)
    {
        $this->fixImage($danhmuc);
        return view('home.screendanhmuc.screensuadanhmuc', ['danhmuc' => $danhmuc]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\danhmuc  $danhmuc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, danhmuc $danhmuc)
    {
        $validatedData = $request->validate(
            [
                'tendanhmuc' => 'required',
            ],
            [
                'tendanhmuc.required' => 'Tên Danh Mục Không Được Bỏ Trống',
            ]
        );
        if ($request->hasFile('HINHANH')) {
            $danhmuc->HINHANH = $request->file('HINHANH')->store('images/danhmuc/', 'public');
        }
        $danhmuc->fill([
            'TENDANHMUC' => $request->input('tendanhmuc'),
        ]);
        $danhmuc->save();
        return Redirect::route('danhmuc.index', ['danhmuc' => $danhmuc]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\danhmuc  $danhmuc
     * @return \Illuminate\Http\Response
     */
    public function destroy(danhmuc $danhmuc)
    {
        $danhmuc->delete();
        return Redirect::route('danhmuc.index');
    }
}
