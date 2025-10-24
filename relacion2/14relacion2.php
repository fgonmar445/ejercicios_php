<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14 - Nota con Bootstrap</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-secondary-subtle">
    <div class="container py-3 mt-5 bg-white rounded w-50 shadow">
        <h2 class="mb-4">Ejercicio 14 - Programa nota numérica</h2>

        <form method="post" class="mb-4">
            <div class="mb-3">
                <label for="nota" class="form-label">Introduce tu nota (0 a 10):</label>
                <input type="number" class="form-control" id="nota" name="nota" min="0" max="10" step="0.1" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nota = floatval($_POST["nota"]);
            $clase = "";
            $mensaje = "";

            if ($nota < 0 || $nota > 10) {
                echo '<div class="alert alert-danger">⚠️ Introduce una nota válida entre 0 y 10.</div>';
            } else {
                switch (true) {
                    case ($nota >= 9 && $nota <= 10):
                        $clase = "bg-warning";
                        $mensaje = "🎉 Felicidades, has sacado <strong>SOBRESALIENTE</strong>";
                        break;
                    case ($nota >= 7):
                        $clase = "bg-success";
                        $mensaje = "👏 Felicidades, has sacado <strong>NOTABLE</strong>";
                        break;
                    case ($nota >= 6):
                        $clase = "bg-primary";
                        $mensaje = "😊 Felicidades, has sacado <strong>BIEN</strong>";
                        break;
                    case ($nota >= 5):
                        $clase = "bg-info";
                        $mensaje = "🙂 Felicidades, has sacado <strong>SUFICIENTE</strong>";
                        break;
                    default:
                        $clase = "bg-danger";
                        $mensaje = "😢 Debes estudiar más, has <strong>SUSPENDIDO</strong>";
                        break;
                }

                $porcentaje = ($nota / 10) * 100;

                echo "<p>Has introducido un <strong>$nota</strong>. A continuación se muestra tu resultado:</p>";
                echo '<div class="progress" style="height: 30px;">';
                echo "<div class='progress-bar $clase' role='progressbar' style='width: $porcentaje%;' aria-valuenow='$nota' aria-valuemin='0' aria-valuemax='10'>$nota</div>";
                echo '</div>';
                echo "<p class='mt-3'>$mensaje</p>";
            }
        }
        ?>
    </div>
</body>

</html>
