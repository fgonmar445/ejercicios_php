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
    echo "<br><h2>Objeto serializado y unserializado<br></h2>";
    $objSerialize = serialize($obj);
    var_dump($objSerialize);
    echo "<br><br>";
    $objUnse = unserialize($objSerialize);
    var_dump($objUnse);


    $datos = [
        "producto" => "Laptop",
        "precio" => 1200,
        "stock" => 5
    ];

    $obj = (object) $datos;
    echo "<br><br>";
    echo "<br><h2>Array serializado y unserializado<br></h2>";
    $arraySer = serialize($datos);
    var_dump($arraySer,"<br><br>");
    $arUnse = unserialize($arraySer);
    var_dump("Array unse",$arUnse,"<br>");

    echo "<br><br>";
    echo $obj->producto;
    echo $obj->precio;
    ?>
</body>

</html>