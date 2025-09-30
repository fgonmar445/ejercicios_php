<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 Relacion 2 - Formulario calculadora</title>
</head>

<body>
    <h1>Ejercicio 1 Relacion 2 - Formulario calculadora con dos numeros y operador</h1>
    form > (label + input)*2 + input
    <form action="calculadora.php" method="get">
        <div class="form">
            <label for="num1">Introduce numero 1:</label>
            <input type="text" name="num1" id="num1" required>
        </div>
        <div class="form">
            <labvel for="num2">Introduce numero 2:</label>
                <input type="text" name="num2" id="num2" required>
            </div>
            <div class="form">
                <label for="operador">Selecciona operador:</label>
                <select name="operador" id="operador" required>
                    <option value="+">Suma</option>
                    <option value="-">Resta</option>
                    <option value="*">Multiplicacion</option>
                    <option value="/">Division</option>
                </select>
            <input type="submit" value="Enviar">
</body>

</html>