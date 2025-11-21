<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $obj = new stdClass();
    $obj->modulo = "Desarrollo Web en Entorno Servidor";
    $obj->acronimo = "DWES";
    $obj->curso = 2;
    $obj->descripcion = "Esto es una descripcion";
    $obj->teacher = "Pilar";

    $asignatura = (array) $obj;
    var_dump($asignatura);

    $datos = [
        "producto" => "Laptop",
        "precio" => 1200,
        "stock" => 5
    ];

    $obj = (object) $datos;

    echo $obj->producto;
    echo $obj->precio;
    ?>
</body>

</html>