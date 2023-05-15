<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteRequest extends FormRequest
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
        $paciente = $this->route()->parameter('paciente');

        $rules =[
            'cedula' => 'required|unique:paciente,cedula',           
            'nombre' => 'required',          
            'fecha_nacimiento' => 'required',
            'telefono' => 'required',         
        ];

        if($paciente){
            
            $rules['cedula'] = 'required|unique:paciente,cedula,' .$paciente->id;
            
        }
        
        return $rules;
    }
}
