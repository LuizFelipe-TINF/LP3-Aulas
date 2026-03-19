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
                <h1 class="text-center">Sistema de aprovação escolar</h1>
                <form action="receberSistemaAprovação.php" method="POST">

                    <div class="mb-3">

                        <label for="notaParcial1" class="form-label">Qual sua nota parcial?</label>
                        <input type="number" class="form-control" id="notaParcial1" name="notaParcial1" step="any" max="10">

                    </div>

                    <div class="mb-3">

                        <label for="notaParcial2" class="form-label">Qual sua nota parcial?</label>
                        <input type="number" class="form-control" id="notaParcial2" name="notaParcial2" step="any" max="10">

                    </div>

                    <div class="mb-3">

                        <label for="notaParcial3" class="form-label">Qual sua nota parcial?</label>
                        <input type="number" class="form-control" id="notaParcial3" name="notaParcial3" step="any" max="10">

                    </div>

                    <div class="mb-3">

                        <label for="percentualFrequencia" class="form-label">Qual sua percentual de frequência?</label>
                        <input type="number" class="form-control" id="percentualFrequencia" name="percentualFrequencia" step="any">

                    </div>

                    
                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar campos</button>

                </form>

            </div>

            <div class="col-md-4">
                <h1 class="text-center">Calculadora de Tarifas de Energia Elétrica</h1>
                <form action="receberCalculadora.php" method="POST">

                    <div class="mb-3">

                        <select class="form-select" aria-label="Default select example" name="txtInstalacao">
                            <option selected>Qual sua instalação?</option>
                            <option value="Residencial">Residencial</option>
                            <option value="Comercial">Comercial</option>
                            <option value="Industrial">Industrial</option>
                        </select>

                    </div>


                    <div class="mb-3">

                        <label for="campoKwh" class="form-label">quantidade de kWh consumidos no mês </label>
                        <input type="number" class="form-control" id="campoKwh" name="txtKwh">

                    </div>


                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar campos</button>

                </form>

            </div>


            <div class="col-md-4">
                <h1 class="text-center">Sistema de Descontos para E-commerce</h1>
                <form action="dadosComGet.php" method="GET">

                    <div class="mb-3">

                        <label for="valorTotal" class="form-label">valor total da compra</label>
                        <input type="number" class="form-control" id="valorTotal" name="valorTotal">

                    </div>

                      <div class="mb-3">

                        <select class="form-select" aria-label="Default select example" name="txtPrograma">
                            <option selected>Qual seu programa de fidelidade?</option>
                            <option value="Cliente Comum">Cliente Comum</option>
                            <option value="Cliente VIP">Cliente VIP</option>
                            <option value="Cliente Premium">Cliente Premium</option>
                        </select>

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