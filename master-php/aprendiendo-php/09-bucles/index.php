<?php

/*  bucle while
/* estructura de control que itera o repite la ejecución de una serie de 
instrucciones tantas veces como sea necesario, en base a una condición

*/

$numero = 0;
while($numero <= 100){
    echo "$numero";

    if($numero != 100){
        echo ", ";
    }

    $numero ++;
};