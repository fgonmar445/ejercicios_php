<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 - Array asociativo clave - valor</title>
    <link rel="shortcut icon" href="./logoPlayamar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="bg-primary-subtle">
    <h1 class="text-center m-5">Ejercicio 5 Relacion 2 - Array clave valor </h1>
    <?php
    // Array asociativo constante con temperaturas máximas por día
    const TEMPERATURAS_SEMANA = [
        'Lunes' => 28.5,
        'Martes' => 30.2,
        'Miércoles' => 29.8,
        'Jueves' => 31.0,
        'Viernes' => 32.3,
        'Sábado' => 33.1,
        'Domingo' => 30.7
    ];

    // Mostrar la temperatura del primer día de la semana
    echo "<p class='text-center fs-3 fw-bold'> Temperatura del primer día (Lunes): ", TEMPERATURAS_SEMANA['Lunes'], "°C<p/>", "<br>";

    // Mostrar la temperatura de todos los días secuencialmente
    echo "<p class='text-center fs-4 fw-bold'> Temperaturas de la semana:<br></p>";
    echo "<ul class=' list-group w-50 mx-auto mb-4 shadow'>";
    foreach (TEMPERATURAS_SEMANA as $dia => $temp) {
        echo "<li class='list-group-item text-success fw-bold'>", "$dia: $temp °C</li>";
    }
    echo "</ul>";

    // Mostrar lo mismo en formato de lista numerada
    echo "<p class='text-center fs-4 fw-bold'>Temperaturas en formato de lista numerada:</p><br>";
    echo "<ol class=' list-group w-50 mx-auto shadow'>";
    foreach (TEMPERATURAS_SEMANA as $dia => $temp) {
        echo "<li class='list-group-item text-success fw-bold'>", "$dia: ", "$temp °C</li>";
    }
    echo "</ol>";
    echo "<p class='text-center fs-4 fw-bold'><br> Temperatura en tabla</p>";
    echo "<table class='table w-50 mx-auto table-dark table-hover'>";
    echo "<th>Dia</th>";
    echo "<th>Temp</th>";

    foreach (TEMPERATURAS_SEMANA as $dia => $temp) {
        echo "<tr>
        <td >$dia</td> <td>$temp</td>
        </tr>";
    }
    echo "</table>";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" ...></script>
</body>

</html>