<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class ListingPostController extends Controller
{
    public function showListing()
    {
        $listing = Post::orderBy('id', 'ASC')->paginate(1);

        return view('website.listing.listing-post')->with(array('listing' => $listing));
    }
}
