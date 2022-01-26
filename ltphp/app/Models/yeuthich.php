<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class yeuthich extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'ID_YEUTHICH',
        'ID_NGUOITHICH',
        'ID_DIADANH',
        'TRANGTHAI',
    ];

    public function taikhoan()
    {
        return $this->belongsTo('App\Models\User','ID_NGUOITHICH','ID_YEUTHICH');
    }

    public function diadanh()
    {
        return $this->belongsTo('App\Models\diadanh','ID_DIADANH','ID_YEUTHICH');
    }
}
