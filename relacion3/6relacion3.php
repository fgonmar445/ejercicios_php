<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 - Relación 3 - Felipe González</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="card shadow-lg mx-auto" style="max-width: 700px;">
            <div class="card-header bg-danger text-white text-center">
                <h3>Ejercicio 6 - Relación 3</h3>
                <p class="mb-0">Felipe González</p>
            </div>
            <div class="card-body">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <label for="tiradas" class="form-label">Número de tiradas:</label>
                    <input type="text" class="form-control mb-3" name="tiradas" id="tiradas" required>
                    <input type="submit" value="Tirar" class="btn btn-success">
                </form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['tiradas'])) {
    $tiradas = intval($_POST['tiradas']);

    if ($tiradas <= 0) {
        echo "<div class='alert alert-danger mt-4'>Por favor, introduce un número válido mayor que cero.</div>";
    } else {
        $justo = array_fill(1, 6, 0);
        $truco = array_fill(1, 6, 0);

        for ($i = 0; $i < $tiradas; $i++) {
            $dado1 = rand(1, 6);
            $justo[$dado1]++;

            $r = rand(1, 8);
            $dado2 = ($r <= 5) ? $r : 6;
            $truco[$dado2]++;
        }

        echo "<h4 class='mt-4 text-center'>Frecuencias del dado justo</h4>";
        echo "<table class='table table-bordered table-striped'><thead><tr><th>Cara</th><th>Frecuencia</th></tr></thead><tbody>";
        foreach ($justo as $cara => $frecuencia) {
            echo "<tr><td>$cara</td><td>$frecuencia</td></tr>";
        }
        echo "</tbody></table>";

        echo "<h4 class='mt-4 text-center'>Frecuencias del dado trucado</h4>";
        echo "<table class='table table-bordered table-striped'><thead><tr><th>Cara</th><th>Frecuencia</th></tr></thead><tbody>";
        foreach ($truco as $cara => $frecuencia) {
            echo "<tr><td>$cara</td><td>$frecuencia</td></tr>";
        }
        echo "</tbody></table>";
    }
}
?>
            </div>
        </div>
    </div>
</body>
</html>
