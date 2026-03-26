<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Sistemas</title>
</head>

<body>

    <div class="container">

        <div class="row">

            <div class="col-md-4">
                <h1 class="text-center">Sistema de aprovação escolar</h1>

                <form action="receberSistemaAprovacao.php" method="POST">

                    <div class="mb-3">
                        <label class="form-label">Nota 1</label>
                        <input type="number" class="form-control" name="notaParcial1" step="any">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nota 2</label>
                        <input type="number" class="form-control" name="notaParcial2" step="any">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nota 3</label>
                        <input type="number" class="form-control" name="notaParcial3" step="any">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Frequência (%)</label>
                        <input type="number" class="form-control" name="percentualFrequencia">
                    </div>

                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar</button>

                </form>
            </div>

            <div class="col-md-4">
                <h1 class="text-center">Calculadora de Energia</h1>

                <form action="usandoRadio.php" method="POST">

                    <div class="mb-3">
                        <label class="form-label">Tipo de instalação</label>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="txtInstalacao" value="Residencial" required>
                            <label class="form-check-label">Residencial</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="txtInstalacao" value="Comercial">
                            <label class="form-check-label">Comercial</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="txtInstalacao" value="Industrial">
                            <label class="form-check-label">Industrial</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Consumo (kWh)</label>
                        <input type="number" class="form-control" name="txtKwh" required>
                    </div>

                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar</button>

                </form>
            </div>

            <div class="col-md-4">
                <h1 class="text-center">Sistema de Descontos</h1>

                <form action="receberDesconto.php" method="POST">

                    <div class="mb-3">
                        <label class="form-label">Valor da compra</label>
                        <input type="number" class="form-control" name="valorTotal">
                    </div>

                    <div class="mb-3">
                        <select class="form-select" name="txtPrograma">
                            <option selected>Programa</option>
                            <option value="Cliente Comum">Comum</option>
                            <option value="Cliente VIP">VIP</option>
                            <option value="Cliente Premium">Premium</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar</button>

                </form>
            </div>

        </div>

    </div>

</body>
</html>