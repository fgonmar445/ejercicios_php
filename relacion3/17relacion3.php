<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio Arrays PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-4">

    <?php
    // -----------------------------
    // Funciones auxiliares
    // -----------------------------
    function array_all($arr, $callback)
    {
        foreach ($arr as $v) {
            if (!$callback($v)) return false;
        }
        return true;
    }

    function array_any($arr, $callback)
    {
        foreach ($arr as $v) {
            if ($callback($v)) return true;
        }
        return false;
    }

    function array_find($arr, $callback)
    {
        foreach ($arr as $v) {
            if ($callback($v)) return $v;
        }
        return null;
    }

    function esPrimo($n)
    {
        if ($n < 2) return false;
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) return false;
        }
        return true;
    }

    // -----------------------------
    // 1. Arrays con range
    // -----------------------------
    // Impares entre 1 y 20
    $impares = range(1, 19, 2);

    // Múltiplos de 3 entre 1 y 40
    $multiplosDeTres = range(3, 39, 3);

    // -----------------------------
    // 2. Aplicaciones de funciones
    // -----------------------------

    // count → cuántos elementos tienen
    $numImpares = count($impares);
    $numMultiplos = count($multiplosDeTres);

    // array_any → comprobar si hay algún múltiplo de 5
    $hayMultiplo5 = array_any($impares, fn($n) => $n % 5 == 0);

    // array_filter → extraer los primos
    $primosImpares = array_filter($impares, 'esPrimo');

    // array_find → primera ocurrencia de dos cifras idénticas
    $dosCifrasIguales = array_find($impares, function ($n) {
        if ($n >= 10 && $n <= 99) {
            $digitos = str_split((string)$n);
            return $digitos[0] === $digitos[1];
        }
        return false;
    });

    // array_map → cuadrados
    $cuadrados = array_map(fn($n) => $n * $n, $impares);

    // array_walk → sustituir cada valor por su doble
    array_walk($impares, function (&$n) {
        $n *= 2;
    });

    // array_intersect → valores comunes en ambos arrays
    $comunes = array_intersect($impares, $multiplosDeTres);

    // -----------------------------
    // 3. Mostrar resultados
    // -----------------------------
    echo "<div class='alert alert-success'><strong>Impares:</strong> " . implode(', ', $impares) . "</div>";
    echo "<div class='alert alert-info'><strong>Múltiplos de 3:</strong> " . implode(', ', $multiplosDeTres) . "</div>";

    echo "<div class='alert alert-primary'><strong>Count:</strong> $numImpares impares, $numMultiplos múltiplos de 3</div>";

    echo "<div class='alert alert-warning'><strong>¿Hay algún múltiplo de 5 en impares?</strong> " . ($hayMultiplo5 ? "Sí" : "No") . "</div>";

    echo "<div class='alert alert-dark'><strong>Primos en impares:</strong> " . implode(', ', $primosImpares) . "</div>";

    echo "<div class='alert alert-secondary'><strong>Primera ocurrencia de dos cifras idénticas:</strong> " . ($dosCifrasIguales ?? "Ninguna") . "</div>";

    echo "<div class='alert alert-danger'><strong>Cuadrados de impares:</strong> " . implode(', ', $cuadrados) . "</div>";

    echo "<div class='alert alert-success'><strong>Valores comunes (intersección):</strong> " . (empty($comunes) ? "Ninguno" : implode(', ', $comunes)) . "</div>";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>