<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Cálculo con funciones anónimas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-4">

    <h2 class="mb-3">Cálculo de circunferencia, círculo y esfera</h2>

    <!-- Formulario -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="mb-4">
        <div class="mb-3">
            <label for="radio" class="form-label">Introduce el radio (positivo real):</label>
            <input type="number" step="any" min="0" id="radio" name="radio" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['radio'])) {
        $r = floatval($_POST['radio']);

        if ($r > 0) {
            // Circunferencia: longitud = 2πr
            $circunferencia = fn($r) => 2 * M_PI * $r;

            // Área del círculo: πr²
            $circulo = fn($r) => M_PI * ($r ** 2);

            // Volumen de la esfera: (4/3)πr³
            $esfera = fn($r) => (4 / 3) * M_PI * ($r ** 3);

            $longitud = $circunferencia($r);
            $area = $circulo($r);
            $volumen = $esfera($r);

            echo "<div class='alert alert-info'><strong>Circunferencia:</strong> $longitud</div>";
            echo "<div class='alert alert-success'><strong>Área del círculo:</strong> $area</div>";
            echo "<div class='alert alert-warning'><strong>Volumen de la esfera:</strong> $volumen</div>";
        } else {
            echo "<div class='alert alert-danger'>El radio debe ser un número positivo.</div>";
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>