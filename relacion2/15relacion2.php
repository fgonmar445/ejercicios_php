<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13 - Factorial número</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function validarFormulario() {
            const num = document.getElementById("num").value;
            if (num === "" || isNaN(num) || num < 0 || !Number.isInteger(parseFloat(num))) {
                alert("Por favor, introduce un número natural (entero positivo o cero).");
                return false;
            }
            return true;
        }
    </script>
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="mb-4">Ejercicio 15 Relacion 2 - Factorial número</h1>

        <form method="post" onsubmit="return validarFormulario()" class="mb-4">
            <div class="mb-3">
                <label for="num" class="form-label">Introduce un número natural:</label>
                <input type="number" class="form-control" id="num" name="num" min="0" step="1" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular factorial</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num = intval($_POST["num"]);

            if ($num < 0) {
                echo '<div class="alert alert-danger">El factorial de un número negativo no está definido. Debe ser un número natural.</div>';
            } else {
                $factorial = 1;
                for ($i = $num; $i > 1; $i--) {
                    $factorial *= $i;
                }
                echo "<div class='alert alert-success'>El factorial de <strong>$num</strong> es <strong>$factorial</strong>.</div>";
            }
        }
        ?>
    </div>
</body>
</html>
