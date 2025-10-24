<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ejercicio 15 y 16 - Número primo o divisores</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet"
    crossorigin="anonymous"
  />
</head>
<body class="bg-light">
  <div class="container py-5">
    <h1 class="text-center text-primary mb-4">Ejercicio 15 y 16 - Número primo o divisores</h1>

    <!-- Formulario de entrada -->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="mb-4">
      <div class="mb-3">
        <label for="numero" class="form-label">Introduce un número entero positivo:</label>
        <input type="number" class="form-control" id="numero" name="numero" min="1" required>
      </div>
      <div class="mb-3">
        <label class="form-label">¿Qué deseas hacer?</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="accion" id="primo" value="primo" required>
          <label class="form-check-label" for="primo">Comprobar si es primo</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="accion" id="divisores" value="divisores">
          <label class="form-check-label" for="divisores">Mostrar todos los divisores</label>
        </div>
      </div>
      <button type="submit" class="btn btn-success">Procesar</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $numero = intval($_POST["numero"]);
      $accion = $_POST["accion"];

      if ($numero < 1) {
        echo '<div class="alert alert-danger">⚠️ El número debe ser entero y positivo.</div>';
      } else {
        if ($accion === "primo") {
          $esPrimo = true;
          for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i === 0) {
              $esPrimo = false;
              break;
            }
          }
          if ($esPrimo && $numero > 1) {
            echo "<div class='alert alert-success'>✅ El número <strong>$numero</strong> es primo.</div>";
          } else {
            echo "<div class='alert alert-warning'>❌ El número <strong>$numero</strong> no es primo.</div>";
          }
        } elseif ($accion === "divisores") {
          echo "<h4>Divisores de <strong>$numero</strong>:</h4>";
          echo "<div class='d-flex flex-wrap gap-2 mt-3'>";
          for ($i = 1; $i <= $numero; $i++) {
            if ($numero % $i === 0) {
              echo "<span class='badge text-bg-success px-3 py-2'>$i</span>";
            } else {
              echo "<span class='badge text-bg-secondary px-3 py-2'>$i</span>";
            }
          }
          echo "</div>";
        } else {
          echo '<div class="alert alert-danger">⚠️ Opción no válida.</div>';
        }
      }
    } else {
      echo '<div class="alert alert-danger">⚠️ No se han enviado datos.</div>';
    }
    ?>
  </div>
  
</body>
</html>
