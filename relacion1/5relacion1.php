<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 - Array asociativo clave - valor</title>
     <link rel="shortcut icon" href="./logoPlayamar.png" type="image/x-icon" >
</head>
<body>
    <h1>Ejercicio 5 Relacion 1 - Array clave valor </h1>
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
echo "Temperatura del primer día (Lunes): " ,TEMPERATURAS_SEMANA['Lunes'] ,"°C","<br>";

// Mostrar la temperatura de todos los días secuencialmente
echo "Temperaturas de la semana:<br>";
echo "<ul>";
foreach (TEMPERATURAS_SEMANA as $dia => $temp) {
    echo "<li>","$dia: $temp °C</li>";
}
echo "</ul>";

// Mostrar lo mismo en formato de lista numerada
echo "Temperaturas en formato de lista numerada:<br>";
echo "<ol>";
foreach (TEMPERATURAS_SEMANA as $dia => $temp) {
    echo "<li>", "$dia: ", "$temp °C</li>";

}
echo "</ol>";
echo "<br> Temperatura en tabla";
echo "<table>";
echo "<th>Dia</th>";
echo "<th>Temp</th>";
echo "<table style='border: black solid 1px'>";

foreach (TEMPERATURAS_SEMANA as $dia => $temp) {
    echo "<tr>
        <td>$dia</td> <td>$temp</td>
        </tr>";
}
echo "</table>";
?>

</body>
</html>