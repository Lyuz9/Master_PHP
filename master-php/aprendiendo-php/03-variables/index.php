<?php 

$mi_primera_variable = "Hola mundo desde una variable";
$numero = 95;
$verdadero = true;

/*
    se puede sobreescribir el valor en una variable, ejemplo:
$numero = 95;
echo "<h1>" . $numero . "</h1>";    -> mostrara 95

$numero = 77;
echo "<h1>" . $numero . "</h1>";    -> mostrara 77

*/


//$numero = 77;

echo "<h1> $mi_primera_variable </h1>"; 
echo "<h1>" . $mi_primera_variable . "</h1>";
echo "<h1>" . $numero . "</h1>";
echo "<h1>" . $verdadero . "</h1>";

?>

