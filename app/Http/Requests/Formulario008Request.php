<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecetaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->users_id == auth()->user()->id){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $formulario008 = $this->route()->parameter('formulario008');

        $rules =[
            
            'codigo' => 'required',
            'historia_clinica' => 'required',   
            'paciente_id' => 'required',   
            'medico' => 'required', 
        ];
        

        return $rules;
    }
}
