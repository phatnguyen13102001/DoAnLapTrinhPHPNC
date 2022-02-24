<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class luutru extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "luutrus";

    protected $guarded = [];
    protected $fillable = [
        'ID_DIADANH',
        'TENKHACHSAN',
        'DIACHI',
        'HINHANH',
    ];
    public function diadanh()
    {
        return $this->belongsTo('App\Models\diadanh', 'ID_DIADANH', 'id');
    }
}
