<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14 Relacion 1 - Suma de n numeros</title>
</head>
<body>
    <h1>Ejercicio 14 Relacion 1 - Suma de n numeros</h1>
    <?php
    $num = 5;
    $suma = 0;
    echo "Vamos a calcular la suma de todos los numeros hasta el numero $num";
    for ($i=1; $i < $num+1; $i++) { 
        $suma += $i; 
    }
    echo "<br>La suma es: $suma";
    ?>
</body>
</html>