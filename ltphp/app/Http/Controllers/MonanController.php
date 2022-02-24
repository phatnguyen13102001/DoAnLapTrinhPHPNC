<?php

namespace App\Http\Controllers;

use App\Models\monan;
use App\Models\diadanh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class MonanController extends Controller
{

    protected function fixImage(monan $monan)
    {
        if (Storage::disk('public')->exists($monan->HINHANH)) {
            $monan->HINHANH = Storage::url($monan->HINHANH);
        } else {
            $monan->HINHANH = '/Images/NoImage.jpg';
        }
    }
    public function index()
    {
        $lstmonan = monan::all();
        foreach ($lstmonan as $monan) {
            $this->fixImage($monan);
        }
        return view('home.monan', ['lstmonan' => $lstmonan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lstdiadanh = diadanh::all();
        return view('home.screenmonan.screenthemmonan', ['lstdiadanh' => $lstdiadanh]);
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
                'tenmonan' => 'required',
                'HINHANH' => 'required',
            ],
            [
                'tenmonan.required' => 'Tên món ăn Không Được Bỏ Trống',
                'HINHANH.required' => 'Hình Ảnh Không Được Bỏ Trống',
            ]
        );

        $monan = new monan;
        $monan->fill([
            'ID_DIADANH' => $request->input('id_diadanh'),
            'TENMONAN' => $request->input('tenmonan'),
            'HINHANH' => '',
        ]);
        $monan->save();
        if ($request->hasFile('HINHANH')) {
            $monan->HINHANH = $request->file('HINHANH')->store('images/monan/', 'public');
        }
        $monan->save();
        return Redirect::route('monan.index', ['monan' => $monan]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tinhthanh  $tinhthanh
     * @return \Illuminate\Http\Response
     */
    public function show(monan $monan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tinhthanh  $tinhthanh
     * @return \Illuminate\Http\Response
     */
    public function edit(monan $monan)
    {
        $this->fixImage($monan);
        $lstdiadanh = diadanh::all();
        return view(
            'home.screenmonan.screensuamonan',
            ['monan' => $monan, 'lstdiadanh' => $lstdiadanh]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\monan  
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, monan $monan)
    {
        $validatedData = $request->validate(
            [
                'tenmonan' => 'required',
            ],
            [
                'tenmonan.required' => 'Tên món ăn Không Được Bỏ Trống',
            ]
        );
        if ($request->hasFile('HINHANH')) {
            $monan->HINHANH = $request->file('HINHANH')->store('images/monan/', 'public');
        }
        $monan->fill([
            'ID_DIADANH' => $request->input('id_diadanh'),
            'TENMONAN' => $request->input('tenmonan'),
            'HINHANH' => '',
        ]);
        $monan->save();
        if ($request->hasFile('HINHANH')) {
            $monan->HINHANH = $request->file('HINHANH')->store('images/monan/', 'public');
        }
        $monan->save();
        return Redirect::route('monan.index', ['monan' => $monan]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\monan  $monan
     * @return \Illuminate\Http\Response
     */
    public function destroy(monan $monan)
    {
        $monan->delete();
        return Redirect::route('monan.index');
    }
}
