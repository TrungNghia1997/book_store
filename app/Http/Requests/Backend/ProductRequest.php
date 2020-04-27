<?php

namespace App\Http\Requests\Backend;

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
            'id_product' => 'required|unique:products,id_product,' . $this->id,           
            'category_id' => 'required',
            'avatar'    => 'image|mimes:jpeg,jpg,png,gif',
            'images.*' =>  'image|mimes:jpeg,jpg,png,gif',
            'price' => 'required',
            'author_id' => 'required',
            'name' => 'required',
            'short_description' => 'required',                    
            'description' => 'required',
            'status' => 'required',
        ];
    }
}
