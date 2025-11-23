<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    declare(strict_types=1);
    interface encendible
    {
        public function encender(): string;
        public function apagar(): string;
    }

    enum tipoBombilla: string
    {
        case Incandescente = "Incandescente";
        case LED = "LED";
        case Halogena = "Halogena";
        case Fluorescente = "Fluorescente";
    }
    class Bombilla implements encendible
    {
        private tipoBombilla $tipo;
        private int $lumenes;
        private bool $encendida = false;

        public function __construct($tipo, $lumenes)
        {
            $this->tipo;
            $this->lumenes;
        }

        public function __destruct() {}

        public function encender(): string
        {
            $mensaje = "";
            if (!$this->encendida) {
                $this->encendida = true;
                $mensaje = "Bombilla encendida.";
            } else {
                $mensaje = "La bombilla ya está encendida.";
            }
            return $mensaje;
        }
        public function apagar(): string
        {
            $mensaje = "";
            if ($this->encendida) {
                $this->encendida = false;
                $mensaje = "Bombilla apagada.";
            } else {
                $mensaje = "La bombilla ya está apagada.";
            }
            return $mensaje;
        }
    }
    class Motocicleta implements encendible
    {
        private int $gasolina;
        private int $bateria;
        private string $matricula;
        private bool $estado;

        public function __construct($matricula)
        {
            $this->gasolina = 0;
            $this->bateria = 2;
            $this->estado = false;
        }

        public function cargarGasolina(int $n)
        {
            $this->gasolina += $n;
        }

        public function encender(): string
        {
            $mensaje = "";

            if (!$this->estado && $this->bateria > 0 && $this->gasolina > 0) {
                $this->estado = true;
                $mensaje = "Motocicleta arrancada";
            }
            return $mensaje = "Error, no se puede arrancar.";
        }

        public function apagar(): string
        {
            $mensaje = "";
            if ($this->estado) {
                $this->estado = false;
                $mensaje = "Moto apagada";
            } else {
                $mensaje = "Ya está apagada";
            }
            return $mensaje;
        }
    }

    function enciende_algo(Encendible $algo)
    {
        $algo->encender();
    }
    $miBombilla = new Bombilla(tipoBombilla::LED, 12);
    $miMoto = new Motocicleta("3873 NXB");
    enciende_algo($miBombilla);
    enciende_algo($miMoto);
    ?>
</body>

</html>