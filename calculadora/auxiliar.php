<?php
/**
 * @author Javier Romero Pérez
 * @copyright Copyright (c) 2022 Javier Romero Pérez
 * @license https://www.gnu.org/license/gpl.txt
 */

/**
 *  Calcula el resultado de hacer la operacion de $oper
 * sobre los argumentos $oper1 y $oper2
 *
 * @param   mixed     $oper1  El primer operando.
 * @param   mixed     $oper2  El segundo operando.
 * @param   string    $oper   El operador
 *                          (valores validos: '+', '-', '*', '/').
 * @return  mixed            El resultado del cálculo.
 */
function calcular_resultado($oper1, $oper2, $oper)
{
    switch ($oper) {
        case '+':
            $result = $oper1 + $oper2;
            break;

        case '-':
            $result = $oper1 - $oper2;
            break;

        case '*':
            $result = $oper1 * $oper2;
            break;

        case '/':
            $result = $oper1 / $oper2;
            break;

        default:
            $result = 'Error: operación incorrecta.';
    }

    return $result;
}

#funciones para meter las funciones de este archivo en otros: require, require_once, include, include_once
