<?php

namespace App\Http\Controllers\AdminAuth;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminAuth\ProductRequest;

class ProductController extends Controller
{

    public function index()
    {
        $query = Product::select('*');
        $listing = $query->paginate(10);

        $no = $listing->firstItem();
        return view('admin.product.listing')->with(['listing' => $listing, 'no' => $no]);
    }

    public function create()
    {
        return view('admin.product.insert');
    }

    public function store(ProductRequest $request)
    {
        try {
            $data = $request->all();
            $data['code'] = 'KTR' . rand(1000, 9999);

            if (isset($data['selling'])) {
                $data['selling'] = (int)$data['selling'];
            }

            if (isset($data['promotion'])) {
                $data['promotion'] = (int)$data['promotion'];
            }
            
            $result = Product::create($data);

            if ($result) {
                return back()->with('status', 'Thêm mới thành công');
            }

        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public function edit($id)
    {
        return view('admin.product.update');
    }

    public function update()
    {

    }

    public function destroy($id)
    {
    }
}
