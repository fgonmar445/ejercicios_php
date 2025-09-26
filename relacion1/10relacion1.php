<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10 - Ec 2 Grado</title>
    <link rel="shortcut icon" href="./logoPlayamar.png" type="image/x-icon" >
</head>
<body>
    <h1>Ejercicio 10 Relacion 1 - Ec 2 Grado</h1>
    <?php
    $a = 1;
    $b = -4;
    $c = 2;
    $rad = $b ** 2 - 4 * $a * $c; //clean code
    if ($rad<0 ) {
        echo "Las raices de la ecuacion de 2 grado no son reales";        
    } else {
        $x1 = ( -$b + sqrt($rad) ) / (2 * $a);
        $x2 = ( -$b - sqrt($rad) ) / (2 * $a);
        echo "Las raices son " ,number_format($x1, 2)," y ", number_format($x2, 2);
    }
    ?>
</body>
</html>