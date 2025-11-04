<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Decimal a Binario</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Conversor Binario</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-secondary text-white">
                        <h5 class="mb-0">Introduce un número decimal</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="mb-3">
                                <label for="numero" class="form-label">Número decimal</label>
                                <input type="number" class="form-control" id="numero" name="numero" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Convertir a binario</button>
                        </form>

                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numero"])) {
                            
                            $num = intval($_POST["numero"]);
                            $original = $num;
                            $resul = "";

                            if ($num == 0) {
                                $resul = "0";
                            } else {
                                while ($num >= 2) {
                                    $resul = ($num % 2) . $resul;
                                    $num = intdiv($num, 2);
                                }
                                $resul = "1" . $resul;
                            }

                            echo "<hr>";
                            echo "<p class='fs-5'>Número original: <strong>$original</strong></p>";
                            echo "<p class='fs-5'>Resultado en binario: <span class='badge bg-success'>$resul</span></p>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>