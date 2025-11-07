<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12 Relacion 1 - Calculo de notas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <h1 class="">Ejercicio 12 Relacio 1 - Calculo de notas</h1>
    <div class="d-flex justify-content-center align-items-center vh-100 bg-white">


        <form action="./5calculo-notas.php" method="get" class="p-3 w-50 shadow rounded bg-secondary-subtle" id="form">
            <h3 class="text-danger text-center">Cálculo de notas</h3>
            <div class="mb-3">
                <label for="nota1" class="form-label">Introduce nota 1:<span class="text-danger"> *</span></label>
                <input type="text" placeholder="un número entero entre 1 y 10" class="form-control" name="nota1" id="nota1" onchange="limpiarError('nota1')" required>
                <div id="nota1Help" class="form-text text-danger" style="visibility: hidden;">La nota debe ser entera entre 1 y 10</div>
            </div>
            <div class="mb-3">
                <label for="nota2" class="form-label">Introduce nota 2:<span class="text-danger"> *</span></label>
                <input type="text" placeholder="un número entero entre 1 y 10" class="form-control" name="nota2" id="nota2" onchange="limpiarError('nota2')" required>
                <div id="nota2Help" class="form-text text-danger" style="visibility: hidden;">La nota debe ser entera entre 1 y 10</div>
            </div>
            <div class="mb-3">
                <label for="faltas" class="form-label">Introduce faltas:<span class="text-danger"> *</span></label>
                <input type="text" placeholder="un número entero de 0 en adelante" class="form-control" name="faltas" id="faltas" onchange="limpiarError('faltas')" required>
                <div id="faltasHelp" class="form-text text-danger" style="visibility: hidden;">La faltas deben ser enteras entre 0 y 10</div>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Introduce nombre:<span class="text-danger"> *</span></label>
                <input type="text" required class="form-control" name="nombre" id="nombre" onchange="limpiarError('nombre')" required>
                <div id="nombreHelp" class="form-text text-danger" style="visibility: hidden;">El nombre es obligatorio</div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Introduce email:</label>
                <input type="text" placeholder="introduce un correo correcto" class="form-control" name="email" id="email" onchange="limpiarError('email')">
                <div id="emailHelp" class="form-text text-danger" style="visibility: hidden;">El email no tiene formato correcto</div>
            </div>

            <div class="mb-3">
                <p class="form-check">Seleccione el tipo de documento<span class="text-danger"> *</span></p><br>
                <input type="radio" class="form-radio" id="dni" name="documento" value="dni">
                <label for="dni" class="form-label">DNI</label>
                <input type="radio" class="form-radio" id="nif" name="documento" value="nif">
                <label for="nif" class="form-label">NIF</label>
            </div>
            <div class="mb-3">
                <label for="numDocumento" class="form-label">Ingrese el documento:<span class="text-danger"> *</span></label>
                <input type="text" class="form-control" id="numDocumento" name="numDocumento" required>
            </div>
            <input type="submit" class="btn btn-outline-primary" value="Enviar">
        </form>



    </div>

    <script src="./validaciones.js"></script>
</body>

</html>