<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourse extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:150',
            'description' => 'required|string|max:700',
            'category' => 'required|string|max:50'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Provide a name for this course',
            'description.required' => 'Provide a description for this course',
            'category.required' => 'Assign a category to this course',
            // 'name.max' => '...',
            // 'description.max' => '...',
            // 'category.max' => '...'
        ];
    }
}
