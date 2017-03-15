<?php

namespace App\Http\Controllers\AdminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminAuth\PostRequest;
use App\Http\Requests\AdminAuth\PostUpdateRequest;
use App\Models\Post;
use App\Libraries\Image\UploadImage;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Config;

class PostController extends Controller
{
    public function index()
    {
        $query = Post::select('id', 'name', 'category_id', 'title');
        $listing = $query->paginate(10);
        $no = $listing->firstItem();
        return view('admin.post.listing')->with(['listing' => $listing, 'no' => $no]);
    }

    public function create()
    {
        return view('admin.post.insert');
    }

    public function store(PostRequest $request)
    {
        try {
            $data = $request->all();
            $result = Post::create($data);

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
            $post = Post::findOrFail($id);

            return view('admin.post.update')->with(array('post' => $post));
        } catch (ModelNotFoundException $e) {
            abort(404);
        }

    }

    public function update(PostUpdateRequest $request, $id)
    {
        try {
            $post = Post::findOrFail($id);
            $images_old = $post->images;

            $data = $request->all();

            if ($request->hasFile('images')) {
                $upload_image = new UploadImage();
                $upload_image->make($this->option())->save($request->file('images'));

                if (count($upload_image->error()) == 0) {
                    //Xóa ảnh cũ
                    $upload_image->delete($images_old);
                    $data['images'] = $upload_image->fileName();
                }
            } else {
                $data['image'] = $images_old;
            }

            $result = $post->update($data);

            if ($result) {
                return back()->with('status', 'Cập nhật thông tin thành công.');
            } else {
                return back()->with('status', 'Cập nhật thông tin thất bại.');
            }
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public function destroy($id)
    {
        try {
            $post = Post::findOrFail($id);
            $post_image = $post->images;
            if ($post->delete()) {

                //Xóa ảnh
                $upload_image = new UploadImage();
                $upload_image->make($this->option())->delete($post_image);

                if (count($upload_image->error()) == 0) {
                    return back()->with('status', 'Xóa thành công!');
                } else {
                    return back()->with('status', 'Xóa thất bại!');
                }

            } else {
                return back()->with('status', 'Xóa thất bại!');
            }

        } catch (ModelNotFoundException $e) {
            abort(404);
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
}
