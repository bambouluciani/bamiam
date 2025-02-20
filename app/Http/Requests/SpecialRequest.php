<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class SpecialRequest extends FormRequest
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
            'name' => [
                'required',
                Rule::unique('specials')->ignore($this->id),
            ],
            "image" => 'required',
            "description" => 'required',
            "price" => 'required',
            "genre" => 'required'
        ];
    }

    public function messages()
    {
        return[
            "name.required" => "<span style='color:red'>Veuillez donner un nom</span>",
            "name.unique" => "<span style='color:red'>Ce plat existe déjà</span>",
            "image.required" => "<span style='color:red'>Veuillez entrer une image</span>",
            "description.required" => "<span style='color:red'>Veuillez donner une description</span>",
            "price.required" => "<span style='color:red'>Veuillez donner un prix</span>",
            "genre.required" => "<span style='color:red'>Veuillez donner un genre</span>"
        ];
    }
}
