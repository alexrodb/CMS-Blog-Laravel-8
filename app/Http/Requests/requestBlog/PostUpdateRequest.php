<?php

namespace App\Http\Requests\requestBlog;

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
            'name'          => 'required',
            'slug'          => 'required|unique:posts,slug,' . $this->post, // El Slug debe ser unico, pero ignora el id actual que se está actualizando.
            'category_id'   => 'required|integer',
            'tags'          => 'required|array',
            'status'        => 'required|in:DRAFT,PUBLISHED',
        ];
    }
}
