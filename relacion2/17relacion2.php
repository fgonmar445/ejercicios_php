<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Ejercicio 17 - Relacion 2</title>
</head>

<body class="bg-primary">
    <div class="card rounded shadow bg-terciary mx-auto mt-5 w-25 border-0">
        <div class="card-header bg-danger text-center text-white w-100">
            <h3>Ejercicio 17 - Relacion 2</h3>
        </div>
        <div class="card-body">
            <form method="post" action="<?php echo ($_SERVER['PHP_SELF']); ?>">
                <div class="mb-3">
                    <label for="dividendo" class="form-label">Introduce dividendo</label>
                    <input type="number" class="form-control" name="dividendo" id="dividendo" required>
                </div>

                <div class="mb-3">
                    <label for="divisor" class="form-label">Introduce divisor</label>
                    <input type="number" class="form-control" name="divisor" id="divisor" required>
                </div>

                <fieldset class="mb-3">
                    <legend class="fs-6 mb-3">¿Qué deseas calcular?</legend>

                    <div class="form-check mb-2">
                        <input type="checkbox" class="form-check-input" name="operaciones[]" value="cociente" id="cociente">
                        <label for="cociente" class="form-check-label">Cociente</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="operaciones[]" value="resto" id="resto">
                        <label for="resto" class="form-check-label">Resto</label>
                    </div>
                </fieldset>

                <div class="mb-3 d-flex justify-content-center">
                    <button class="btn btn-danger">Resultado</button>
                </div>
            </form>

        </div>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $dividendo = $_POST["dividendo"];
        $divisor = $_POST["divisor"];
        $resultado = "";

        if ($divisor == 0) {
            $resultado = "Error: No se puede dividir entre cero.";
        } elseif (isset($_POST["operaciones"])) {
            $operaciones = $_POST["operaciones"];
            $resultado .= "<ul class='list-unstyled text-decoration-none'>";

            // Recorremos todas las operaciones seleccionadas con foreach
            foreach ($operaciones as $op) {
                switch ($op) {
                    case "cociente":
                        $cociente = intdiv($dividendo, $divisor);
                        $resultado .= "<li>Cociente: $cociente</li>";
                        break;

                    case "resto":
                        $resto = $dividendo % $divisor;
                        $resultado .= "<li>Resto: $resto</li>";
                        break;

                    default:
                        $resultado .= "<li>Operación desconocida: $op</li>";
                        break;
                }
            }

            $resultado .= "</ul>";
        } else {
            $resultado = "No seleccionaste ninguna operación.";
        }

        echo "<div class='alert alert-info mt-3 mx-auto fs-5 w-25 text-center'>$resultado</div>";
    }
    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>