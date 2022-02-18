<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class luotxem extends Model
{
    use HasFactory;

    protected $fillable = [
        'ID_LUOTXEM',
        'ID_NGUOIXEM',
        'ID_BAIVIET',
        'TRANGTHAI',
    ];

    public function taikhoan()
    {
        return $this->belongsTo('App\Models\User', 'ID_NGUOIXEM', 'id');
    }

    public function baiviet()
    {
        return $this->belongsTo('App\Models\baiviet', 'ID_BAIVIET', 'id');
    }
}
