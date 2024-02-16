<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ValidarCedulaEc;
use Illuminate\Validation\Rule;

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
                     
            'apellido_paterno' => 'required',           
            'nombre' => 'required',          
            'fecha_nacimiento' => 'required',
            'telefono' => 'required',         
        ];

        // Si la nacionalidad es ecuatoriana y se ha seleccionado que el paciente tiene cédula
        if ($this->input('nacionalidad') === 'ecuatoriano' && $this->input('ced') === '1') {
            $rules['cedula'] = [
                'required',
                'unique:paciente,cedula',
                new ValidarCedulaEc(),
            ];
        }

        // Si estamos actualizando un paciente existente, excluimos la cédula actual del proceso de validación
        if ($paciente) {
            $rules['cedula'] = [
                'nullable',
                Rule::unique('paciente', 'cedula')->ignore($paciente->id),
                new ValidarCedulaEc(),
            ];
        }

        return $rules;
    }
}
