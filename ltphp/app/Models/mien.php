<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class mien extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "vungmiens";

    protected $fillable = [
        'ID_MIEN',
        'TENMIEN',
        'HINHANH',
    ];

    public function tinhthanh()
    {
        return $this->hasMany('App\Models\tinhthanh', 'ID_MIEN', 'id');
    }
}
