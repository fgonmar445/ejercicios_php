<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script PHP conversor numero a binario</title>
</head>

<body>
    <h1>Ejercicio 19 Relacion 1 - Script PHP conversor numero a binario</h1>
    <?php
    $num = 128;
    $resul = "";
    echo "El resultado es: ";
    while ($num >= 2) {
        $resul = (string) $num % 2 . $resul;
        $num /= 2;
    }
    echo "1" . $resul;
    ?>
</body>

</html>