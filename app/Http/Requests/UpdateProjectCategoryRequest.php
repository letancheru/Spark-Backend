<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {

        $categoryId = $this->route('project_category');

        return [
            'name' => 'required|string|max:255|unique:project_categories,name,' . $categoryId,
            'description' => 'nullable|string|max:1000',
        ];
    }
}
