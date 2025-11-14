<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio con range y arrays</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

<?php
// 1. Array numérico de 1 a 100
$numeros = range(1, 100);

// Funciones auxiliares
function array_all($arr, $callback) {
    foreach ($arr as $v) {
        if (!$callback($v)) return false;
    }
    return true;
}

function array_any($arr, $callback) {
    foreach ($arr as $v) {
        if ($callback($v)) return true;
    }
    return false;
}

function array_find($arr, $callback) {
    foreach ($arr as $v) {
        if ($callback($v)) return $v;
    }
    return null;
}

// Función para comprobar si un número es primo
function esPrimo($n) {
    if ($n < 2) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}

// 2. Comprobar si todos son positivos
$allPositivos = array_all($numeros, fn($n) => $n > 0);

// 3. Comprobar si hay algún múltiplo de 5
$anyMultiplo5 = array_any($numeros, fn($n) => $n % 5 == 0);

// 4. Extraer los primos
$primos = array_filter($numeros, 'esPrimo');

// 5. Primera ocurrencia de número con dos cifras idénticas (ej: 11, 22, 33...)
$dosCifrasIguales = array_find($numeros, function($n) {
    if ($n >= 10 && $n <= 99) {
        $digitos = str_split((string)$n);
        return $digitos[0] === $digitos[1];
    }
    return false;
});

// 6. Cuadrado de cada valor
$cuadrados = array_map(fn($n) => $n * $n, $numeros);

// 7. Sustituir cada valor por su doble
array_walk($numeros, function (&$n) { $n *= 2; });

// --- Mostrar resultados en alerts de Bootstrap ---
echo "<div class='alert alert-success'><strong>¿Todos positivos?</strong> " . ($allPositivos ? "Sí" : "No") . "</div>";

echo "<div class='alert alert-info'><strong>¿Algún múltiplo de 5?</strong> " . ($anyMultiplo5 ? "Sí" : "No") . "</div>";

echo "<div class='alert alert-warning'><strong>Números primos:</strong> " . implode(', ', $primos) . "</div>";

echo "<div class='alert alert-primary'><strong>Primera ocurrencia de dos cifras idénticas:</strong> " . ($dosCifrasIguales ?? "Ninguna") . "</div>";

echo "<div class='alert alert-dark'><strong>Cuadrados:</strong> " . implode(', ', array_slice($cuadrados, 0, 20)) . " ...</div>";

echo "<div class='alert alert-danger'><strong>Array con valores doblados:</strong> " . implode(', ', array_slice($numeros, 0, 20)) . " ...</div>";
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
