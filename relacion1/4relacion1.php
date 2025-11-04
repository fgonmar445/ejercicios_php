<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 - Array</title>
    <link rel="shortcut icon" href="./logoPlayamar.png" type="image/x-icon">
</head>

<body>
    <h1>Ejercicio 4 Relacion 1 - Manejo basico de Arrays </h1>
    <?php
    //si declaro una const en mayus sin $
    const SEMANA = [
        "lunes",
        "martes",
        "miercoles",
        "jueves",
        "viernes",
        "sabado",
        "domingo"
    ];
    echo "<br> El primer dia de la semana es: ", SEMANA[0];
    echo "<br>Una semana tiene ", count(SEMANA), " dias<br>";
    echo "<ol>";
    for ($i = 0; $i < count(SEMANA); $i++) {
        echo "<li>", SEMANA[$i], "</li>";
    }
    echo "</ol>";
    ?>
</body>

</html>