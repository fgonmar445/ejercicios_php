<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $carro = [
        "art1" => [
            "codigo" => "00A",
            "nombre" => "Monitor",
            "unidades" => 2,
            "precio" => 75.5
        ],
        "art2" => [
            "codigo" => "00B",
            "nombre" => "Raton optico",
            "unidades" => 2,
            "precio" => 17.25
        ],
        "art3" => [
            "codigo" => "01B",
            "nombre" => "Teclado portatil",
            "unidades" => 5,
            "precio" => 23.25
        ]
    ];

    echo "<pre>";
    echo "<h3>Carrito<br></h3>";
    var_dump($carro);
    echo "</pre>";

    $carroEncode = json_encode($carro);

    echo "<pre>";
    echo "<h3>Encode<br></h3>";
    var_dump($carroEncode);
    echo "</pre>";
    
    setcookie("carro", $carroEncode);
    
    echo "<pre>";
    echo "<h3>Cookie<br></h3>";
    var_dump($_COOKIE["carro"]);
    echo "</pre>";
    ?>

    <button><a href="cookie.php">Otra Pagina</a></button>
</body>

</html>