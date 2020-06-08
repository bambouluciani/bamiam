<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class DishRequest extends FormRequest
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
            "category_id" => 'required',
            'name' => [
                'required',
                Rule::unique('dishes')->ignore($this->id),
            ],
            "description" => 'required',
            "price" => 'required',
            "genre" => 'required'

        ];
    }

    public function messages()
    {
        return[
            "category_id.required" => "<span style='color:red'>Veuillez donner une catégorie</span>",
            "name.required" => "<span style='color:red'>Veuillez donner un nom</span>",
            "name.unique" => "<span style='color:red'>Ce plat existe déjà</span>",
            "description.required" => "<span style='color:red'>Veuillez donner une description</span>",
            "price.required" => "<span style='color:red'>Veuillez donner un prix</span>",
            "genre.required" => "<span style='color:red'>Veuillez donner un genre</span>"
        ];
    }
}
