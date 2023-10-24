<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GerencialController extends Controller
{
    public function index(): View
    {
        $gerencial = DB::select('select * from apdata_gerencial');
 
        return view('gerencial.index', ['gerencial' => $gerencial]);
    }
}
