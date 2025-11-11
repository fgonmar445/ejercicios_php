<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Probando cookies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


</head>

<body>

    <div class="container-fluid w-75">
        <?php
        $id = $_POST['id'];
        $pass = $_POST['pass'];
        unset($_SESSION['error']);

        if (comprobarAcceso($id, $pass)) {
            setcookie("usuario", $id);

            if (isset($_COOKIE["usuario"])) {
                echo "Te llamas " . $_COOKIE["usuario"];
            }

            $_SESSION['usu'] = $id;

            echo "Tu eres " .$_SESSION['usu'] . "segun tu var de sesion";

        } else {
            $_SESSION['error'] = true;
            header("Location: 1relacion4.php");
        }

        function comprobarAcceso($id, $pass)
        {

            define("USER_CORRECTO", "a");
            define("PASS_CORRECTA", "a");

            return ($id == USER_CORRECTO && $pass == PASS_CORRECTA);
        }
        ?>
    </div>
</body>

</html>