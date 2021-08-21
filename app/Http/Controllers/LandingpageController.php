<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LandingpageController extends Controller
{
    public function showIndex()
    {
        $dataCovidVN = Http::get('https://api.ncovvn.xyz/cityvn')->json();
        return view('landingpage', compact('dataCovidVN'));
    }
}
