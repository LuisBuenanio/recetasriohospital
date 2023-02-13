<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Subgruposcie10Request extends FormRequest
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
        $subgruposcie10 = $this->route()->parameter('subgruposcie10');

        $rules =[
            'clave' => 'required|unique:subgruposcie10,clave',           
            'descripcion' => 'required',
        ];

        if($subgruposcie10){
            $rules['clave'] = 'required|unique:subgruposcie10,clave,' .$subgruposcie10->id;
        }
        
        return $rules;
    }
}
