<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createUserRequest extends FormRequest
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
        'prenom' => 'required|string|max:255',
        'nom' => 'required|string|max:255',
        'telephone' => 'required|string|max:255',
        'adresse' => 'required|string|max:255',
        'email' => 'required|email',
        'password' => 'required|string|min:6',
    ];
}

public function messages()
{
    return [
        'prenom.required' => 'Le prénom est requis.',
        'nom.required' => 'Le nom est requis.',
        'telephone.required' => 'Le téléphone est requis.',
        'adresse.required' => 'L\'adresse est requise.',
        'email.required' => 'L\'adresse e-mail est requise.',
        'email.email' => 'L\'adresse e-mail n\'est pas valide.',
        'email.unique' => 'Cette adresse e-mail est déjà utilisée.',
        'password.required' => 'Le mot de passe est requis.',
        'password.min' => 'Le mot de passe doit avoir au moins :min caractères.',
    ];
}
}
