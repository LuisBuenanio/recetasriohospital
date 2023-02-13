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
        $paciente = $this->route()->parameter('paciente');

        $rules =[
            'cedula' => 'required|unique:paciente,cedula',           
            'nombre' => 'required',
            'slug' => 'required|unique:paciente,slug',           
            'edad' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'direccion' => 'required',           
        ];

        if($paciente){
            
            $rules['cedula'] = 'required|unique:paciente,cedula,' .$paciente->id;
            $rules['slug'] = 'required|unique:paciente,slug,' .$paciente->id;
        }
        
        return $rules;
    }
}
