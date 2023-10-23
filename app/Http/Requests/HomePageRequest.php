<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomePageRequest extends FormRequest
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
            "first_slide_first_word" . config('app.locale') => 'required',
            'first_slide_first_word.*' => 'string',
            "first_slide_second_word" => 'nullable',
            "first_slide_third_word" => 'nullable',
            "first_slide_button" => 'nullable',
            "second_slide_first_word" => 'nullable',
            "second_slide_second_word" => 'nullable',
            "second_slide_third_word" => 'nullable',
            "second_slide_button" => 'nullable',
            "third_slide_first_word" => 'nullable',
            "third_slide_second_word" => 'nullable',
            "features_button" => 'nullable',
            "donate_title" => 'nullable',
            "donate_excerpt" => 'nullable',
            "donate_button" => 'nullable',
            "donate_content" => 'nullable',
            "act_title" => 'nullable',
            "act_excerpt" => 'nullable',
            "act_button" => 'nullable',
            "act_content" => 'nullable',
            "first_writing_title" => 'nullable',
            "first_writing_description" => 'nullable',
            "second_writing_title" => 'nullable',
            "second_writing_description" => 'nullable',
            "third_writing_title" => 'nullable',
            "third_writing_description" => 'nullable',
            "subscribe_title" => 'nullable',
            "subscribe_button" => 'nullable'
        ];
    }
}
