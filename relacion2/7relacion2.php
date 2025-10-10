<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relacion 2 - Ejercicio 7</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
</head>

<body>
    Ejercicio 7 - Relacion 2
    <div class=" container d-flex justify-content-center align-items-center vh-100">
        <form action="" method="get" class="p-3 shadow rounded mx-auto w-50" >
            <div class="bg-primary text-center text-white py-2 rounded m-0 p-0">
                <h1>Form Calculadora</h1>
            </div>
            <div class="card-body">
                <label class="form-label fs-4 fw-bold pt-2" for="num1">Numero 1:</label>
                <input type="number" step="0.01" name="num1" class="form-control mb-3 w-50">

                <label class="form-label fs-4 fw-bold" for="operacion">Operacion:</label>
                <select name="operacion" class="form-select mb-3 w-50">
                    <option value="+">Sumar</option>
                    <option value="-">Restar</option>
                    <option value="*">Multiplicar</option>
                    <option value="/">Dividir</option>
                </select>

                <label class="form-label fs-4 fw-bold" for="num2">Numero 2:</label>
                <input type="number" step="0.01" name="num2" class="form-control mb-3 w-50">

                <div class="text-center">
                    <input class="btn bg-primary text-white fw-bold" type="submit" value="Calcular">
                </div>
            </div>
        </form>
    </div>

</body>

</html>