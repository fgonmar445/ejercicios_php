<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Funciones de Fecha y Hora en PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="card shadow-lg mx-auto" style="max-width: 700px;">
            <div class="card-header bg-primary text-white text-center">
                <h3>Funciones de Fecha y Hora</h3>
            </div>
            <div class="card-body">

                <?php
                date_default_timezone_set('Europe/Madrid');

                echo "<h5 class='text-center mb-4'>Ejemplos prácticos con DateTime</h5>";

                $ahora = new DateTime();
                echo "<p><strong>Fecha y hora actual:</strong> " . $ahora->format('Y-m-d H:i:s') . "</p>";
                echo "<p><strong>Hoy es:</strong> " . nombreDiaSemana($ahora) . ", " . $ahora->format('d') . " de " . nombreMes($ahora) . " de " . $ahora->format('Y') . "</p>";

                $masDiez = clone $ahora;
                $masDiez->modify('+10 days');
                echo "<p><strong>Dentro de 10 días será:</strong> " . $masDiez->format('Y-m-d') . " (" . nombreDiaSemana($masDiez) . ")</p>";

                $menosMes = clone $ahora;
                $menosMes->modify('-1 month');
                echo "<p><strong>Hace un mes fue:</strong> " . $menosMes->format('Y-m-d') . " (" . nombreDiaSemana($menosMes) . ")</p>";

                echo "<p><strong>Este mes es:</strong> " . nombreMes($ahora) . " </p>";

                echo "<p><strong>Hoy es:</strong> " . nombreDiaSemana($ahora) . " </p>";

                // Función para obtener el nombre del día en español
                function nombreDiaSemana($fecha)
                {
                    $dias = ['domingo', 'lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado'];
                    return $dias[$fecha->format('w')];
                }

                // Función para obtener el nombre del mes en español
                function nombreMes($fecha)
                {
                    $meses = [
                        1 => 'enero',
                        2 => 'febrero',
                        3 => 'marzo',
                        4 => 'abril',
                        5 => 'mayo',
                        6 => 'junio',
                        7 => 'julio',
                        8 => 'agosto',
                        9 => 'septiembre',
                        10 => 'octubre',
                        11 => 'noviembre',
                        12 => 'diciembre'
                    ];
                    return $meses[intval($fecha->format('n'))];
                }
                ?>

            </div>
        </div>
    </div>
</body>

</html>