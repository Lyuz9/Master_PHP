<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imprimir</title>
</head>
<body>
    <h1>2 - imprimir</h1>

    <?="" // otro modo de usar echo: ?>
    <?="Bienvenido al curso más grande de PHP"?>

    <?php 
        echo "<h3>Lista de videojuegos</h3>";
        echo "<ul>"
            . "<li>GTA SA</li>"
            . "<li>Doom eternal</li>"
            . "<li>Good of war ragnarok</li>"
            . "</ul>";

        echo "<p> Esta es toda"." "."la lista de juegos</p>";

        // para hacer comentarios usar "//" antes de comentar

        // otro modo de comentario es "/* */" ejemplo:
        /**
         * contenido
         */
    ?>
    <p></p>
</body>
</html>