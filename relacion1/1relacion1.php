<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - Hola Mundo</title>
    <link rel="shortcut icon" href="logoPlayamar.png" type="image/x-icon">
</head>

<body>
    <h1> Ejercicio 1 Relacion 1 - Hola mundo en PHP</h1>
    <i>
        <?php
        $nombre  = "Josele";    // las variables empiezan por $ y no son fuertemente tipadas
    echo "Hola $nombre";        // una variable entre comillas dobles es sustituida por su valor
    echo '<br>Hola mundo';      //puedo usar comillas simples
    echo '<br>Hola $nombre';    //la variable con $ no se interpreta con comillas simples ''
    echo '<br>Hola ',$nombre;
    echo "<br>Hola " ,strtoupper($nombre),"<br>";
    echo phpversion();
    
    echo "<br>" ,date('d.m.y H:i:s');
    echo "<br>", phpinfo();
    /*dgdrg
    drgdrg
    */
    ?>
    </i>

</body>
</html>