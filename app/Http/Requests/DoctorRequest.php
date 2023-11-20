<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Validator;
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
        Validator::extend('par', function($attribute, $value, $parameters, $validator) {
            return (($value % 2) == 0);
        });

        return [
            'nombre' => 'required|min:3',
            'especialidad' => 'required|par'
        ];
    }

    public function messages()
    {
        $mensajes = [
            'nombre.required' => 'El nombre es obligatorio'
        ];
        $mensajes = array_merge($mensajes, ['nombre.email' => 'El nombre no representa un email']);

        return $mensajes;
    }
}
