<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlergiaRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $alergium = $this->route()->parameter('alergium');

        $rules =[
            'nombre' => 'required',
            'slug' => 'required|unique:alergia,slug',           
            'descripcion' => 'required',
        ];

        if($alergium){
            $rules['slug'] = 'required|unique:alergia,slug,' .$alergium->id;
        }
        
        return $rules;
    }
}
