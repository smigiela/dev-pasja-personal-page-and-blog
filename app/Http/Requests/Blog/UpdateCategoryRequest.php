<?php

namespace App\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:190', ],
//            'slug' => ['required', 'string', Rule::unique('category', 'slug')->ignore($this->id)],
            'description' => ['nullable', 'string'],
            'keywords' => ['nullable', 'string'],
            'parent_id' => ['nullable', 'integer']
        ];
    }
}
