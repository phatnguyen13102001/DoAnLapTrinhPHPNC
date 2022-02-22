<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class dexuat extends Model
{
    use HasFactory, SoftDeletes;
     protected $table = "dexuats";

    protected $guarded = [];

    protected $fillable = [
        'ID_TAIKHOAN',
        'TENDANHMUC',
        'TENDIADANH',
        'TENTINHTHANH',
        'DIACHI',
        'HINHANH',
    ];
}
