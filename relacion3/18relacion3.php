<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Generador de menús</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-4">

    <h2 class="mb-4">Generador de menús sugeridos</h2>

    <?php
    // Carta de platos
    $menu = [
        'entrante' => ['Ensalada César', 'Hummus', 'Boquerones al natural'],
        'primero'  => ['Gazpachuelo', 'Salmorejo', 'Ajo Blanco'],
        'segundo'  => ['Fritura Malagueña', 'Conejo al ajillo', 'Pisto con huevo'],
        'postre'   => ['Helado 3 sabores', 'Flan', 'Tarta de Queso']
    ];

    // Número de menús sugeridos
    $n = 3; // puedes cambiarlo a cualquier número

    // Generador de menús aleatorios
    for ($i = 1; $i <= $n; $i++) {
        $entrante = $menu['entrante'][array_rand($menu['entrante'])];
        $primero  = $menu['primero'][array_rand($menu['primero'])];
        $segundo  = $menu['segundo'][array_rand($menu['segundo'])];
        $postre   = $menu['postre'][array_rand($menu['postre'])];

        echo "
        <div class='card mb-3'>
            <div class='card-header bg-primary text-white'>
                <strong>Menú sugerido $i</strong>
            </div>
            <div class='card-body'>
                <p><strong>Entrante:</strong> $entrante</p>
                <p><strong>Primero:</strong> $primero</p>
                <p><strong>Segundo:</strong> $segundo</p>
                <p><strong>Postre:</strong> $postre</p>
            </div>
        </div>
        ";
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>