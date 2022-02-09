<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class yeuthich extends Model
{
    use HasFactory;

    protected $table = "yeuthiches";

    protected $guarded = [];

    protected $fillable = [
        'ID_DIADANH',
        'ID_NGUOITHICH',
        'TRANGTHAI',
    ];

    public function taikhoan()
    {
        return $this->belongsTo('App\Models\User', 'ID_NGUOITHICH', 'id');
    }

    public function diadanh()
    {
        return $this->belongsTo('App\Models\diadanh', 'ID_DIADANH', 'id');
    }
}
