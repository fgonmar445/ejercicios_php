<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Decimal a Binario, Octal o Hexadecimal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4>Conversor de Número Decimal</h4>
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="mb-3">
                        <label for="numero" class="form-label">Introduce un número decimal:</label>
                        <input type="number" class="form-control" id="numero" name="numero" required>
                    </div>
                    <div class="mb-3">
                        <label for="base" class="form-label">Selecciona la operación:</label>
                        <select class="form-select" id="base" name="base" required>
                            <option value="" disabled selected>Selecciona operación</option>
                            <option value="2">Binario</option>
                            <option value="8">Octal</option>
                            <option value="16">Hexadecimal</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Convertir</button>
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numero"], $_POST["base"]) && $_POST["base"] !== "") {
                    $num = intval($_POST["numero"]);
                    $base = intval($_POST["base"]);
                    $original = $num;
                    $resul = "";

                    if ($num === 0) {
                        $resul = "0";
                    } else {
                        while ($num > 0) {
                            $digito = $num % $base;
                            $resul = ($base === 16 && $digito > 9)
                                ? match ($digito) {
                                    10 => 'A',
                                    11 => 'B',
                                    12 => 'C',
                                    13 => 'D',
                                    14 => 'E',
                                    15 => 'F',
                                }
                                : $digito
                            . $resul;
                            $num = intdiv($num, $base);
                        }
                    }

                    $nombreBase = match ($base) {
                        2 => "Binario",
                        8 => "Octal",
                        16 => "Hexadecimal",
                    };

                    echo "<p><strong>Número original:</strong> $original</p>";
                    echo "<p><strong>Base seleccionada:</strong> $nombreBase</p>";
                    echo "<p><strong>Resultado:</strong> <span class='badge bg-info text-dark'>$resul</span></p>";
                }
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
