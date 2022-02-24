<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class baiviet extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "baiviets";

    protected $guarded = [];

    protected $fillable = [
        'ID_NGUOIDANG',
        'ID_DIADANH',
        'NOIDUNG',
        'HINHANH',
    ];

    public function taikhoan()
    {
        return $this->belongsTo('App\Models\User', 'ID_NGUOIDANG', 'id');
    }

    public function diadanh()
    {
        return $this->belongsTo('App\Models\diadanh', 'ID_DIADANH', 'id');
    }

    public function binhluan()
    {
        return $this->hasMany('App\Models\binhluan', 'ID_BAIVIET', 'ID_BINHLUAN');
    }

    public function luotthich()
    {
        return $this->hasMany('App\Models\luotthich', 'ID_BAIVIET', 'ID_LUOTTHICH');
    }

    public function luotxem()
    {
        return $this->hasMany('App\Models\luotxem', 'ID_BAIVIET', 'ID_LUOTXEM');
    }
}
