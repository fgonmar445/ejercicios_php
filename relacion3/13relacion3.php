<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Procesar cadena</title>
    <!-- Bootstrap CSS desde CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h2 class="mb-3">Procesar cadena de texto</h2>

    <!-- Formulario -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="mb-4">
        <div class="mb-3">
            <input type="text" name="texto" class="form-control" placeholder="Introduce una cadena de texto" required>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['texto'])) {
        $texto = trim($_POST['texto']);

        // 1. Cadena del revés
        $reves = strrev($texto);
        $palindroma = (strcasecmp($texto, $reves) === 0) ? "Sí, es palíndroma" : "No es palíndroma";

        echo "<div class='alert alert-info'><strong>Del revés:</strong> $reves<br><em>$palindroma</em></div>";

        // 2. Palabras del revés
        $palabras = preg_split('/\s+/', $texto, -1, PREG_SPLIT_NO_EMPTY);
        $invertidas = array_reverse($palabras);
        echo "<div class='alert alert-warning'><strong>Palabras del revés:</strong> " . implode(' ', $invertidas) . "</div>";

        // 3. Mayúsculas y minúsculas
        echo "<div class='alert alert-success'><strong>Mayúsculas:</strong> " . strtoupper($texto) . "<br>";
        echo "<strong>Minúsculas:</strong> " . strtolower($texto) . "</div>";

        // 4. Recuento de caracteres y palabras
        $numCaracteres = strlen($texto);
        $numPalabras = str_word_count($texto);
        echo "<div class='alert alert-primary'><strong>Recuento:</strong> $numCaracteres caracteres, $numPalabras palabras</div>";

        // 5. crypt, md5 y sha1
        echo "<div class='alert alert-dark'><strong>crypt:</strong> " . crypt($texto, 'xy') . "<br>";
        echo "<strong>md5:</strong> " . md5($texto) . "<br>";
        echo "<strong>sha1:</strong> " . sha1($texto) . "</div>";
    }
    ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
