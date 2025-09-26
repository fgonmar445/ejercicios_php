<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18 Relacion 1 - MCM EUCLIDES</title>
</head>

<body>
    <h1>Claculo MCD mediante Algoritmo Euclides</h1>
    <?php
    $num1 = 36;
    $num2 = 60;

    while ($num1 != $num2) {
        if ($num1 > $num2) {
            $num1 -= $num2;
        } else {
            $num2 -= $num1;
        }
    }
    echo "El divisor es $num1";
    ?>
</body>

</html>