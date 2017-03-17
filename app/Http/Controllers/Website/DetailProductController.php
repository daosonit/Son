<?php

namespace App\Http\Controllers\Website;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class DetailProductController extends Controller
{
    public function showDetail(Request $request)
    {
        try {
            $id = $request->id;
            $product = Product::findOrFail($id);
            return view('website.detail.detail-product')->with(array('product' => $product));
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    //Danh sách sản phẩm bán chạy
}
