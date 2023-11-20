<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
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
            'nombre' => 'required',
            'especialidad' => 'required'
        ];
    }

    public function message()
    {
        return [
            'nombre.required' => 'El nombre es obligatorio',
            'especialidad' => [
                'required' => 'La especialidad es obligatoria'
            ]
        ];
    }
}
