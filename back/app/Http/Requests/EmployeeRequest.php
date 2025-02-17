<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'firstName' => ['bail', 'required', 'string', 'min:3', 'max:254'],
            'lastName' => ['bail', 'required', 'string', 'min:3', 'max:254'],
            'email' => ['bail', 'required', 'email'],
            'phone' => ['bail', 'string'],
            'department_id' => ['bail', 'required','numeric']
        ];
    }
}
