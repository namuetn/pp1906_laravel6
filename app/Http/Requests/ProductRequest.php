<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(Auth::check()) {
            return true;
        }

        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {  
        return [
            'name' => 'required|unique:products|max:255',
            'content' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'Tên ngừoi dùng đã bị trùng lặp!'
        ];
    }
}
