<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
class TaikhoanController extends Controller
{
    protected function fixImage(User $taikhoan)
    {
        if (Storage::disk('public')->exists($taikhoan->HINHANH)) {
            $taikhoan->HINHANH = Storage::url($taikhoan->HINHANH);
        } else {
            $taikhoan->HINHANH = '/Images/NoImage.jpg';
        }
    }
    public function index()
    {
        $lstTaiKhoan = User::all();
        foreach ($lstTaiKhoan as $taikhoan) {
            $this->fixImage($taikhoan);
        }
        return view('home.taikhoan', ['lstTaiKhoan' => $lstTaiKhoan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.screentaikhoan.screenthemtaikhoan');
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
                'hoten' => 'required',
                'email' => 'required|unique:users|email',
                'matkhau' => 'required',
                'sodienthoai' => 'required',
                'HINHANH' => 'required',
            ],
            [
                'hoten.required' => 'Họ Tên Không Được Bỏ Trống',
                'email.required' => 'Email Không Được Bỏ Trống',
                'email.email' => 'Email Không Đúng Định Dạng',
                'email.unique' => 'Email Đã Tồn Tại',
                'matkhau.required' => 'Mật Khẩu Không Được Bỏ Trống',
                'sodienthoai.required' => 'Số Điện Thoại Không Được Bỏ Trống',
                'HINHANH.required' => 'Hình Ảnh Không Được Bỏ Trống',
            ]
        );

        $taikhoan = new User;
        $taikhoan->fill([
            'HOTEN' => $request->input('hoten'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('matkhau')),
            'SDT' => $request->input('sodienthoai'),
            'HINHANH' => '',
            'QUYEN' => $request->input('phanquyen'),
        ]);
        $taikhoan->save();
        if ($request->hasFile('HINHANH')) {
            $taikhoan->HINHANH = $request->file('HINHANH')->store('images/avatar/', 'public');
        }
        $taikhoan->save();
        return Redirect::route('taikhoan.index', ['taikhoan' => $taikhoan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $taikhoan
     * @return \Illuminate\Http\Response
     */
    public function edit(User $taikhoan)
    {
        $this->fixImage($taikhoan);
        return view('home.screentaikhoan.screensuataikhoan', ['taikhoan' => $taikhoan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $taikhoan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $taikhoan)
    {
        $validatedData = $request->validate(
            [
                'hoten' => 'required',
                'matkhau' => 'required',
                'sodienthoai' => 'required',
            ],
            [
                'hoten.required' => 'Họ Tên Không Được Bỏ Trống',
                'matkhau.required' => 'Mật Khẩu Không Được Bỏ Trống',
                'sodienthoai.required' => 'Số Điện Thoại Không Được Bỏ Trống',
            ]
        );
        if ($request->hasFile('HINHANH')) {
            $taikhoan->HINHANH = $request->file('HINHANH')->store('images/avatar/', 'public');
        }
        $taikhoan->fill([
            'HOTEN' => $request->input('hoten'),
            'password' => bcrypt($request->input('matkhau')),
            'SDT' => $request->input('sodienthoai'),
            'QUYEN' => $request->input('phanquyen'),
        ]);
        $taikhoan->save();
        return Redirect::route('taikhoan.index', ['taikhoan' => $taikhoan]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $taikhoan
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $taikhoan)
    {
        $taikhoan->delete();
        return Redirect::route('taikhoan.index');
    }
}
