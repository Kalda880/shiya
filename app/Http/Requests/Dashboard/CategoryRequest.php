<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'title' => 'required|min:3|max:255|unique:categories,title',
            'image' => $this->isMethod('post') ? 'required|image|mimes:jpg,jpeg,png,gif' : 'image|mimes:jpg,jpeg,png,gif',
        ];
    }
}
