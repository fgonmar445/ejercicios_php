<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ejercicio 1 Relación 2 - Formulario Calculadora</title>
</head>

<body>
  <h4>Formulario Calculadora</h4>
  <form action="calculadora.php" method="get">
    <label for="num1">Introduce número 1:</label>
    <input type="number" step="0.01" class="form-control" name="num1" id="num1" required>
    <br><label for="num2">Introduce número 2:</label>
    <input type="number" step="0.01" class="form-control" name="num2" id="num2" required>
    <br><label for="operador" class="form-label">Selecciona operador:</label>
    <select class="form-select" name="operador" id="operador" required>
      <option value="" disabled selected>Selecciona operación</option>
      <option value="+">Suma</option>
      <option value="-">Resta</option>
      <option value="*">Multiplicación</option>
      <option value="/">División</option>
    </select>
    <button type="submit" class="btn btn-success">Enviar</button>
</body>

</html>