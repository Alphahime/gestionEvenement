<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAuthRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ];
    }

    public function messages()
    {
        return [
           
            'email.required' => 'L\'adresse e-mail est requise.',
            'password.required' => 'Le mot de passe est requis.',
            'password.min' => 'Le mot de passe doit avoir au moins :min caractères.',
        ];
    }
}
