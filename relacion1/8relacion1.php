<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8 - Array asociativo nota pond</title>
    <link rel="shortcut icon" href="./logoPlayamar.png" type="image/x-icon" >
</head>
<body>
    <h1>Ejercicio 8 Relacion 1 - Calculo de la nota final de un alumno a partir de una rúbrica</h1>
    <p>
    <?php
    $rubrica = [
        "inicial"=> 0.2,
        "primera"=> 0.3,
        "segunda"=> 0.2,
        "tercera" => 0.3
    ];
    $calificaciones = [
        "inicial"=> 8,
        "primera"=> 5,
        "segunda"=> 9,
        "tercera" => 6
    ];
    $notaFinal = 0;
    foreach ($rubrica as $prueba => $peso) {
        $notaFinal += $peso * $calificaciones[$prueba];
    }
    if ($notaFinal>=5) {
        echo "Enhorabuenas. Has aprobado, sacaste <b>$notaFinal</b>";
    } else {
        echo "Lo siento, pabajo. Tu nota es <b>$notaFinal</b>";
    }
    ?></p>
</body>
</html>