<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'product_name' => 'required|min:3|max:30|unique:products',
            'product_price' => 'required|max:99',
            'product_details' => 'required|max:300',
            'thumbnail_image' => 'required|max:2048|mimes:png,jpg',
            'product_image1' => 'required|max:2048|mimes:png,jpg',
            'product_image2' => 'required|max:2048|mimes:png,jpg',
        ];
    }
}
