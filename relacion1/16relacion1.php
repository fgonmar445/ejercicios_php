<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Divisores de un número</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet"
    crossorigin="anonymous"
  />
</head>
<body class="bg-light">
  <div class="container py-5">
    <h1 class="text-center text-primary mb-4">Ejercicio 16 Relacion 1 - Divisores de un número entero positivo</h1>

    <form method="post" class="mb-4">
      <div class="mb-3">
        <label for="numero" class="form-label">Introduce un número entero positivo:</label>
        <input type="number" class="form-control" id="numero" name="numero" min="1" required>
      </div>
      <button type="submit" class="btn btn-success">Mostrar divisores</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $numero = intval($_POST["numero"]);

      if ($numero < 1) {
        echo '<div class="alert alert-danger">⚠️ El número debe ser entero y positivo.</div>';
      } else {
        echo "<h4 class='mt-4'>Divisores de <strong>$numero</strong>:</h4>";
        echo "<div class='d-flex flex-wrap gap-2 mt-3'>";

        for ($i = 1; $i <= $numero; $i++) {
          if ($numero % $i === 0) {
            echo "<span class='badge text-bg-success px-3 py-2'>$i</span>";
          } else {
            echo "<span class='badge text-bg-secondary px-3 py-2'>$i</span>";
          }
        }

        echo "</div>";
      }
    }
    ?>
  </div>
</body>
</html>
