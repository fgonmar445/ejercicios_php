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
    abstract class Cuenta
    {
        private static int $nTotal_Cuentas = 0;
        protected int $totalOperaciones = 0;

        public function __construct(
            protected string $nombre,
            protected string $nCuenta,
            protected float $saldo = 0.0
        ) {
            self::$nTotal_Cuentas++;
        }

        abstract public function depositar(float $n): void;
        abstract public function retirar(float $n): void;
        abstract public function transferencia(Cuenta $c, float $n): void;
        abstract public function getSaldo(): float;

        public function getTotalOperaciones(): int
        {
            return $this->totalOperaciones;
        }

        public static function getTotalCuentas(): int
        {
            return Cuenta::$nTotal_Cuentas;
        }
    }

    class CuentaDebito extends Cuenta
    {

        public function __construct(
            protected string $nombre,
            protected string $nCuenta,
            protected float $saldo = 0.0
        ) {
            parent::__construct($nombre, $nCuenta, $saldo);
        }

        public function depositar(float $n): void
        {
            $this->saldo += $n;
            $this->totalOperaciones++;
        }
        public function retirar(float $n): void
        {

            if ($this->saldo >= $n) {
                $this->saldo -= $n;
                $this->totalOperaciones++;
            } else {
                throw new Exception("Saldo insuficiente para retirar.");
            }
        }
        public function transferencia(Cuenta $c, float $n): void
        {

            if ($this->saldo >= $n) {
                $c->depositar($n);
                $this->saldo -= $n;
                $this->totalOperaciones++;
            }
        }
        public function getSaldo(): float
        {
            $this->totalOperaciones++;
            return $this->saldo;
        }
    }

    class CuentaCredito extends Cuenta
    {
        private const SALDO_MAX_NEG = -100.0;

        public function __construct(
            protected string $nombre,
            protected string $nCuenta,
            protected float $saldo = 0.0
        ) {
            parent::__construct($nombre, $nCuenta, $saldo);
        }

        public function depositar(float $n): void
        {
            $this->saldo += $n;
            $this->totalOperaciones++;
        }
        public function retirar(float $n): void
        {

            if ($this->saldo - $n >= self::SALDO_MAX_NEG) {
                $this->saldo -= $n;
                $this->totalOperaciones++;
            } else {
                throw new Exception("Saldo insuficiente para retirar.");
            }
        }
        public function transferencia(Cuenta $c, float $n): void
        {

            if ($this->saldo >= $n) {
                $c->depositar($n);
                $this->saldo -= $n;
                $this->totalOperaciones++;
            }
        }
        public function getSaldo(): float
        {
            $this->totalOperaciones++;
            return $this->saldo;
        }
    }
    ?>

    <?php
    // Crear una cuenta de débito
    $debito = new CuentaDebito("Juan", "12345", 500);
    $debito->depositar(200);       // saldo = 700
    $debito->retirar(100);         // saldo = 600
    echo "<p>Saldo Cuenta Débito: {$debito->getSaldo()}</p>";
    echo "<p>Operaciones realizadas: {$debito->getTotalOperaciones()}</p>";

    // Crear una cuenta de crédito
    $credito = new CuentaCredito("Ana", "67890", 50);
    $credito->depositar(100);      // saldo = 150
    try {
        $credito->retirar(250);    // saldo = -150 → lanza excepción
    } catch (Exception $e) {
        echo "<p>Error en retiro crédito: {$e->getMessage()}</p>";
    }
    echo "<p>Saldo Cuenta Crédito: {$credito->getSaldo()}</p>";

    // Transferencia de débito a crédito
    $debito->transferencia($credito, 200);
    echo "<p>Saldo Débito tras transferencia: {$debito->getSaldo()}</p>";
    echo "<p>Saldo Crédito tras transferencia: {$credito->getSaldo()}</p>";

    // Total de cuentas creadas
    echo "<p>Total de cuentas creadas: " . Cuenta::getTotalCuentas() . "</p>";
    ?>
</body>

</html>