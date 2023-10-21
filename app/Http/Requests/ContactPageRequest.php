<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactPageRequest extends FormRequest
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
            "map" => "nullable",
            "config_mail" => "nullable",
            "config_password" => "nullable",
            "address" => "nullable",
            "phone" => "nullable",
            "mail" => "nullable",
            "before_contact_us" => "nullable",
            "schedule" => "nullable",
        ];
    }
}
