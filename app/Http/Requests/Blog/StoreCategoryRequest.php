<?php

namespace App\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCategoryRequest extends FormRequest
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
//            'slug' => ['nullable', 'string', Rule::unique('category', 'slug')],
            'description' => ['nullable', 'string'],
            'keywords' => ['nullable', 'string'],
            'parent_id' => ['nullable', 'integer']
        ];
    }
}
