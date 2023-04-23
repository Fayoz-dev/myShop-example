<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            // 'title' => 'required|min:10',
            // 'body' => 'required|max:15|min',
            // 'category_id' => 'digits:5',
            'image' => 'mimes:jpg,png'
        ];
    }

    public function messages()
    {
        return [

            'title.required' => 'Title ustunini toldiring ! ',
            'body.required' => 'Body ustuni toldirilmagan ',
            'title.min' => 'Title ustuni kamida 10 ta beldian iborat bolishi kerak'

        ];
    }
}
