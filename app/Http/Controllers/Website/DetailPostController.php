<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class DetailPostController extends Controller
{
    public function showDetail(Request $request)
    {
        try {
            $id = $request->id;
            $post = Post::findOrFail($id);
            return view('website.detail.detail-post')->with(array('post' => $post));
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }
}
