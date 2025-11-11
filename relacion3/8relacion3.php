<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8 Relacion 3</title>
</head>

<body>
    <form method="post" action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <br><br>
        <label for="texto">Introduce el texto</label>
        <input type="text" id="texto" name="texto"><br><br>
        <input type="radio" name="tipoTexto" id="textoMayus" value="mayus">
        <label for="tipoTextoMayus">TEXTO EN MAYUSCULAS</label>
        <input type="radio" name="tipoTexto" id="textoMinus" value="minus">
        <label for="tipoTextoMinus">texto en minusculas</label><br>
        <input type="submit" value="Enviar">

    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['texto']) && isset($_POST['tipoTexto'])) {
        $texto = htmlspecialchars($_POST['texto']);
        $tipo = $_POST['tipoTexto'];

        if ($tipo == 'minus') {
            $resul = strtolower($texto);
            echo "El texto en minus es: $resul";
        }
    }


    ?>
</body>

</html>