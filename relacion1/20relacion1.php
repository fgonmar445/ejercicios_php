<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script PHP conversor numero a bin, octa, hexa</title>
</head>

<body>
    <h1>Ejercicio 20 Relacion 1 - Script PHP conversor numero a bin, octa, hexa</h1>
    <?php
    $num = 128;
    $base = 8;
    $resul = "";
    echo "El numero original es $num y la base a la que pasarlo $base";
    echo "<br>El resultado es: ";
    while ($num >= $base) {
        if ($num % $base > 9) {
            switch ($digito) {
                case 10:
                    $resul = 'A' . $resul;
                    break;
                case 11:
                    $resul = 'B' . $resul;
                    break;
                case 12:
                    $resul = 'C' . $resul;
                    break;
                case 13:
                    $resul = 'D' . $resul;
                    break;
                case 14:
                    $resul = 'E' . $resul;
                    break;
                case 15:
                    $resul = 'F' . $resul;
                    break;
            }
        } else {
            $resul = (string) $num % $base . '-' . $resul;
        }
        $num /= $base;
    }
    echo (string)$num . $resul;
    ?>
</body>

</html>