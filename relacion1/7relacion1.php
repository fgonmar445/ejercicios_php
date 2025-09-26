<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 - Calculo notas</title>
    <link rel="shortcut icon" href="./logoPlayamar.png" type="image/x-icon" >
</head>
<body>
    <h1>Ejercicio 7 Relacion 1 - Calculo nota con media y resta faltas</h1>
    <p>
    <?php
    $nota1 = 5;
    $nota2 = 8;
    $faltas = 4;
    $notaFinal = ($nota1 + $nota2) / 2 - 0.25 * $faltas;
    if ($notaFinal>=5) {
        echo "Enhorabuenas. Has aprobado, sacaste <b>$notaFinal</b>";
    } else {
        echo "Lo siento, pabajo. Tu nota es <b>$notaFinal</b>";
    }
    ?></p>
</body>
</html>