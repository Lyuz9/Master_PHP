<?php 

/**
 * TIPOS DE DATOS:
 * Entero int/integer 95
 * Decimal float/decimales 9.5
 * Cadenas string "Hola mundo"
 * Boleano bool frue/false
 * null
 * Array colección de datos
 * Objetos
 */

$numero = 95;
$decimal = 9.5;
$texto = "Hola mundo";
$verdadero = true;
$nula = null;

echo gettype($numero);
echo "<br>";
echo gettype($decimal);
echo "<br>";
echo gettype($texto);
echo "<br>";
echo gettype($verdadero);
echo "<br>";
echo gettype($nula);
?>
