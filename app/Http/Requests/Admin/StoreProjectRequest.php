<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'client_name' => ['nullable', 'string', 'max:255'],
            'preview_image' => ['nullable', 'image', 'max:2048'],
            'development_time' => ['nullable', 'string'],
            'role' => ['nullable', 'string'],
            'platform' => ['nullable', 'string'],
            'short_description' => ['nullable', 'string'],
            'full_description' => ['nullable', 'string'],
            'problem_solved' => ['nullable', 'string'],
            'content' => ['nullable', 'string'],
            'demo_url' => ['nullable', 'string', 'url'],
            'repository_url' => ['nullable', 'string', 'url'],
            'status' => ['required', 'in:draft,published'],
        ];
    }
}
