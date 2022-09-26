<?php
echo "hola";
# esto es un comentario de una sola linea


/*

comentario
que abarca
varias lineas

*/


/**comentarios
 * de documentación
 * el code los trata de forma diferente
 * dnjsfndfvjd
 * dfskdkf
 * existe un estandar d edocumentacion llamado PHPDOC
 */


 /* php distingue entre mayusculas y minusculas, $x no es lo mismo que $X

    la funcion unset() destruye una variable, ejemplo unset($x);

    asignacion variable compuesta $x += 1;

    asignacion variable multiple $x = $y = $z = 4; todos valen 4

    incrementar variable ++$y; devuelve el valor de $y+1
                         $y++; devuelve el valor antiguo de $y pero realmente le ha sumado uno

    asignacion por referencias $y =& $x; le doy otro nombre a la misma variable, es decir $x e $y son la misma variable, si cambiamos una de ellas cambiamos las dos,
    pero a la vez si eliminamos una de ellas la otra no se elimina, ya que a lo que apuntamos es a la misma ligadura.

    existen unas variables ya predefinidas, https://www.php.net/manual/es/reserved.variables.php

    float y double son el mismo tipo en php pero lo correcto es usar float, al igual que int e integar pero el correcto es int

    los tipos basicos o elementales son bool,int,float,string.

    los tipos compuestos son array,object,callable,iterable

    y dos tipos especiales resource y null.

    Revisar un poco los tipos de php en casa y fijarme en sus peculiaridades y sus diferencias con otros lenguajes dados,
    https://www.php.net/manual/es/language.types.php

    podemos concatenar cadenas poniendo un . en medio de dos cadenas, ej: "30" . "40" daria "3040"

    podemos usar para saber el caracter en la posicion de la cadena con el [], las posiciones van del 0 al n-1 donde n es el numero de caracteres de la cadena,
    ejemplo "hola"[0] = h, "hola"[3] = a. Recordar que las tildes y caracteres especiales ocupan un espacio propio por tanto esta dentro de la cadena y su posición es
    justo despues de la letra sola.




 */
