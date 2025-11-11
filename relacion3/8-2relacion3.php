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
        <input type="checkbox" name="tipoTexto[]" id="textoMayus" value="mayus">
        <label for="tipoTextoMayus">TEXTO EN MAYUSCULAS</label>
        <input type="checkbox" name="tipoTexto[]" id="textoMinus" value="minus">
        <label for="tipoTextoMinus">texto en minusculas</label><br>
        <input type="submit" value="Enviar">

    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $texto = isset($_POST['texto']) ? htmlspecialchars($_POST['texto']) : '';
        $tipos = isset($_POST['tipoTexto']) ? $_POST['tipoTexto'] : [];

        echo "<p>Texto original: <strong>$texto</strong></p>";

        if (in_array('mayus', $tipos)) {
            echo "<p>En mayúsculas: <strong>" . strtoupper($texto) . "</strong></p>";
        }

        if (in_array('minus', $tipos)) {
            echo "<p>En minúsculas: <strong>" . strtolower($texto) . "</strong></p>";
        }

        if (empty($tipos)) {
            echo "<p style='color:red;'>No seleccionaste ningún tipo de transformación.</p>";
        }
    }
    ?>

</body>

</html>