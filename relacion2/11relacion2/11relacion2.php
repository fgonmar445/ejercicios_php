<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 7 - Cálculo de notas</title>
  <link rel="shortcut icon" href="./logoPlayamar.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container py-5">
    <div class="text-center mb-4">
      <h1 class="display-6">Ejercicio 7 - Cálculo de nota final</h1>
      <p class="lead">Media de dos notas con penalización por faltas</p>
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
            <label for="faltas" class="form-label">Faltas</label>
            <input type="text" class="form-control" name="faltas" id="faltas"
              placeholder="Número entero entre 0 y 10"
              onchange="limpiarError('faltas')" oninput="limpiarError('faltas')">
            <div id="faltasHelp" class="form-text text-danger" style="visibility: hidden;">
              Las faltas deben ser enteras entre 0 y 10
            </div>
          </div>

          <div class="d-grid">
            <button type="submit" class="btn btn-primary">Calcular nota</button>
          </div>
        </form>
      </div>
    </div>

    <?php
    if (isset($_GET['nota1']) && isset($_GET['nota2']) && isset($_GET['faltas'])) {
      $nota1 = intval($_GET['nota1']);
      $nota2 = intval($_GET['nota2']);
      $faltas = intval($_GET['faltas']);
      $notaFinal = ($nota1 + $nota2) / 2 - $faltas * 0.25;

      echo "<div class='alert alert-info mt-4 text-center'>
              <strong>Resultado:</strong> La nota final es <span class='fw-bold'>" . number_format($notaFinal, 2) . "</span>
            </div>";
    }
    ?>

  </div>

  <script src="./validaciones11.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
