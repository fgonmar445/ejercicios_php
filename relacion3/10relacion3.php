<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <input type="text" id="texto" name="texto" placeholder="Introduce texto">
        <br>
        <input type="submit" value="Enviar">
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['texto'])) {
        $texto = $_GET['texto'];
        $palabras = explode(' ', $texto);
        $invertido = array_reverse($palabras);

        echo "<p>Texto original: <strong>$texto</strong></p>";
        echo "<p> Texto invertido: " . implode(' ', $invertido) . "</p>";
    }

    ?>



</body>

</html>