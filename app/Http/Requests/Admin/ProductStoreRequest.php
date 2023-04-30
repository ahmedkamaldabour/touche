<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:255 |regex:/^[a-zA-Z0-9\s]+$/', // only letters, numbers and spaces
            'description' => 'required|string|min:3|max:255|regex:/^[a-zA-Z0-9\s]+$/', // only letters, numbers and spaces
            'price' => 'required|numeric|min:0.01|max:9999999',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:9048',
        ];
    }
}
