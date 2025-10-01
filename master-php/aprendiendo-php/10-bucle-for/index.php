<?php

$resultado = 0;

for($i = 0; $i <= 100; $i++){
    $resultado += $i;
    echo "<p>$resultado</p>";
}

echo "<h3>El resultado es: $resultado</h3>";

echo "<hr>";

echo "<h3>Tabla de multiplicar usando el bucle for</h3>";

if ($_GET["numero"]) {

    // Cambiar el tipo de dato

    $numero = (int) $_GET["numero"];
} else {
    $numero = 1;
};

echo "<h1>tabla de multiplicar del número $numero</h1>";

for ($contador = 1; $contador <= 10; $contador++) {

    // USO DEL BREAK
    // para funcionar, añadir: "/?numero=45" al final de la url

    if($numero == 45){
        echo "Las operaciones estan restringidas";
        break;
    }

    echo "$numero x $contador = ".($numero * $contador)."<br>";
}