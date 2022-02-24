<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class diadanh extends Model
{
    use HasFactory, SoftDeletes, Notifiable;
    protected $table = "diadanhs";
    protected $guarded = [];
    protected $fillable = [
        'ID_DANHMUC',
        'ID_TINH',
        'TENDIADANH',
        'HINHANH',
        'DIACHI',
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
        return $this->hasMany('App\Models\baiviet', 'id', 'ID_BAIVIET');
    }

    public function yeuthich()
    {
        return $this->hasMany('App\Models\yeuthich', 'ID_DIADANH', 'ID_YEUTHICH');
    }
}
