<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13 Relacion 1 - Factorial numero</title>
</head>
<body>
    <h1>Ejercicio 13 Relacion 1 - Factorial numero</h1>
    <?php
    $num = -5;
    if ($num < 0) {
        echo "El factorial de $num no esta definido, debe ser un numero natural";
    } else {
        $factorial = 1;
        for ($i = $num; $i > 1 ;$i--) {
            $factorial *= $i; 
        }
        echo "El factorial de $num, es $factorial";
    }
    
    ?>
</body>
</html>