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
    enum Orientacion: string
    {
        case Horizontal = "horizontal";
        case Vertical = "vertical";
    }

    class BanderaFranjas
    {

        public function __construct(
            private Orientacion $orientacion,
            private array $colores,
            private string $pais = "Sin adscripcion"
        ) {}

        public function __destruct() {}

        public function mostrarBandera(): array
        {
            return $this->colores;
        }

        public function mostrarOrientacion(): string
        {
            return $this->orientacion->value;
        }

        public function compararBanderas(BanderaFranjas $a): bool
        {
            return $this->orientacion === $a->orientacion &&
                $this->colores === $a->colores &&
                $this->pais === $a->pais;
        }

        public function franjasDifDireccion(BanderaFranjas $b): string
        {
            if ($this->colores === $b->colores) {
                if ($this->orientacion != $b->orientacion) {
                    $mensaje = "Mismas franjas diferente orientacion";
                } else {
                    $mensaje = "Mismas franjas y orientacion";
                }
            } else {
                $mensaje = "Diferentes franjas";
            }
            return $mensaje;
        }

        public function invertirOrden(): array
        {
            $invert = array_reverse($this->colores);
            return $invert;
        }

        public function invertirOrientacion(): string
        {
            if ($this->orientacion === Orientacion::Horizontal) {

                $this->orientacion = Orientacion::Vertical;
            } else {

                $this->orientacion = Orientacion::Horizontal;
            }
            return $this->orientacion->value;
        }
    }

    // Incluye aquí tu definición de enum y clase BanderaFranjas

    // Crear dos banderas con mismas franjas pero distinta orientación
    $bandera1 = new BanderaFranjas(Orientacion::Horizontal, ["rojo", "amarillo", "verde"], "España");
    $bandera2 = new BanderaFranjas(Orientacion::Vertical, ["rojo", "amarillo", "rojo"], "España");
    $bandera3 = new BanderaFranjas(Orientacion::Horizontal, ["verde", "blanco", "rojo"], "Italia");

    // Mostrar franjas
    echo "<h2>Prueba de BanderaFranjas</h2>";
    echo "<p>Bandera 1: " . implode(", ", $bandera1->mostrarBandera()) . "</p>";
    echo "<p>Bandera 2: " . implode(", ", $bandera2->mostrarBandera()) . "</p>";
    echo "<p>Bandera 3: " . implode(", ", $bandera3->mostrarBandera()) . "</p>";

    // Comparar banderas
    echo "<h3>Comparaciones</h3>";
    echo "<p>¿Bandera1 idéntica a Bandera2? " . ($bandera1->compararBanderas($bandera2) ? "Sí" : "No") . "</p>";
    echo "<p>¿Bandera1 idéntica a Bandera3? " . ($bandera1->compararBanderas($bandera3) ? "Sí" : "No") . "</p>";

    // Franjas con diferente orientación
    echo "<h3>Franjas y orientación</h3>";
    echo "<p>Bandera1 vs Bandera2: " . $bandera1->franjasDifDireccion($bandera2) . "</p>";
    echo "<p>Bandera1 vs Bandera3: " . $bandera1->franjasDifDireccion($bandera3) . "</p>";

    // Invertir orden de franjas
    echo "<h3>Invertir franjas</h3>";
    echo "<p>Bandera1 invertida: " . implode(", ", $bandera1->invertirOrden()) . "</p>";

    // Invertir orientación
    echo "<h3>Invertir orientación</h3>";
    echo "<p>Orientación inicial Bandera1: " . $bandera1->mostrarOrientacion() . "</p>";
    echo "<p>Orientación Bandera1 después de invertir: " . $bandera1->invertirOrientacion() . "</p>";
    ?>
</body>

</html>