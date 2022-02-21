<?php

namespace App\Http\Controllers;

use App\Models\slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    protected function fixImage(slider $slider)
    {
        if (Storage::disk('public')->exists($slider->HINHANH)) {
            $slider->HINHANH = Storage::url($slider->HINHANH);
        } else {
            $slider->HINHANH = '/Images/NoImage.jpg';
        }
    }

    public function index()
    {
        $lstslider = slider::all();
        foreach ($lstslider as $slider) {
            $this->fixImage($slider);
        }
        return view('home.slider', [
            'lstslider' => $lstslider
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.screenslider.screenthemslider');
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
                'HINHANH' => 'required',
            ],
            [
                'HINHANH.required' => 'Hình Ảnh Không Được Bỏ Trống',
            ]
        );
        $slider = new slider;
        $slider->fill([
            'HINHANH' => '',
        ]);
        $slider->save();
        if ($request->hasFile('HINHANH')) {
            $slider->HINHANH = $request->file('HINHANH')->store('images/slider/', 'public');
        }
        $slider->save();
        return Redirect::route('slider.index', ['slider' => $slider]);
    }


    public function show(slider $slider)
    {
        //
    }


    public function edit(slider $slider)
    {
        $this->fixImage($slider);
        return view('home.screenslider.screensuaslider', ['slider' => $slider]);
    }

    public function update(Request $request, slider $slider)
    {

        if ($request->hasFile('HINHANH')) {
            $slider->HINHANH = $request->file('HINHANH')->store('images/slider/', 'public');
        }
        $slider->save();
        return Redirect::route('slider.index', ['slider' => $slider]);
    }

    public function destroy(slider $slider)
    {
        $slider->delete();
        return Redirect::route('slider.index');
    }
}
