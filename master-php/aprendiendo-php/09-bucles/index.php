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

echo "<hr>";

// ejemplos con while

if ($_GET["numero"]) {

    // Cambiar el tipo de dato

    $numero = (int) $_GET["numero"];
} else {
    $numero = 1;
};

echo "<h1>tabla de multiplicar del número $numero</h1>";

$contador = 0;
while ($contador <= 10) {
    echo "$numero x $contador = ".($numero * $contador)."<br>";
    $contador ++;
}
