<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table ="users";

    protected $guarded = [];
    
    protected $fillable = [
        'ID_TAIKHOAN',
        'HINHANH',
        'HOTEN',
        'email',
        'password',
        'SDT',
        'QUYEN',
    ];

    public function baiviet()
    {
        return $this->hasMany('App\Models\baiviet','ID_NGUOIDANG','ID_BAIVIET');
    }

    public function binhluan()
    {
        return $this->hasMany('App\Models\binhluan','ID_NGUOIBL','ID_BINHLUAN');
    }

    public function luotxem()
    {
        return $this->hasMany('App\Models\luotxem','ID_NGUOIXEM','ID_LUOTXEM');
    }

    public function yeuthich()
    {
        return $this->hasMany('App\Models\yeuthich','ID_NGUOITHICH','ID_YEUTHICH');
    }

    public function luotthich()
    {
        return $this->hasMany('App\Models\luotthich','ID_NGUOITHICH','ID_LUOTTHICH');
    }
}
