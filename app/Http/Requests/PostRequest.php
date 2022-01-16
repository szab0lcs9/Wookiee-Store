<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:10|max:200',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|min:0.01|max:100000.00',
            'image' => 'required'
        ];
    }
}