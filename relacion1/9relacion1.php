<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de triangulo</title>
    <link rel="shortcut icon" href="./logoPlayamar.png" type="image/x-icon" >
</head>
<body>
    <h1>Ejercicio 9 Relacion 1 - Calculo del tipo de triangulo segun lados</h1>
    <p><?php
    $lado1 = 4.0;
    $lado2 = 3.0;
    $lado3 = 2.0;
    if ($lado1 == $lado2 and $lado2 == $lado3) {
        echo "El triangulo es equilatero.";
    } else if ($lado1 == $lado2 || $lado2 == $lado3 or
    $lado1 == $lado3) {
        echo "El triangulo es isosceles";
    } else {
        echo "Es escaleno";
    }
    ?></p>
</body>
</html>