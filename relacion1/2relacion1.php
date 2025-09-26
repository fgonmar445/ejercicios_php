<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 Relacion 1 - Tipos de variable y formateado</title>
    <link rel="shortcut icon" href="./logoPlayamar.png" type="image/x-icon" >
</head>
<body>
    <?php
    $b = true;
    $num = 1;
    $dec = 3.5;
    $tex = 'hola';
    echo var_dump($b);
    echo"<br>", var_dump($num);
    echo"<br>", var_dump($dec);
    echo"<br>", var_dump($tex);
    printf ("<br>Es valor booleano es %b",$b);
    printf ("<br>Un valor real en notacion cientifica se puede expresar %E" ,$dec);
    printf ("<br> El texto introducido es [%s] " ,$tex);
    ?>
    
</body>
</html>