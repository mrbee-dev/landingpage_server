<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\LandingpageRequest;
use Mail;
use App\Mail\SendMailAdmin;
use App\Models\LandingPage;

class LandingpageController extends Controller
{
    private $landingPages;
    public function __construct(LandingPage $landingPages)
    {
        $this->landingPages = $landingPages;
    }

    public function showIndex()
    {
        $dataCovidVN = Http::get('https://api.ncovvn.xyz/cityvn')->json();
        return view('landingpage', compact('dataCovidVN'));
    }

    public function sendMail(LandingpageRequest $r)
    {
        try {
            $data       = $r->except('_token');
            $createData = $this->landingPages->createLandingpage($data);
            return redirect()->route('index')->with('success', 'Gửi Yêu Cầu Thành Công');

        } catch (Exception $e) {
            return redirect()->back()->with(['error'=>'Có Vẻ Như Bạn Đã Gặp Lổi, Vui Lòng Thử Lại']);
        }
    }
}
