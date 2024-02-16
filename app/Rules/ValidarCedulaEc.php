<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidarCedulaEc implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // Preguntar si la cédula tiene 10 dígitos y si son numéricos
        if (preg_match('/^\d{10}$/', $value)) {
            // Obtener los dos primeros dígitos de la cédula
            $digitoRegion = substr($value, 0, 2);
            // Validar si los dos primeros dígitos corresponden a una región válida
            if ($digitoRegion >= 1 && $digitoRegion <= 24) {
                // Obtener el último dígito de la cédula
                $ultimoDigito = (int) substr($value, -1);
                // Validar el último dígito
                $suma = 0;
                $multiplicador = 2;
                for ($i = 8; $i >= 0; $i--) {
                    $digito = (int) $value[$i];
                    $producto = $digito * $multiplicador;
                    if ($producto >= 10) {
                        $suma += (int) substr((string) $producto, 0, 1) + (int) substr((string) $producto, 1, 1);
                    } else {
                        $suma += $producto;
                    }
                    $multiplicador = $multiplicador == 2 ? 1 : 2;
                }
                $resultado = (10 - ($suma % 10)) % 10;
                return $resultado == $ultimoDigito;
            }
        }
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'La cédula ingresada no es válida.';
    }
}
