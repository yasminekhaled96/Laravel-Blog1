<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
           
            'title' => 'required|unique:posts,Title|min:3',
            'description' => 'required|min:10',
            'user_id'=>'exists:posts',
            
            
        ];
    }  
    public function messages(){
        return [
            'title.min' => 'The minimum length for title is 3 characters',
            'description.min' => 'The minimum length for title is 10 characters',
            'user_id.exists'=>'This post does not exist',
        ];
    }
}
