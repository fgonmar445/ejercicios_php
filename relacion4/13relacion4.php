<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $socios = [
        "socio1" => [
            "nombre" => "Juan",
            "apellidos" => "Pérez García",
            "edad" => 25
        ],
        "socio2" => [
            "nombre" => "María",
            "apellidos" => "López Fernández",
            "edad" => 30
        ],
        "socio3" => [
            "nombre" => "Carlos",
            "apellidos" => "Martín Sánchez",
            "edad" => 22
        ]
    ];
    echo "<pre>";
    var_dump($socios);
    echo "</pre>";

    $json = json_encode($socios);
    echo "<br><br>";
    echo "<pre>";
    var_dump($json);
    echo "</pre>";

    $decode = json_decode($json);
    echo "<pre>";
    echo "<br><br> Deode";
    var_dump($decode);
    echo "</pre>";
    
    //Para convertir a array asoc, true en json_decode
    $array = json_decode($json,true);
    echo "<pre>";
    var_dump($array);
    echo "</pre>";

    ?>
</body>

</html>