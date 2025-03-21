<?php

namespace App\Http\Requests\Scheme;

use Illuminate\Foundation\Http\FormRequest;

class StoreSchemeRequest extends FormRequest
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
            "title" => "required|string",
            "description" => "required|string",
            "redirection_link" => "required|string",
            // "file-upload" => "string",
            "min_interest_rate" => "required|string",
            "max_interest_rate" => "required|string",
            "min_cibil" => "required|string",
            "max_cibil" => "required|string",
            "min_tenure" => "required|string",
            "max_tenure" => "required|string",
            "min_amount" => "required|string",
            "max_amount" => "required|string"
        ];
    }
}
