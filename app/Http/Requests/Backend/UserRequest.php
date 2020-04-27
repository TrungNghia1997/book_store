<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class UserRequest extends FormRequest
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
            'name' => 'required' . $this->id,
            'email' => 'required',
            'phone_number'   => 'required',
            'avatar'   => 'required',
            'role'   => 'required',
        ];

    }

    public function Validator( array $data) {
        return Validator::make($data, [
            'name'=>'required',
            'email'=>'required',
            'phone_number'=>'required',
            'avatar'=>'required',
            'password'=>'required',
            'role'=>'required',
        ]);
        // dd(123);
    }
}
