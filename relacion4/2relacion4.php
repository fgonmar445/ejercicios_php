<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>
    <div class="container-fluid w-75 mt-3">

        <?php

        if (!isset($_SESSION['a']) && !isset($_SESSION['b'])) {
            $_SESSION['a'] = 0;
            $_SESSION['b'] = 0;
        }

        if (isset($_REQUEST['b-sub'])) {

            switch ($_REQUEST['operacion']) {
                case '+a':
                    $_SESSION['a']++;
                    break;

                case '-a':
                    $_SESSION['a']--;
                    break;

                case '+b':
                    $_SESSION['b']++;
                    break;

                case '-b':
                    $_SESSION['b']--;
                    break;

                case 'a0':
                    $_SESSION['a'] = 0;
                    break;

                case 'b0':
                    $_SESSION['b'] = 0;
                    break;

                case 'des_ses':
                    $_SESSION['a'] = 0;
                    $_SESSION['b'] = 0;
                    session_destroy();
                    break;
            }
        }
        ?>
        <h3>A: <?php echo $_SESSION['a']; ?></h3>
        <h3>B: <?php echo $_SESSION['b']; ?></h3>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class="mb-3">
                <select name="operacion" id="operacion">

                    <option value="+a"> Aumentar A </option>
                    <option value="-a"> Disminuir A </option>
                    <option value="a0"> Resetear A </option>

                    <option value="+b"> Aumentar B</option>
                    <option value="-b"> Disminuir B </option>
                    <option value="b0"> Resetear B </option>
                    <option value="des_ses"> Destruir Sesion </option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="b-sub">Enviar</button>
        </form>
    </div>

</body>

</html>