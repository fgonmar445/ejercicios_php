<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Calculadora Profesional</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet" />
</head>
<?php
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["num1"], $_GET["num2"], $_GET["operacion"])) {
    $num1 = floatval($_GET["num1"]);
    $num2 = floatval($_GET["num2"]);
    $op = $_GET["operacion"];

    switch ($op) {
        case "+":
            $resultado = $num1 + $num2;
            break;
        case "-":
            $resultado = $num1 - $num2;
            break;
        case "*":
            $resultado = $num1 * $num2;
            break;
        case "/":
            $resultado = ($num2 != 0) ? $num1 / $num2 : "Error: división por cero";
            break;
        default:
            $resultado = "Operación no válida";
    }
}
?>
<body>
    <main class="container py-5 w-50">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card border-0 shadow">
                    <div class="card-header bg-dark text-white text-center">
                        <h4 class="mb-0">Calculadora </h4>
                    </div>
                    <div class="card-body">
                        <form method="get" onsubmit="return validarFormNotas()">
                            <div class="mb-3">
                                <label for="num1" class="form-label">Número 1</label>
                                <input type="number" name="num1" id="num1" class="form-control" step="0.01" required>
                            </div>

                            <div class="mb-3">
                                <label for="operacion" class="form-label">Operación</label>
                                <select name="operacion" id="operacion" class="form-select" required>
                                    <option value="">Selecciona una operación</option>
                                    <option value="+">Sumar</option>
                                    <option value="-">Restar</option>
                                    <option value="*">Multiplicar</option>
                                    <option value="/">Dividir</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="num2" class="form-label">Número 2</label>
                                <input type="number" name="num2" id="num2" class="form-control" step="0.01" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary fw-semibold">Calcular</button>
                            </div>
                        </form>
                        <?php if ($resultado !== ""): ?>
                            <div class="alert alert-info text-center mt-4">
                                Resultado: <?= $resultado ?>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="./validaciones.js"></script>
</body>


</html>