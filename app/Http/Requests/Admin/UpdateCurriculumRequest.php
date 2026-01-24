<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCurriculumRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'file_path' => ['nullable', 'file', 'mimes:pdf', 'max:5120'], // 5MB max
            'language' => ['required', 'string', 'in:en,es'], // English or Spanish
            'is_active' => ['boolean'],
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'file_path.mimes' => 'The curriculum must be a PDF file.',
            'file_path.max' => 'The curriculum file may not be greater than 5MB.',
            'language.required' => 'Please select a language for the curriculum.',
            'language.in' => 'The selected language is invalid. Please choose English or Spanish.',
        ];
    }
}
