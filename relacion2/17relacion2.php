<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Ejercicio 17 - Relacion 2</title>
</head>

<body class="bg-primary">
    <div class="card rounded shadow bg-terciary mx-auto mt-5 w-25 border-0">
        <div class="card-header bg-danger text-center text-white w-100">
            <h3>Ejercicio 17 - Relacion 2</h3>
        </div>
        <div class="card-body">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="mb-3">
                    <label for="num1" class="form-label ">Introduce dividendo</label>
                    <input type="number" class="form-control" name="dividendo" id="dividendo">
                </div>
                <div class="mb-3">
                    <label for="num2" class="form-label">Introduce divisor</label>
                    <input type="number" class="form-control" name="divisor" id="divisor">
                </div>
                <div class="mb-3">
                    <fieldset class="mb-3">
                        <legend class="fs-6 mb-3">Elige tus hobbies:</legend>

                        <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" name="coeficiente" id="coeficiente">
                            <label for="coeficiente" class="form-check-label">Coeficiente</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="resto" id="resto">
                            <label for="resto" class="form-check-label">Resto</label>
                        </div>

                    </fieldset>
                </div>
                <div class="mb-3 d-flex justify-content-center">
                    <button class="btn btn-danger">Resultado</button>
                </div>
                <div class="mb3 border-danger">a</div>

            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>