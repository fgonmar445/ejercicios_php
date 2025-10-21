<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13 Relacion 2 - Array asociativo nota pond</title>
    <link rel="shortcut icon" href="./logoPlayamar.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container py-5">
    <div class="text-center mb-4">
      <h1 class="display-6">Ejercicio 13 Relacion 2 </h1>
      <p class="lead">Cálculo de nota final con Rúbrica </p>
    </div>

    <div class="card shadow w-50 mx-auto">
      <div class="card-body">
        <h4 class="card-title mb-4 text-center">Formulario de ingreso</h4>

        <form id="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">

          <div class="mb-3">
            <label for="nota1" class="form-label">Nota 1</label>
            <input type="text" class="form-control" name="nota1" id="nota1"
              placeholder="Número entero entre 1 y 10"
              onchange="limpiarError('nota1')" oninput="limpiarError('nota1')">
            <div id="nota1Help" class="form-text text-danger" style="visibility: hidden;">
              La nota debe ser entera entre 1 y 10
            </div>
          </div>

          <div class="mb-3">
            <label for="nota2" class="form-label">Nota 2</label>
            <input type="text" class="form-control" name="nota2" id="nota2"
              placeholder="Número entero entre 1 y 10"
              onchange="limpiarError('nota2')" oninput="limpiarError('nota2')">
            <div id="nota2Help" class="form-text text-danger" style="visibility: hidden;">
              La nota debe ser entera entre 1 y 10
            </div>
          </div>

          <div class="mb-3">
            <label for="nota3" class="form-label">Nota 3</label>
            <input type="text" class="form-control" name="nota3" id="nota3"
              placeholder="Número entero entre 1 y 10"
              onchange="limpiarError('nota3')" oninput="limpiarError('nota3')">
            <div id="nota3Help" class="form-text text-danger" style="visibility: hidden;">
              La nota debe ser entera entre 1 y 10
            </div>
          </div>

          <div class="mb-3">
            <label for="nota1" class="form-label">Nota 4</label>
            <input type="text" class="form-control" name="nota4" id="nota4"
              placeholder="Número entero entre 1 y 10"
              onchange="limpiarError('nota4')" oninput="limpiarError('nota4')">
            <div id="nota4Help" class="form-text text-danger" style="visibility: hidden;">
              La nota debe ser entera entre 1 y 10
            </div>
          </div>

          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Calcular nota</button>
          </div>
        </form>
      </div>
    </div>

          <?php
    $rubrica = [
        "inicial"=> 0.2,
        "primera"=> 0.3,
        "segunda"=> 0.2,
        "tercera" => 0.3
    ];

     if (isset($_GET['nota1']) && isset($_GET['nota2']) && isset($_GET['nota3'])
        && isset($_GET['nota4'])) {
    $calificaciones = [
        "inicial"=> intval($_GET['nota1']),
        "primera"=> intval($_GET['nota2']),
        "segunda"=> intval($_GET['nota3']),
        "tercera" => intval($_GET['nota4'])
    ];

    $notaFinal = 0;
    foreach ($rubrica as $prueba => $peso) {
        $notaFinal += $peso * $calificaciones[$prueba];
    }
    if ($notaFinal>=5) {
        echo "<div class='alert alert-info mt-4 text-center w-50 mx-auto'>
              <strong>Resultado:</strong> La nota final es <span class='fw-bold'>" . number_format($notaFinal, 2) . "</span>
            </div>";
    } else {
        echo "<div class='alert alert-danger mt-4 text-center  w-50 mx-auto'>
              <strong>Resultado:</strong> La nota final es <span class='fw-bold'>" . number_format($notaFinal, 2) . "</span>
            </div>";
    }
}

?>
<script src="./13validaciones.js"></script>
</body>
</html>