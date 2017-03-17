<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetailProductController extends Controller
{
    public function showDetail()
    {
        return view('website.detail.detail-product');
    }
}
