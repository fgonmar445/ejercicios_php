<?php
$resultado = "";

    $num1 = ($_GET["num1"]);
    $num2 = ($_GET["num2"]);
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
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Resultado Calculadora</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet" />
</head>

<body>
    <main class="container py-5 w-50">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card border-0 shadow">
                    <div class="card-header bg-success text-white text-center">
                        <h4 class="mb-0">Resultado</h4>
                    </div>
                    <div class="card-body text-center">
                        <p class="fs-5">El resultado de la operación es:</p>
                        <div class="alert alert-info fw-bold">
                            <?= $resultado ?>
                        </div>
                        <a href="10relacion2.php" class="btn btn-secondary mt-3">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>