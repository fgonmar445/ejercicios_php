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

    class CuentaBancaria
    {

        public function __construct(private string $numeroCuenta, private string $nombre, private float $saldo = 0, private int $numOperaciones = 0) {}

        public function __destruct()
        {
            echo "La cuenta con n: {$this->numeroCuenta} ha sido eliminada";
        }

        public function __toString(): string
        {
            return "N cuenta: {$this->numeroCuenta} <br>
            Nombre: {$this->nombre}<br>
            Saldo: {$this->saldo}<br>
            N operaciones: {$this->numOperaciones}";
        }

        public function depositarDinero(int $n)
        {
            $this->saldo += $n;
            $this->numOperaciones++;
        }

        public function extraerDinero(int $n)
        {
            if ($this->saldo >= $n) {
                $this->saldo -= $n;
                $this->numOperaciones++;
            }
        }

        public function transferirDinero(CuentaBancaria $c, int $n): string
        {
            if ($this->saldo >= $n) {
                $c->depositarDinero($n);
                $this->saldo -= $n;
                $this->numOperaciones++;
                $mensaje = "Transferencia realizada con exito";
            } else {
                $mensaje = "Transferencia no realizada, saldo insuficiente";
            }
            return $mensaje;
        }
    }


    ?>
</body>

</html>