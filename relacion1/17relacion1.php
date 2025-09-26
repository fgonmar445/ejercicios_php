<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17 Relacion 1 - Algoritmo Euclides para division</title>
</head>

<body>
    <h1>Ejercicio 17 Relacion 1 - Algoritmo Euclides para division</h1>
    <?php
    $num1 = 5;
    $num2 = 6;
    $dividendo = $num1;
    $cociente = 0;

    while ($dividendo >= $num2) {
        $dividendo -= $num2;
        $cociente++;
    };
    echo "El resultado del algoritmo de $num1 y $num2 es : $cociente y el resto es $dividendo"
    ?>
</body>

</html>