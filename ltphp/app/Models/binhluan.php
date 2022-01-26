<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class binhluan extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'ID_BINHLUAN',
        'ID_NGUOIBL',
        'ID_BAIVIET',
        'TRANGTHAI',
    ];

    public function taikhoan()
    {
        return $this->belongsTo('App\Models\User','ID_NGUOIBL','ID_BINHLUAN');
    }

    public function baiviet()
    {
        return $this->belongsTo('App\Models\User','ID_BAIVIET','ID_BINHLUAN');
    }
}
