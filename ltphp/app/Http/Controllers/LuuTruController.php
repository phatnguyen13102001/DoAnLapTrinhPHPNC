<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\luutru;
use App\Models\diadanh;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class LuuTruController extends Controller
{
    protected function fixImage(luutru $luutru)
    {
        if (Storage::disk('public')->exists($luutru->HINHANH)) {
            $luutru->HINHANH = Storage::url($luutru->HINHANH);
        } else {
            $luutru->HINHANH = '/Images/NoImage.jpg';
        }
    }
    public function index()
    {
        $lstluutru = luutru::all();
        foreach ($lstluutru as $luutru) {
            $this->fixImage($luutru);
        }
        return view('home.luutru', ['lstluutru' => $lstluutru]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lstdiadanh = diadanh::all();
        return view('home.screenluutru.screenthemluutru', ['lstdiadanh' => $lstdiadanh]);
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
                'tenkhachsan' => 'required',
                'diachi' => 'required',
                'HINHANH' => 'required',
            ],
            [
                'tenkhachsan.required' => 'Tên Khách sạn Không Được Bỏ Trống',
                'diachi.required' => 'Địa Không Được Bỏ Trống',
                'HINHANH.required' => 'Hình Ảnh Không Được Bỏ Trống',
            ]
        );

        $luutru = new luutru;
        $luutru->fill([
            'ID_DIADANH' => $request->input('id_diadanh'),
            'TENKHACHSAN' => $request->input('tenkhachsan'),
            'DIACHI' => $request->input('diachi'),
            'HINHANH' => '',
        ]);
        $luutru->save();
        if ($request->hasFile('HINHANH')) {
            $luutru->HINHANH = $request->file('HINHANH')->store('images/luutru/', 'public');
        }
        $luutru->save();
        return Redirect::route('luutru.index', ['luutru' => $luutru]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tinhthanh  $tinhthanh
     * @return \Illuminate\Http\Response
     */
    public function show(luutru $luutru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tinhthanh  $tinhthanh
     * @return \Illuminate\Http\Response
     */
    public function edit(luutru $luutru)
    {
        $this->fixImage($luutru);
        $lstdiadanh = diadanh::all();
        return view(
            'home.screenluutru.screensualuutru',
            ['luutru' => $luutru, 'lstdiadanh' => $lstdiadanh]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\monan  
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, luutru $luutru)
    {
        $validatedData = $request->validate(
            [
                'tenkhachsan' => 'required',
                'diachi' => 'required',
            ],
            [
                'tenkhachsan.required' => 'Tên khách sạn Không Được Bỏ Trống',
                'diachi.required' => ' Địa chỉ Không Được Bỏ Trống',
            ]
        );
        if ($request->hasFile('HINHANH')) {
            $luutru->HINHANH = $request->file('HINHANH')->store('images/luutru/', 'public');
        }
        $luutru->fill([
            'ID_DIADANH' => $request->input('id_diadanh'),
            'TENKHACHSAN' => $request->input('tenkhachsan'),
            'DIACHI' => $request->input('diachi'),
            'HINHANH' => '',
        ]);
        $luutru->save();
        if ($request->hasFile('HINHANH')) {
            $luutru->HINHANH = $request->file('HINHANH')->store('images/luutru/', 'public');
        }
        $luutru->save();
        return Redirect::route('luutru.index', ['luutru' => $luutru]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\monan  $monan
     * @return \Illuminate\Http\Response
     */
    public function destroy(luutru $luutru)
    {
        $luutru->delete();
        return Redirect::route('luutru.index');
    }
}
