<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function index()
    {
        $data   = DB::table('landingpage')->orderBy('id', 'DESC')->get();
        return view('admin', compact('data'));
    }
}
