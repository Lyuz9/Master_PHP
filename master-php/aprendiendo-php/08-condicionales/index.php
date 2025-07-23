<?php
/**condicionales */

$color = "rojo";

if($color == "rojo"){
    echo "El color es rojo";
} else {
    echo "el color no es rojo";
}

/**
 * 
 * condicionales:
 * if, else, elseif, swich
 * 
 * operadores:
 * == igual
 * === identico
 * != diferente
 * <> diferente
 * !== no identico
 * < menor que
 * > mayor que
 * <= menor o igual que
 * >= mayor o igual que
 */

$año = 2025;

if ($año == 2025){
    echo "Estamos en el año 2025";
} else {
    echo "No estamos en el año 2025";
} 




// Operadores de comparacion

$nombre = "Gabo";
$edad = 42;
$mayoria_edad = 18;

if ($edad >= $mayoria_edad){
    echo "<h1>$nombre es mayor de edad</h1>";
} else {
    echo "<h1>$nombre aun no es mayor de edad</h1>";
}