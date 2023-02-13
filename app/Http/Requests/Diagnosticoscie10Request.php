<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Diagnosticoscie10Request extends FormRequest
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
        $diagnosticoscie10 = $this->route()->parameter('diagnosticoscie10');

        $rules =[
            'clave' => 'required|unique:diagnosticoscie10,clave',           
            'descripcion' => 'required',
        ];

        if($diagnosticoscie10){
            $rules['clave'] = 'required|unique:diagnosticoscie10,clave,' .$diagnosticoscie10->id;
        }
        
        return $rules;
    }
}
