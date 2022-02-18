<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class binhluan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "binhluans";

    protected $guarded = [];

    protected $fillable = [
        'ID_NGUOIBL',
        'ID_BAIVIET',
        'NOIDUNG',
    ];

    public function taikhoan()
    {
        return $this->belongsTo('App\Models\User', 'ID_NGUOIBL', 'id');
    }

    public function baiviet()
    {
        return $this->belongsTo('App\Models\baiviet', 'ID_BAIVIET', 'id');
    }
}
