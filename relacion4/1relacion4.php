<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


</head>

<body>
    <div class="container-fluid w-75">

        <form method="post" action="./1conf-cookies.php">
            <div class="mb-3">
                <label for="id" class="form-label">Identificador:</label>
                <input type="text" class="form-control" name="id" id="id" required>
                <div id="idHelp" class="form-text">Obligatorio</div>
            </div>

            <div class="mb-3">

                <label for="pass" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" name="pass" id="pass" required>
                <div id="passHelp" class="form-text">Debe contener, numero, letra</div>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Enviar</button>
            </div>


        </form>
    </div>
    <?php
    if (isset($_SESSION['error'])) {
        echo '<div class="alert alert-danger w-50 container-fluid" role="alert">
        <p class="text-center">Usuario o contraseña desconocido</p>
        </div>';
    }
    ?>
</body>

</html>