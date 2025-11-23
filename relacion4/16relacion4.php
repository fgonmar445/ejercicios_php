<?php

declare(strict_types=1);

namespace App\Utilidades;

class Calculadora
{

    public static function sumar(int $a, int  $b)
    {
        return $a + $b;
    }
}

class FormateadorTexto
{
    public function mayusculas($texto)
    {
        return strtoupper($texto);
    }
}
//Dentro de la misma clase lo llamamos asi
$formateador = new FormateadorTexto();
echo $formateador->mayusculas("hola mundo");

//NAMESPACE ANIDADO
namespace App\Controladores;

class UsuarioController
{
    public function mostrarUsuario($nombre)
    {
        echo "El nombre del usuario es: $nombre";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // Usar la clase con su espacio de nombres completo
    echo \App\Utilidades\Calculadora::sumar(5, 10);

    // Ejemplo para usar clase fuera del namespace
    require 'FormateadorTexto.php';

    $formateador = new \App\Utilidades\FormateadorTexto();
    echo $formateador->mayusculas("texto desde fuera del namespace");

    //ALIAS de NAMESPACE
    use App\Utilidades as Util;

    $calculadora = new Util\Calculadora();
    echo Util\Calculadora::sumar(8, 12);


    //ALIAS DE CLASES DEL NAMESPACE
    use App\Utilidades\Calculadora as Calc;

    echo Calc::sumar(5, 4);

    require 'UsuarioController.php';

    $controlador = new \App\Controladores\UsuarioController();
    $controlador->mostrarUsuario("Carlos");
    ?>
</body>

</html>