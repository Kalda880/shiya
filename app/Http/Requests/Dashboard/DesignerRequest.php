<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class DesignerRequest extends FormRequest
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
            // unique email and phone on create and update

            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:designers,email,' . $this->id,
            'phone'    => 'required|string|max:255|unique:designers,phone,' . $this->id,
            'password' => $this->id == null ? 'required|string|min:8|confirmed' : 'nullable|string|min:8|confirmed',
            'image'    =>  'nullable|image',
        ];
    }
}
