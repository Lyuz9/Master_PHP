<?php
/**condicionales */

$color = "rojo";

if($color == "rojo"){
    echo "El color es rojo";
} else {
    echo "el color no es rojo";
}

echo "<hr>";

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


echo "<hr>";


// Operadores de comparacion

$nombre = "Gabo";
$edad = 42;
$mayoria_edad = 18;

if ($edad >= $mayoria_edad){
    echo "<h1>$nombre es mayor de edad</h1>";
} else {
    echo "<h1>$nombre aun no es mayor de edad</h1>";
}

echo "<hr>";

// elseif

$dia = 3;
/*
if ($dia == 1){
    echo "Hoy es lunes";
} else {
    if ($dia == 2) {
        echo "Hoy es martes";
    } else {
        if ($dia == 3) {
            echo "Hoy es miercoles";
        } else {
            if ($dia == 4) {
                echo "Hoy es jueves";
            } else {
                if ($dia == 5) {
                    echo "Hoy es viernes";
                } else {
                    if ($dia == 6) {
                        echo "Hoy es sabado";
                    } else {
                        if ($dia == 7) {
                            echo "Hoy es domingo";
                        } else {
                            echo "El dia no es valido";
                        }
                    }
                }
            }
        }
    }
}*/

if ($dia == 1){
    echo "Lunes";
} elseif($dia == 2) {
    echo "Martes";
} elseif($dia == 3) {
    echo "Miercoles";
} elseif($dia == 4) {
    echo "Jueves";
} elseif($dia == 5) {
    echo "Viernes";
} elseif($dia == 6) {
    echo "Sabado";
} elseif($dia == 7) {
    echo "Domingo";
} else {
    echo "El dia no es valido";
}