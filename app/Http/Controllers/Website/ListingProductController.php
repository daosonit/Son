<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ListingProductController extends Controller
{
    public function showListing()
    {
        $listing = Product::orderBy('id', 'DESC')->paginate(10);

        return view('website.listing.listing-product')->with(array('listing' => $listing));
    }

}
