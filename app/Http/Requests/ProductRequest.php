<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use App\Rules\Negative;
use Illuminate\Validation\Rule;

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
        if($this->method() == 'POST') {
            return [
                'name' => [
                    'required', 
                    Rule::unique('products')->ignore($this->product), 
                    'max:255'],
                'content' => 'required',
                'image' => 'required',
                'category_id' => 'required',
                'quantity' => ['required', 'integer', new Negative],
                'price' => ['required', 'integer', new Negative],
            ];
        } else {
            return [
                'name' => [
                    'required', 
                    Rule::unique('products')->ignore($this->product), 
                    'max:255'],
                'content' => 'required',
                'category_id' => 'required',
                'quantity' => ['required', 'integer', new Negative],
                'price' => ['required', 'integer', new Negative],
            ];
        }
    }

    public function messages()
    {
        return [
            'name.unique' => 'Product name already exists!'
        ];
    }
}
