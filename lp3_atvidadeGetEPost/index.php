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


            <div class="col-md-6">
                <h1 class="text-center">Sistema de Pedidos com Adicionais</h1>
                <form action="pedidos.php" method="POST">

                    <div class="mb-3">

                        <label for="nomeCliente" class="form-label">Qual seu nome?</label>
                        <input type=text class="form-control" id="nomeCliente" name="nomeCliente" step="any">

                    </div>

                    <p>Selecione os adicionais</p>

                    <div class="btn-group mb-3" role="group" aria-label="Basic checkbox toggle button group">

                        <input type="checkbox" class="btn-check" id="bacon" autocomplete="off" name="adicionais[]" value="bacon">
                        <label class="btn btn-outline-primary" for="bacon">Bacon: R$ 3,00</label>

                        <input type="checkbox" class="btn-check" id="cheddar" autocomplete="off" name="adicionais[]" value="cheddar">
                        <label class="btn btn-outline-primary" for="cheddar">Cheddar Cremoso: R$ 2,50</label>

                        <input type="checkbox" class="btn-check" id="cebola" autocomplete="off" name="adicionais[]" value="cebola">
                        <label class="btn btn-outline-primary" for="cebola">Cebola Caramelizada: R$ 2,00</label>

                         <input type="checkbox" class="btn-check" id="hamburguer" autocomplete="off" name="adicionais[]" value="hamburguer">
                        <label class="btn btn-outline-primary" for="hamburguer">Hambúrguer Extra: R$ 5,00</label>

                    </div>

                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar campos</button>

                </form>

            </div>

            <div class="col-md-6">
                <h1 class="text-center">Gerador de Tabuada Dinâmica </h1>
                <form action="tabuada.php" method="GET">

                    <div class="mb-3">

                        <label for="numeroTabuad" class="form-label">Informe um número inteiro para ver a tabuada dele</label>
                        <input type="number" class="form-control" id="numeroTabuad" name="numeroTabuad" step="any">

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