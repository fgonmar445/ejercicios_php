<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15 Relacion 1 - Identifica si numero es primo</title>
</head>

<body>
    <h1>Ejercicio 15 Relacion 1 - Identifica si numero es primo</h1>
    <?php
    $numero = 3; // Puedes cambiar este número por cualquier entero positivo

    if ($numero <= 1) {
        echo "El número $numero no es primo. Debe ser mayor que 1.";
    } else {
        $esPrimo = true;
        $i = 2;

        do {
            if ($numero % $i == 0) {
                $esPrimo = false;
                break;
            }
            $i++;
        } while ($i <= sqrt($numero));

        if ($esPrimo) {
            echo "El número $numero es primo.";
        } else {
            echo "El número $numero no es primo.";
        }
    }
    ?>
</body>
</html>