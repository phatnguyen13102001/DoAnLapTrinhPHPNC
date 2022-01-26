<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tinhthanh extends Model
{
    use HasFactory;

    protected $table="tinhthanhs";

    protected $fillable = [
        'ID_TINH',
        'ID_MIEN',
        'TENTINH',
    ];

    public function diadanh()
    {
        return $this->hasMany('App\Models\diadanh','ID_TINHTHANH','ID_DIADANH');
    }

    public function mien()
    {
        return $this->belongsTo('App\Models\mien','ID_MIEN','ID_TINHTHANH');
    }
}
