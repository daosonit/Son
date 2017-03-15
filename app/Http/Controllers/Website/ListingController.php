<?php

namespace App\Http\Controllers\Website;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListingController extends Controller
{
    public function showListing(){
        $listing = Post::all();
        dd($listing);
        return view('website.listing.listing');
    }
}
