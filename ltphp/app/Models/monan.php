<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class monan extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "monans";

    protected $guarded = [];
    protected $fillable = [
        'ID_DIADANH',
        'TENMONAN',
        'HINHANH',
    ];
    public function diadanh()
    {
        return $this->belongsTo('App\Models\diadanh', 'ID_DIADANH', 'id');
    }
}
