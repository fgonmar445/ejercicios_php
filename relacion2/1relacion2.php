<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ejercicio 1 Relación 2 - Formulario Calculadora</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
    crossorigin="anonymous"
  />
</head>

<body class="bg-light">
  <div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card mx-auto shadow" style="max-width: 500px;">
      <div class="card-header bg-primary text-white text-center">
        <h4>Formulario Calculadora</h4>
      </div>
      <div class="card-body">
        <form action="calculadora.php" method="get">
          <div class="mb-3">
            <label for="num1" class="form-label">Introduce número 1:</label>
            <input type="number" step="0.01" class="form-control" name="num1" id="num1" required>
          </div>
          <div class="mb-3">
            <label for="num2" class="form-label">Introduce número 2:</label>
            <input type="number" step="0.01" class="form-control" name="num2" id="num2" required>
          </div>
          <div class="mb-3">
            <label for="operador" class="form-label">Selecciona operador:</label>
            <select class="form-select" name="operador" id="operador" required>
              <option value="+">Suma</option>
              <option value="-">Resta</option>
              <option value="*">Multiplicación</option>
              <option value="/">División</option>
            </select>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-success">Enviar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>
