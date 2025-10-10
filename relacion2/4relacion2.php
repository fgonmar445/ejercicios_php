<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 - Array</title>
    <link rel="shortcut icon" href="./logoPlayamar.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="bg-secondary-subtle">
    <h1 class="text-center mt-3 text-primary">Ejercicio 4 Relacion 2 - Manejo basico de Arrays con BS</h1>
    <?php
    // Para desactivar warning se puede indicar:
    error_reporting(E_ALL & ~E_WARNING);
    //si declaro una const en mayus sin $
    const SEMANA = [
        "lunes",
        "martes",
        "miercoles",
        "jueves",
        "viernes",
        "sabado",
        "domingo"
    ];
    echo "<br><p class='text-center fs-4 fw-bold'> El primer dia de la semana es: ", SEMANA[0];
    echo "<br>Una semana tiene ", count(SEMANA), " dias<br></p>";
    echo "<ol class=' list-group w-50 mx-auto'>";
    for ($i = 0; $i < count(SEMANA); $i++) {
        echo "<li class='list-group-item text-success fw-bold'>", SEMANA[$i], "</li>";
    }
    echo "</ol>";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>