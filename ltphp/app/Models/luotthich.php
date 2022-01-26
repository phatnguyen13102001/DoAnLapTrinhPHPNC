<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class luotthich extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'ID_LUOTTHICH',
        'ID_NGUOITHICH',
        'ID_BAIVIET',
        'TRANGTHAI',
    ];

    public function taikhoan()
    {
        return $this->belongsTo('App\Models\User','ID_NGUOITHICH','ID_LUOTTHICH');
    }

    public function baiviet()
    {
        return $this->belongsTo('App\Models\baiviet','ID_BAIVIET','ID_LUOTTHICH');
    }
}
