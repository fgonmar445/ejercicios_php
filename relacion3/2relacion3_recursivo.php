<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 - Relacion 3</title>
</head>

<body>
    <h1>Ejercicio 2 Recursivo - Relacion 3</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">

        <input type="number" name="num" id="num" placeholder="ingrese un numero">
        <input type="submit" value="Enviar">

    </form>
    <?php

    function factorial(int $num)
    {
        if ($num == 0 || $num == 1) {
            return 1;
        }

        return $num * factorial($num - 1);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['num'])) {

        $num = intval($_GET['num']);
        $resul = factorial($num);

        echo "<br>Para el numero introducido $num, es factorial es $resul";
    }

    ?>

</body>

</html>