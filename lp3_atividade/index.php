<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container">

        <div class="row">


            <div class="col-md-4">
                <h1 class="text-center">Formulário IMC</h1>
                <form action="receberIMC.php" method="POST">

                    <div class="mb-3">

                        <label for="campoPeso" class="form-label">Qual o seu peso ?</label>
                        <input type="number" class="form-control" id="campoPeso" name="campoPeso" step="any">

                    </div>

                    <div class="mb-3">

                        <label for="campoAltura" class="form-label">Qual sua altura ?</label>
                        <input type="number" class="form-control" id="campoAltura" name="campoAltura" step="any">

                    </div>

                    
                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar campos</button>

                </form>

            </div>

            <div class="col-md-4">
                <h1 class="text-center">Formulário Carro</h1>
                <form action="receberCarro.php" method="POST">

                    <div class="mb-3">

                        <select class="form-select" aria-label="Default select example" name="txtCarro">
                            <option selected>Abrir seleção</option>
                            <option value="Popular">Popular</option>
                            <option value="Luxo">Luxo</option>
                        </select>

                    </div>

                    <div class="mb-3">

                        <label for="campoDias" class="form-label">Por quantos dias irá alugar ?</label>
                        <input type="number" class="form-control" id="campoDias" name="txtDias">

                    </div>

                    <div class="mb-3">

                        <label for="campoKm" class="form-label">Quantidade de km percorridos</label>
                        <input type="number" class="form-control" id="campoKm" name="txtKm">

                    </div>


                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar campos</button>

                </form>

            </div>


            <div class="col-md-4">
                <h1 class="text-center">Formulário atividade física</h1>
                <form action="receberCalculadora.php" method="POST">

                    <div class="mb-3">

                        <label for="campoHoras" class="form-label">Quantas horas de atividade física realiza por
                            dia?</label>
                        <input type="number" class="form-control" id="campoHoras" name="txtHoras">

                    </div>


                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar campos</button>

                </form>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>