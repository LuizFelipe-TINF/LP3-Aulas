<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row">
            <h1>Formulário</h1>
            <form action="recebeDados.php" method="POST">


                <div class="mb-3">
                    <label for="campoNome" class="form-label">Nome</label>
                    <input type="name" class="form-control" id="campoNome" name="txtNome">
                </div>

                <div class="mb-3">
                    <label for="campoEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="campoEmail" placeholder="name@example.com" name="txtEmail">
                </div>

                <div class="mb-3">
                    <label for="campoArea" class="form-label">Descrição</label>
                    <textarea class="form-control" id="campoArea" rows="3" name="txtDesc"></textarea>
                </div>

                <button type="submit" class="btn btn-success"> Enviar </button>

                <button type="reset" class="btn btn-warning"> Limpar campos</button>

            </form>
        </div>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>