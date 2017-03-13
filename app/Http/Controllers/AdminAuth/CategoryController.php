<?php

namespace App\Http\Controllers\AdminAuth;

use App\Models\Category;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminAuth\CategoryRequest;
use App\Libraries\Image\UploadImage;
use Config;

class CategoryController extends Controller
{

    public function index(Request $request)
    {
        /* $name = $request->get('name', '');
         $type = $request->get('type', -1);*/

        $query = Category::select('*');

        /* if ($name != '') {
             $query->findName($name);
         }

         if ($type > -1) {
             $query->findType($type);
         }*/

        $listing = $query->orderBy('order', 'ASC')->paginate(10);
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
            if ($request->hasFile('image')) {
                $upload_image = new UploadImage();
                $upload_image->make($this->option())->save($request->file('image'));

                if (count($upload_image->error()) == 0) {
                    $data['image'] = $upload_image->fileName();
                }
            } else {
                $data['image'] = '';
            }

            $result = Category::create($data);

            if ($result) {
                return back()->with('status', 'Thêm mới thành công');
            }

        } catch (ModelNotFoundException $e) {

        }
    }

    /**
     * Kích thước hình ảnh
     */
    private function option()
    {
        return array('prefix_size' => Config::get('upload_image.sizeCategory'),
            'first_name' => Config::get('upload_image.nameCategory'),
            'path' => Config::get('upload_image.pathCategory'));
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
