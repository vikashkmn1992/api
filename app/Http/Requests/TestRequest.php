<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
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
                   'email'=>'required',
                   'password'  =>'required|min:8',
                ];
     }
    public function message()
    {
        return [
                 'email.required' =>':attribute is required',
                 'password.required'=>':attribute should not be blank'
               ];
    }
}
