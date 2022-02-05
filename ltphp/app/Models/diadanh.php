<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diadanh extends Model
{
    use HasFactory;
    protected $table = "diadanhs";

    protected $guarded = [];

    protected $fillable = [
        'ID_DANHMUC',
        'ID_TINH',
        'TENDIADANH',
        'HINHANH',
        'KINHDO',
        'VIDO',
        'MOTA',
    ];

    public function tinhthanh()
    {
        return $this->belongsTo('App\Models\tinhthanh', 'ID_TINH', 'id');
    }

    public function danhmuc()
    {
        return $this->belongsTo('App\Models\danhmuc', 'ID_DANHMUC', 'id');
    }

    public function baiviet()
    {
        return $this->hasMany('App\Models\baiviet', 'ID_DIADANH', 'ID_BAIVIET');
    }

    public function yeuthich()
    {
        return $this->hasMany('App\Models\yeuthich', 'ID_DIADANH', 'ID_YEUTHICH');
    }
}
