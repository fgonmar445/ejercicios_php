<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ejercicio 1 Relación 3 - Comprobar nº Primo</title>
</head>

<body>
  <h4>Comprobar si el numero es primo</h4>
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
    <label for="num1">Introduce un número:</label>
    <input type="number" class="form-control" name="num1" id="num1" required placeholder="Introduce un numero positivo">
    <button type="submit" class="btn btn-success">Enviar</button>
    <?php

    function esPrimo($num) {
    
        if ($num < 2 || $num != intval($num)) {
        return false;
    }

    for ($i = 2; $i <= sqrt($num); $i++) {
      if ($num % $i == 0)
        return false;
    }

    return true;
  }

  if (isset($_GET['num1'])) {
    $numero = $_GET['num1'];
    if (esPrimo($numero)) {
      echo "<div class='alert pt-5 alert-success mt-3'>El número $numero es primo.</div>";
    } else {
      echo "<div class='alert pt-3 alert-danger mt-3'>El número $numero no es primo.</div>";
    }
  }
    ?>
</body>

</html>