<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Calculadora Profesional</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet" />
</head>

<body>
    <main class="container py-5 w-50">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card border-0 shadow">
                    <div class="card-header bg-dark text-white text-center">
                        <h4 class="mb-0">Calculadora </h4>
                    </div>
                    <div class="card-body">
                        <form method="get">
                            <div class="mb-3">
                                <label for="num1" class="form-label">Número 1</label>
                                <input type="number" name="num1" id="num1" class="form-control" step="0.01" required>
                            </div>

                            <div class="mb-3">
                                <label for="operacion" class="form-label">Operación</label>
                                <select name="operacion" id="operacion" class="form-select" required>
                                    <option value="">Selecciona una operación</option>
                                    <option value="+">Sumar</option>
                                    <option value="-">Restar</option>
                                    <option value="*">Multiplicar</option>
                                    <option value="/">Dividir</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="num2" class="form-label">Número 2</label>
                                <input type="number" name="num2" id="num2" class="form-control" step="0.01" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary fw-semibold">Calcular</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="./validaciones.js"></script>
</body>

</html>