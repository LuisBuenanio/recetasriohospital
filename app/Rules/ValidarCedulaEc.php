<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidarCedulaEc implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // Lógica para verificar la cédula ecuatoriana
        $cedula = str_split($value);
        $coeficientes = array(2, 1, 2, 1, 2, 1, 2, 1, 2);
        $suma = 0;
        $ultimo_digito = array_pop($cedula);

        foreach ($cedula as $key => $digito) {
            $valor = $digito * $coeficientes[$key];

            if ($valor >= 10) {
                $valor = array_sum(str_split($valor));
            }

            $suma += $valor;
        }

        $digitos_validos = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
        $ultimo_digito_calculado = 10 - ($suma % 10);

        if ($ultimo_digito_calculado == 10) {
            $ultimo_digito_calculado = 0;
        }

        return in_array($ultimo_digito_calculado, $digitos_validos) && $ultimo_digito_calculado == $ultimo_digito;
    }

    public function message()
    {
        return 'El número de cédula ingresado no es válido.';
    }
}
