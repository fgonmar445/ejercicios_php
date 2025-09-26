<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12 Relacion 1 - Programa nota numerica</title>
</head>

<body>
    <h2>Ejercicio 12 Relacion 1 - Programa nota numerica</h2>
    <?php
    $nota = 0;
    echo "Has sacado un $nota, a continuacion le daremos el resultado.";
    echo "<br>ESPERE...<br>";
    switch (true) {
        case ($nota >= 9 && $nota <= 10):
            echo "Felicidades, has sacado SOBRESALIENTE";
            break;
        case ($nota >= 7):
            echo "Felicidades, has sacado NOTABLE";
            break;
        case ($nota >= 6):
            echo "Felicidades, has sacado BIEN";
            break;
        case ($nota >= 5):
            echo "Felicidades, has sacado SUFICIENTE";
            break;
        case ($nota >= 0):
            echo "Debes de estudiar más, has SUSPENDIDO";
            break;
        default:
            echo "Introduce una nota correcta";
            break;
    }
    ?>
</body>

</html>