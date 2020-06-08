<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
                Rule::unique('categories')->ignore($this->id),
            ],
        ];
    }

    public function messages()
    {
        return[
            "name.required" => "<span style='color:red'>Veuillez donner un nom</span>",
            "name.unique" => "<span style='color:red'>Cette catégorie existe déjà</span>",
        ];
    }
}

