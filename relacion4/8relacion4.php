<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php

    class CuentaBancaria
    {

        public function __construct(private string $numeroCuenta, private string $nombre, private float $saldo = 0, private int $numOperaciones = 0) {}

        public function __destruct(): string
        {
            return "La cuenta con n: $this-> numeroCuenta ha sido eliminada";
        }

        public function __toString(): string
        {
            return "N cuenta: {$this->numeroCuenta} <br>
            Nombre: {$this->nombre}<br>
            Saldo: {$this->saldo}<br>
            N operaciones: {$this->numOperaciones}";
        }

        public function depositarDinero(int $n) {
            $this->saldo += $n;
        }

        public function extraerDinero(int $n) {
            $this->saldo -= $n;
        }

        public function transferirDinero(CuentaBancaria $c, int $n) {
            $c-> saldo += $n;
            $this->saldo -= $n;
        }
    }


    ?>
</body>

</html>