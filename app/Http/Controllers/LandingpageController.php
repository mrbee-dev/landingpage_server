<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\LandingpageRequest;
use Mail;
use App\Mail\SendMailAdmin;
class LandingpageController extends Controller
{
    public function showIndex()
    {
        $dataCovidVN = Http::get('https://api.ncovvn.xyz/cityvn')->json();
        return view('landingpage', compact('dataCovidVN'));
    }

    public function sendMail(LandingpageRequest $r)
    {
        try {
            $data = array(
                'email'     => $r->email,
                'fullname'  => $r->fullname,
                'phone'     => $r->phone,
                'content'   => $r->content,
            );
            Mail::to('nhathuocphongnhi@gmail.com')->send(new SendMailAdmin($data));
            return redirect()->route('index')->with('success', 'Gửi Mail Thành Công');
        } catch (Exception $e) {
            return redirect()->back()->with(['error'=>'Có Vẻ Như Bạn Đã Gặp Lổi, Vui Lòng Thử Lại']);
        }
    }
}
