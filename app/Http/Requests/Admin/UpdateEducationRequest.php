<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEducationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'institution_name' => ['required', 'string', 'max:255'],
            'degree_title' => ['required', 'string', 'max:255'],
            'career' => ['nullable', 'string', 'max:255'],
            'start_year' => ['required', 'integer', 'min:1950', 'max:2050'],
            'end_year' => ['nullable', 'integer', 'min:1950', 'max:2050', 'after_or_equal:start_year'],
            'description' => ['nullable', 'string'],
            'institution_logo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ];
    }

    public function messages(): array
    {
        return [
            'institution_name.required' => 'The institution name is required.',
            'degree_title.required' => 'The degree title is required.',
            'start_year.required' => 'The start date is required.',
            'start_year.before_or_equal' => 'The start date must be before or equal to the end date.',
            'end_year.after_or_equal' => 'The end date must be after or equal to the start date.',
            'institution_logo.image' => 'The logo must be an image file.',
            'institution_logo.mimes' => 'The logo must be a file of type: jpeg, png, jpg, gif, svg.',
            'institution_logo.max' => 'The logo may not be greater than 2MB.',
        ];
    }
}
