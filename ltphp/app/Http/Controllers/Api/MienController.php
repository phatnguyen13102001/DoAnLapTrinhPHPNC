<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\mien;
use Illuminate\Support\Facades\DB;

class MienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vungmien = DB::table('vungmiens')->get();
        $response['VungMien'] =  $vungmien;
        return json_encode($response);
    }
}
