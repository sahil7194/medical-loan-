<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name"  => 'required|string|min:4',
            "email" => "required|string|min:4|email|unique:users,email",
            "password" => "required|string|min:4",
            "mobile" => "required|string|min:10|unique:users,mobile",
            "user_type" => 'required|string|between:0,3'
        ];
    }
}
