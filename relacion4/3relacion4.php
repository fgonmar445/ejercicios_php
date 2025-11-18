<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinar Numero</title>
</head>

<body>

    <?php
    if (!isset($_GET['numero_servidor'])) {
        // Primera vez: el servidor "piensa" un número
        $numero_servidor = random_int(1, 100);
    } else {
        // Recuperamos el número que el servidor pensó
        $numero_servidor = (int)$_GET['numero_servidor'];
        $num_usuario = (int)$_GET['num'];
        

        if ($num_usuario < $numero_servidor) {
            $solucion = "El número $num_usuario es menor.";
        } elseif ($num_usuario > $numero_servidor) {
            $solucion = "El número $num_usuario es mayor.";
        } else {
            $solucion = "¡Enhorabuena! Has acertado el número $numero_servidor";
            // Reiniciamos el juego generando un nuevo número
            $numero_servidor = random_int(1, 100);
        }
    }
    $mensaje = "He pensado $numero_servidor ";
    ?>
    <p><?php echo $mensaje; ?></p>
    <p><?php echo $solucion; ?></p>

    <form method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="num">Elige un número:</label>
        <input type="number" name="num" id="num" required>
        <!-- Campo oculto que mantiene el número del servidor -->
        <input type="hidden" name="numero_servidor" value="<?php echo $numero_servidor; ?>">
        <input type="submit" value="Enviar">
    </form>

</body>

</html>