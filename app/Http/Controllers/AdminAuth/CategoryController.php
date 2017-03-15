<?php

namespace App\Http\Controllers\AdminAuth;

use App\Models\Category;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminAuth\CategoryRequest;
use App\Http\Requests\AdminAuth\CategoryUpdateRequest;
use App\Libraries\Image\UploadImage;
use Config;

class CategoryController extends Controller
{
    const CAT_NEWS = 1;
    const CAT_PRODUCT = 2;

    public function index()
    {
        $query = Category::select('*');
        $listing = $query->paginate(10);
        $no = $listing->firstItem();
        return view('admin.category.listing')->with(['listing' => $listing, 'no' => $no]);
    }

    public function create()
    {
        return view('admin.category.insert');
    }

    public function store(CategoryRequest $request)
    {
        try {

            $data = $request->all();

            $result = Category::create($data);

            if ($result) {
                return back()->with('status', 'Thêm mới thành công');
            }

        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public function edit($id)
    {
        try {
            $category = Category::findOrFail($id);
            return view('admin.category.update')->with(array('category' => $category));
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public function update(CategoryUpdateRequest $request, $id)
    {
        try {
            $category = Category::findOrFail($id);
            $category->name = $request->name;
            $category->type = $request->type;
            $category->title = $request->title;
            $category->keyword = $request->keyword;
            $category->description = $request->description;

            if ($category->save()) {
                return back()->with('status', 'Update thành công.');
            } else {
                return back()->with('status', 'Update thất bại.');
            }

        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public function destroy($id)
    {

    }
}
