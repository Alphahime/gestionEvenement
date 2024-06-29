<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAssociationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom'=>'required',
            'description'=>'required',
            'date_creation'=>'required',
            'ninea'=>'required',
            'email'=>'required',
            'password'=>'required|min:6',
            'logo'=>'required',
            'contact'=>'required',
            'adresse'=>'required',
            'secteur_activite'=>'required',
        ];
    }

    public function message(){
        [
            'nom.requered'=>'le nom est recquis',
            'description.requered'=>'la description est recquise',
            'date_creation.requered'=>'la date est requise',
            'ninea.requered'=>'le ninea est recquis',
            'email.requered'=>'lemail est recquis',
            'password.requered'=>'le mot de pass est requis',
            'logo.requered'=>'le logo est requis',
            'contact.requered'=>'le contact est requis',
            'adresse.requered'=>'ladresse est requise',
            'secteur_activite.requered'=>'le secteur est requis',

        ];
    }
}
