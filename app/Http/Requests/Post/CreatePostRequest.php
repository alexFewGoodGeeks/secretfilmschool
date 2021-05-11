<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'title' => 'required|min:8',
            'content' => 'required',
            'status' => 'required',
            'time_to_read' => 'required|numeric',
            'featured_image' => 'required|image|dimensions:min_width=100,min_height=100,max_width=900,max_height=900',
            'seo_keywords' => 'sometimes'
        ];
    }
}
