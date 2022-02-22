<?php

namespace App\Http\Controllers;

use App\Models\dexuat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class DexuatdiadanhController extends Controller
{
    protected function fixImage(dexuat $dexuat)
    {
        if (Storage::disk('public')->exists($dexuat->HINHANH)) {
            $dexuat->HINHANH = Storage::url($dexuat->HINHANH);
        } else {
            $dexuat->HINHANH = '/Images/NoImage.jpg';
        }
    }

    public function index()
    {
        $lstdexuat = dexuat::all();
        foreach ( $lstdexuat as $dexuat) {
            $this->fixImage($dexuat);
        }
        return view('home.dexuat', [
            'lstdexuat'=>$lstdexuat
        ]);
    }
    public function destroy(dexuat $dexuat)
    {
        $dexuat->delete();
        return Redirect::route('dexuat.index');
    }
}
