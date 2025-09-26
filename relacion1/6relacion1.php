<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 - Clase fruta</title>
    <link rel="shortcut icon" href="./logoPlayamar.png" type="image/x-icon" >
</head>
<body>
    <h1>Ejercicio 6 Relacion 1 - Programa clase Fruta</h1>
    <?php
    class fruta{
        public string $nombre;
        public string $color;

        public function __construct(string $nombre, string $color) {
            $this -> nombre= $nombre;
            $this -> color = $color;
        }

        public function get_nombre(): string
        {
            return $this->nombre;
        }

        public function set_nombre(string $nombre): void {
            $this->nombre = $nombre;
        }

        public function get_color(): string {
            return $this->color;
        }

        public function set_color(string $color):  void {
            $this->color = $color;
        }
    }
    ?>
</body>
</html>