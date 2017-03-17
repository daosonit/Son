<?php

namespace App\Http\Controllers\Website;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListingController extends Controller
{
    public function showListing()
    {
        $listing = Product::orderBy('id','ASC')->paginate(10);

        return view('website.listing.listing')->with(array('listing' => $listing));
    }


}
