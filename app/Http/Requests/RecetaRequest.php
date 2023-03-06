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
        $recetum = $this->route()->parameter('recetum');

        $rules =[
            'medicamentos' => [
                'array',
            ],
            'medicamentos.*' => [
                'required'
            ],
            'dosiss' => [
                'array',
            ],
            'dosiss.*' => [
                'required'
            ],
            
            'horarios' => [
                'array',
            ],
            'horarios.*' => [
                'required'
            ],
            'ciudad' => 'required',
            'fecha' => 'required',
            'historia' => 'required|unique:receta,historia',         
            'aler' => 'required',   
        ];

        if($recetum){
            $rules['historia'] = 'required|unique:receta,historia,' .$recetum->id;
        }

        if ($this-> aler == 1){
            $rules = array_merge($rules, [
                    'alergia' => 'required',
            ]);
            
        }
        return $rules;
    }
}
