<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUserRequest extends FormRequest
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.auth()->user()->id],
            'NewPassword' => ['required', 'string', 'min:8', 'confirmed'],
            "phone" => ["bail","required","min:11","max:11","regex:/^09[0-9]{9}$/","unique:users,phone,".auth()->user()->id],
        ];
    }
}
