<?php 
// constantes contenedor de informacion
define('nombre', 'gabo');

define('web', 'gabo.com');

echo nombre . '<br>';
echo web . '<br>';

// constantes predefinidad
echo PHP_OS . '<br>';

echo PHP_VERSION . '<br>';

echo PHP_EXTENSION_DIR . '<br>';

echo __FILE__ . '<br>';

function hola_file(){
    echo __FILE__ . '<br>';
}

hola_file();

echo PHP_BINARY;
?>