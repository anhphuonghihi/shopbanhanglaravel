<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function __construct()
    {
        // Add data to be passed to all views
        $nhan = DB::table('tbl_tag')->where('la_label', '=', '1')->get(); 
        view()->share('nhan', $nhan);
    }
}