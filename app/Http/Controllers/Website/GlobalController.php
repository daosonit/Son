<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GlobalController extends Controller
{
    //Giới thiếu
    public function showIntroduce()
    {
        return view('website.introduce.introduce');
    }

    //Liên hệ
    public function showContact()
    {
        return view('website.contact.contact');
    }

    //Tuyển dụng
    public function showWork()
    {
        return view('website.introduce.introduce');
    }
}
