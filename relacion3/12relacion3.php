<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12 - Relacion 3</title>
</head>
<body>
    <?php
// Función de ordenación con burbuja
function bubbleSortStrings(&$arr) {
    $n = count($arr);
    // Recorremos varias veces el array
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // strcmp compara cadenas alfabéticamente
            if (strcmp($arr[$j], $arr[$j + 1]) > 0) {
                // Intercambiamos valores
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
}

$datos = ['Pérez','García','López','Márquez','Álvarez','Domínguez','Ruíz','Díaz'];

echo "<p><strong>Array original:</strong> " . implode(", ", $datos) . "</p>";

// Ordenamos con burbuja
bubbleSortStrings($datos);

echo "<p><strong>Array ordenado:</strong> " . implode(", ", $datos) . "</p>";
?>

</body>
</html>