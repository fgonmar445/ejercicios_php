<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11 Relacion 1 - Ec 2º Grado mejorada</title>
</head>

<body>
    <h1>Ejercicio 11 Relacion 1 - Ec 2 Grado</h1>
    <?php
    $a = 1;
    $b = 0;
    $c = -9;
    $rad = $b ** 2 - 4 * $a * $c;

    if ($a == 0) {
        // Ecuación lineal: bx + c = 0
        if ($b != 0) {
            $x = -$c / $b;
            echo "Para la ecuación lineal $b x + $c = 0, el valor de x es: $x";
        } else {
            echo "La ecuación no tiene solución (a = 0 y b = 0)";
        }
    } elseif ($rad < 0) {
        echo "Las raíces de la ecuación de segundo grado no son reales";
    } else {
        $x1 = (-$b + sqrt($rad)) / (2 * $a);
        $x2 = (-$b - sqrt($rad)) / (2 * $a);
        echo "Las raíces de la ecuación $a x² + $b x + $c = 0 son: ";
        echo number_format($x1, 2) . " y " . number_format($x2, 2);
    }
    ?>


</body>

</html>