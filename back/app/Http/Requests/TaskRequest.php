<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
            'title' => 'bail|required|string|min:10|max:254',
            'description' => 'bail|nullable|string|min:10|max:254',
            'assignee_id' => 'bail|required|numeric',
            'due_date' => 'bail|nullable|date_format:Y-d-m H:i:s'
        ];
    }
}
