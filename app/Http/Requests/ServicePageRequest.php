<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicePageRequest extends FormRequest
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
            "upper_slide_title" => 'nullable',
            "upper_slide_description" => 'nullable',
            "middle_section_title" => 'nullable',
            "middle_section_excerpt" => 'nullable',
            "middle_section_content" => 'nullable',
            "middle_section_video" => 'nullable',
        ];
    }
}
