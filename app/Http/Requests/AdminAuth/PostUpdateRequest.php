<?php

namespace App\Http\Requests\AdminAuth;

use Illuminate\Foundation\Http\FormRequest;

class PostUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'images' => 'image|mimes:jpeg, png, jpg,gif|max:2048',
            'title' => 'required|max:255',
            'keyword' => 'required|max:255',
            'description' => 'required|max:255',
            'content' => 'required'
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên bài viết!',
            'title.required' => 'Vui lòng nhập title!',
            'images.image' => 'Ảnh không đúng định dạng!',
            'keyword.required' => 'Vui lòng nhập keyword!',
            'description.required' => 'Vui lòng nhập description!',
            'content.required' => 'Vui lòng nhập nội dung bài viết!',
        ];
    }
}
