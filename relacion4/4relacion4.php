<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinar Numero</title>
</head>

<body>

    <form method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="num">Elige un numero</label>
        <input type="number" name="num" id="num">
        <input type="submit" value="Enviar">
    </form>
    <?php
    session_start();

    if (!isset($_SESSION['numero'])) {
        $_SESSION['numero'] = random_int(1, 100);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['num'])) {
        $num = $_GET['num'];
        $numero = $_SESSION['numero'];

        echo "El numero a adivinar: $numero <br>";
        if ($num < $numero) {
            echo "El numero $num es menor";
        } elseif ($num > $numero) {
            echo "El numero $num es mayor";
        } else {
            echo "Enhorabuena acertaste";
        }
    }
    ?>
</body>

</html>