<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 Relacion 3 - MCD EUCLIDES</title>
</head>

<body>
    <h1>Claculo MCD mediante Algoritmo Euclides</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">

        <label for="num1">Numero 1:</label>
        <input type="number" name="num1" id="num1"><br>

        <label for="num2">Numero 2:</label>
        <input type="number" name="num2" id="num2">
        <input type="submit" value="Enviar">
    </form>

    <?php
    require_once('./4relacion3_liberia.php');
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['num1']) && isset($_GET['num2'])) {

        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];

        $resul = MCD($num1, $num2);

        echo "El MCD es $resul";
    }
    ?>
</body>

</html>