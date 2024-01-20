<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'product_category_id' => 'required',
            'name' => 'required|string|max:250',
            'description' => 'required|string'
            'price' => 'required|numeric',
            'stock_quantity' => 'required|numeric',
            'product_color_id' => 'required',
            'material_type_id' => 'required',
            'size' => 'required|string',
            'pattern' => 'required|string|max:250',
            'additional_info' => 'required|string',
            'created_by' => 'required|string',
        ];
    }
}
