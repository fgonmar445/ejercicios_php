<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ejercicio 1 Relación 3 - Comprobar nº Primo</title>
</head>

<body>
  <h4>Comprobar si el numero es primo</h4>
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
    <label for="num1">Introduce un número:</label>
    <input type="number" class="form-control" name="num1" id="num1" required placeholder="Introduce un numero positivo">
    <input type="submit" class="btn btn-success" value="Enviar">
    <?php

    function esPrimo($num): bool
    {

      if ($num < 2 || $num != intval($num)) {
        return false;
      }

      for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0)
          return false;
      }

      return true;
    }

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['num1'])) {
      $numero = $_GET['num1'];
      if (esPrimo($numero)) {
        echo "<div class='alert pt-5 alert-success mt-3'>El número $numero es primo.</div>";
      } else {
        echo "<div class='alert pt-3 alert-danger mt-3'>El número $numero no es primo.</div>";
      }
    }
    echo "<p><strong>Números primos entre 1 y $numero:</strong></p>";
    echo "<ul class='list-group'>";
    for ($i = 1; $i <= $numero; $i++) {
      if (esPrimo($i)) {
        echo "<li class='list-group-item'>$i</li>";
      }
    }
    echo "</ul>";
    ?>
</body>

</html>