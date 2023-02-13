<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Categoriascie10Request extends FormRequest
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
        $categoriascie10 = $this->route()->parameter('categoriascie10');

        $rules =[
            'clave' => 'required|unique:categoriascie10,clave',           
            'descripcion' => 'required',
        ];

        if($categoriascie10){
            $rules['clave'] = 'required|unique:categoriascie10,clave,' .$categoriascie10->id;
        }
        
        return $rules;
    }
}
