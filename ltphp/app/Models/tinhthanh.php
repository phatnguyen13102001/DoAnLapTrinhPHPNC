<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tinhthanh extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "tinhthanhs";

    protected $guarded = [];

    protected $fillable = [
        'ID_MIEN',
        'TENTINH',
    ];

    public function diadanh()
    {
        return $this->hasMany('App\Models\diadanh', 'ID_TINHTHANH', 'ID_DIADANH');
    }

    public function mien()
    {
        return $this->belongsTo('App\Models\mien', 'ID_MIEN', 'id');
    }
}
