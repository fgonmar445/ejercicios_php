<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    if (isset($_COOKIE["carro"])) {

        $carroCookie = $_COOKIE["carro"];
        echo "<h2>Cookie capturada</h2><br>";
        $array1 = json_decode($carroCookie, true);

        echo "<h2>Array asoc</h2><br>";
        echo "<pre>";
        var_dump($array1);
        echo "</pre>";

        $obj = json_decode($carroCookie);

        echo "<h2>Obj stdClass</h2><br>";
        echo "<pre>";
        var_dump($obj);
        echo "</pre>";
    } else {
        echo "<p>La cookie 'carro' no está disponible todavía.</p>";
    }
    ?>
    ?>
</body>

</html>