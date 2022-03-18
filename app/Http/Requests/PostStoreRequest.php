<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
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
            'title' => ['required', 'string', 'between:3,30'],
            'description' => ['nullable', 'string', 'max:255'],
            'body' => ['required'],
            'video_url' => ['nullable', 'url'],
            'keywords' => ['nullable', 'string', 'max:255'],
            'published_at' => ['required'],
            'category_id' => ['required', 'integer']
        ];
    }
}
