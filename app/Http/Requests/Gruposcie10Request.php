<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Gruposcie10Request extends FormRequest
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
        $gruposcie10 = $this->route()->parameter('gruposcie10');

        $rules =[
            'clave' => 'required|unique:gruposcie10,clave',           
            'descripcion' => 'required',
        ];

        if($gruposcie10){
            $rules['clave'] = 'required|unique:gruposcie10,clave,' .$gruposcie10->id;
        }
        
        return $rules;
    }
}
