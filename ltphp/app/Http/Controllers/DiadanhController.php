<?php

namespace App\Http\Controllers;

use App\Models\diadanh;
use App\Models\danhmuc;
use App\Models\tinhthanh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class DiadanhController extends Controller
{
    protected function fixImage(diadanh $diadanh)
    {
        if (Storage::disk('public')->exists($diadanh->HINHANH)) {
            $diadanh->HINHANH = Storage::url($diadanh->HINHANH);
        } else {
            $diadanh->HINHANH = '/Images/NoImage.jpg';
        }
    }
    public function index()
    {
        $lstdiadanh = diadanh::orderby('created_at', 'DESC')->paginate(6);
        //$lstdiadanh = diadanh::all();
        foreach ($lstdiadanh as $diadanh) {
            $this->fixImage($diadanh);
        }
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
        $lstdanhmuc = danhmuc::all();
        $lsttinhthanh = tinhthanh::all();
        return view(
            'home.screendiadanh.screenthemdiadanh',
            ['lstdanhmuc' => $lstdanhmuc],
            ['lsttinhthanh' => $lsttinhthanh]
        );
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
                'tendiadanh' => 'required',
                'HINHANH' => 'required',
                'diachi' => 'required',
                'kinhdo' => 'required',
                'vido' => 'required',
                'mota' => 'required',
            ],
            [
                'tendiadanh.required' => 'Tên Địa Danh Không Được Bỏ Trống',
                'HINHANH.required' => 'Hình Ảnh Không Được Bỏ Trống',
                'diachi.required' => 'Địa Chỉ Không Được Bỏ Trống',
                'kinhdo.required' => 'Kinh Độ Không Được Bỏ Trống',
                'vido.required' => 'Vĩ Độ Không Được Bỏ Trống',
                'mota.required' => 'Mô Tả Không Được Bỏ Trống',
            ]
        );

        $diadanh = new diadanh;
        $diadanh->fill([
            'ID_DANHMUC' => $request->input('iddanhmuc'),
            'ID_TINH' => $request->input('idtinh'),
            'TENDIADANH' => $request->input('tendiadanh'),
            'HINHANH' => '',
            'DIACHI' => $request->input('diachi'),
            'KINHDO' => $request->input('kinhdo'),
            'VIDO' => $request->input('vido'),
            'MOTA' => $request->input('mota')
        ]);
        $diadanh->save();
        if ($request->hasFile('HINHANH')) {
            $diadanh->HINHANH = $request->file('HINHANH')->store('images/diadanh/', 'public');
        }
        $diadanh->save();
        return Redirect::route('diadanh.index', ['diadanh' => $diadanh]);
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
        $this->fixImage($diadanh);
        $lstdanhmuc = danhmuc::all();
        $lsttinhthanh = tinhthanh::all();
        return view(
            'home.screendiadanh.screensuadiadanh',
            ['diadanh' => $diadanh, 'lstdanhmuc' => $lstdanhmuc, 'lsttinhthanh' => $lsttinhthanh]
        );
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
        $validatedData = $request->validate(
            [
                'tendiadanh' => 'required',
                'diachi' => 'required',
                'kinhdo' => 'required',
                'vido' => 'required',
            ],
            [
                'tendiadanh.required' => 'Tên Địa Danh Không Được Bỏ Trống',
                'diachi.required' => 'Địa Chỉ Không Được Bỏ Trống',
                'kinhdo.required' => 'Kinh Độ Không Được Bỏ Trống',
                'vido.required' => 'Vĩ Độ Không Được Bỏ Trống',
            ]
        );

        if ($request->hasFile('HINHANH')) {
            $diadanh->HINHANH = $request->file('HINHANH')->store('images/diadanh/', 'public');
        }
        $diadanh->fill([
            'ID_DANHMUC' => $request->input('iddanhmuc'),
            'ID_TINH' => $request->input('idtinh'),
            'TENDIADANH' => $request->input('tendiadanh'),
            'DIACHI' => $request->input('diachi'),
            'KINHDO' => $request->input('kinhdo'),
            'VIDO' => $request->input('vido'),
            'MOTA' => $request->input('mota')
        ]);
        $diadanh->save();
        return Redirect::route('diadanh.index', ['diadanh' => $diadanh]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\diadanh  $diadanh
     * @return \Illuminate\Http\Response
     */
    public function destroy(diadanh $diadanh)
    {
        $diadanh->delete();
        return Redirect::route('diadanh.index');
    }
}
