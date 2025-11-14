<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Generador de menús con probabilidad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-4">

    <h2 class="mb-4">Menús sugeridos con probabilidad especial</h2>

    <?php
    // Carta de platos
    $menu = [
        'entrante' => ['Ensalada César', 'Hummus', 'Boquerones al natural'],
        'primero'  => ['Gazpachuelo', 'Salmorejo', 'Ajo Blanco'],
        'segundo'  => ['Fritura Malagueña', 'Conejo al ajillo', 'Pisto con huevo'],
        'postre'   => ['Helado 3 sabores', 'Flan', 'Tarta de Queso']
    ];

    // Array asociativo con imágenes de los primeros platos
    $imagenesPrimeros = [
        'Gazpachuelo' => 'img/gazpachuelo.jpg',
        'Salmorejo'   => 'img/salmorejo.jpg',
        'Ajo Blanco'  => 'img/ajoblanco.jpg'
    ];

    // Número de menús sugeridos
    $n = 7;

    // Función para elegir con doble probabilidad la tercera opción
    function elegirConProbabilidad($platos)
    {
        // duplicamos la tercera opción
        $platosConPeso = $platos;
        $platosConPeso[] = $platos[2]; // añadimos otra vez la tercera opción
        return $platosConPeso[array_rand($platosConPeso)];
    }

    for ($i = 1; $i <= $n; $i++) {
        $entrante = elegirConProbabilidad($menu['entrante']);
        $primero  = elegirConProbabilidad($menu['primero']);
        $segundo  = elegirConProbabilidad($menu['segundo']);
        $postre   = elegirConProbabilidad($menu['postre']);

        echo "
        <div class='card mb-3'>
            <div class='card-header bg-primary text-white'>
                <strong>Menú sugerido $i</strong>
            </div>
            <div class='card-body'>
                <p><strong>Entrante:</strong> $entrante</p>
                <p><strong>Primero:</strong> $primero</p>
                <p><strong>Segundo:</strong> $segundo</p>
                <p><strong>Postre:</strong> $postre</p>";

        // Mostrar imagen del primer plato si existe en el array de imágenes
        if (isset($imagenesPrimeros[$primero])) {
            $imgUrl = $imagenesPrimeros[$primero];
            echo    "<div class='mt-3 text-center'>
                        <img src='$imgUrl' alt='$primero' class='img-fluid rounded' style='max-width:300px;'>
                    </div>";
        }

        echo "</div></div>";
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>