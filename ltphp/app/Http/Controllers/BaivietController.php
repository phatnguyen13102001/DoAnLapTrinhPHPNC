<?php

namespace App\Http\Controllers;

use App\Models\baiviet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class BaivietController extends Controller
{
    protected function fixImage(baiviet $baiviet)
    {
        if (Storage::disk('public')->exists($baiviet->HINHANH)) {
            $baiviet->HINHANH = Storage::url($baiviet->HINHANH);
        } else {
            $baiviet->HINHANH = '/Images/NoImage.jpg';
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lstbaiviet = baiviet::all();
        foreach ($lstbaiviet as $baiviet) {
            $this->fixImage($baiviet);
        }
        return view('home.baiviet', ['lstbaiviet' => $lstbaiviet]);
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
     * @param  \App\Models\baiviet  $baiviet
     * @return \Illuminate\Http\Response
     */
    public function show(baiviet $baiviet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\baiviet  $baiviet
     * @return \Illuminate\Http\Response
     */
    public function edit(baiviet $baiviet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\baiviet  $baiviet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, baiviet $baiviet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\baiviet  $baiviet
     * @return \Illuminate\Http\Response
     */
    public function destroy(baiviet $baiviet)
    {
        $baiviet->delete();
        return Redirect::route('baiviet.index');
    }
}
