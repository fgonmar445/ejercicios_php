<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - Superglobals</title>
    <link rel="shortcut icon" href="./logoPlayamar.png" type="image/x-icon" >
</head>

<body>
    <h1>Ejercicio 3 Relacion 1 - Manejo de SUPERGLOBALS</h1>
    <ul>
        <?php
        echo "<li>","DOCUMENT-ROOT: ",$_SERVER['DOCUMENT_ROOT'],"</li>";
        echo "<li>","PHP-SELF: ",$_SERVER['PHP_SELF'],"</li>";
        echo "<li>","SERVER-NAME: ",$_SERVER['SERVER_NAME'],"</li>";
        echo "<li>","SERVER_SOFTWARE': ",$_SERVER['SERVER_SOFTWARE'],"</li>";
        echo "<li>","SERVER-PROTOCOL: ",$_SERVER['SERVER_PROTOCOL'],"</li>";
        echo "<li>","HTTP-HOST: ",$_SERVER['HTTP_HOST'],"</li>";
        echo "<li>","HTTP-USER-AGENT: ",$_SERVER['HTTP_USER_AGENT'],"</li>";
        echo "<li>","REMOTE-ADDR: ",$_SERVER['REMOTE_ADDR'],"</li>";
        echo "<li>","REMOTE-PORT: ",$_SERVER['REMOTE_PORT'],"</li>";
        echo "<li>","SCRIPT-FILENAME: ",$_SERVER['SCRIPT_FILENAME'],"</li>";
        echo "<li>","REQUEST-URI: ",$_SERVER['REQUEST_URI'],"</li>";
        echo "<li>", "var_dump ",var_dump($_SERVER),"</li>";
        echo "<li>", "print_r ",print_r($_SERVER),"</li>";
        echo "Mostrando con forecha";
        foreach ($_SERVER as $clave => $valor) {
            echo "<li>","$clave : $valor </li>";
        }
        ?>
    </ul>
</body>

</html>