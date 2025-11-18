<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creacion Restaurante</title>

</head>

<body>
    <?php

    class Restaurante
    {
        /* HASTA LA V 8  
        public string $nombre;
        public string $tipoCocina;
        private array $ratings;

        function __construct($nombre, $tipoCocina, $ratings = [])
        {

            $this->nombre = $nombre;
            $this->tipoCocina = $tipoCocina;
            
        }*/

        // CONSTRUCTOR
        public function __construct(
            public String $nombre,
            public string $tipoCocina,
            public array $ratings = []
        ) {
        }

        // DESTRUCTOR
        public function __destruct()
        {
            echo "Restaurante $this->nombre eliminado";
        }

        // TOSTRING
        public function __toString(): string
        {
            return "Restaurante: {$this->nombre}, Cocina: {$this->tipoCocina}, Promedio valoraciones: " . $this->mediaVotos();
        }

        public function añadeVoto(int $n)
        {
            $this->ratings[] = $n;
        }

        public function totalVotos(): int
        {
            return count($this->ratings);
        }

        public function mediaVotos(): float
        {
            if (count($this->ratings) === 0) {
                return 0;
            }
            return array_sum($this->ratings) / count($this->ratings);
        }

        public function añadeVotos(array $votos): void
        {
            foreach ($votos as $rating) {
                $this->ratings[] = $rating;
            }
        }
    }

    $r1 = new Restaurante("La Roma", "Italiana");

    // Añadimos votos individuales
    $r1->añadeVoto(5);
    $r1->añadeVoto(4);

    // Añadimos varios votos de golpe
    $r1->añadeVotos([3, 5, 2]);

    echo "<h2>Prueba de Restaurante</h2>";
    echo "<p>" . $r1 . "</p>"; // usa __toString()

    echo "<p>Total de votos: " . $r1->totalVotos() . "</p>";
    echo "<p>Media de votos: " . $r1->mediaVotos() . "</p>";

    echo "<pre>";
    var_dump($r1);
    echo "</pre>";
    ?>
</body>

</html>