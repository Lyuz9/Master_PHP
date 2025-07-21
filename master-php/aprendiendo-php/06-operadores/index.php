<?php

// operadores aritmeticos


$numero1 = 55;
$numero2 = 33;

// suma
echo "Suma: " . ($numero1 + $numero2) . "<br>";

echo "Resta: " . ($numero1 - $numero2) . "<br>";

echo "Multiplicación: " . ($numero1 * $numero2) . "<br>";

echo "División: " . ($numero1 / $numero2) . "<br>";

echo "Modulo: " . ($numero1 % $numero2) . "<br>";




// Operadores incremento y decremento



echo "<hr>";

$año = 2019;

// incremento
// $año = $año + 1
echo $año++ . "<br>";

// decremento
// $año = año - 1
echo $año-- . "<br>";

// pre incremento
// $año = 1 + $año
echo ++$año . "<br>";

// pre decremento
// $año = 1 - $año
echo --$año . "<br>";

echo "Año: " . $año . "<br>";

echo "<hr>";


// Operadores de asignación


$edad = 55;

echo "edad: " . $edad . "<br>";

// $edad = $edad + 5
echo "edad: " . ($edad+=5) . "<br>";

echo "edad: " . ($edad-=5) . "<br>";

echo "edad: " . ($edad*=5) . "<br>";

echo "edad: " . ($edad/=5) . "<br>";


var_dump($edad);