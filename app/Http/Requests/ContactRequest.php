<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            "nom" => "required",
            'email' => [
                'required',
                'email:rfc,dns',
            ],
            "message" => "required"
        ];
    }

    public function messages()
    {
        return [
            "nom.required" => "<span style='color:red;'>Le nom est obligatoire</span>",
            "email.required" => "<span style='color:red;'>L'email est obligatoire</span>",
            "email.email" => "<span style='color:red;'>Ceci doit être un email</span>",
            "message.required" => "<span style='color:red;'>Le message est obligatoire</span>"
        ];
    }
}




