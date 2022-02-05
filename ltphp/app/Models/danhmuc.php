<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class danhmuc extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "danhmucs";

    protected $guarded = [];

    protected $fillable = [
        'TENDANHMUC',
        'HINHANH',
    ];

    public function diadanh()
    {
        return $this->hasMany('App\Models\diadanh', 'ID_DANHMUC', 'ID_DIADANH');
    }
}
