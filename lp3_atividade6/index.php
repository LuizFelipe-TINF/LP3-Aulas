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
                <h1 class="text-center">Cadastro para Maratona de Programação</h1>
                <form action="maratona.php" method="POST">

                    <div class="mb-3">

                        <label for="nomeCliente" class="form-label">Qual seu nome completo?</label>
                        <input type=text class="form-control" id="nomeCliente" name="nomeCliente" step="any">

                    </div>

                    <div class="mb-3">
                        <label for="campoEmail" class="form-label">Qual seu email?</label>
                        <input type="email" class="form-control" id="campoEmail" placeholder="name@example.com"
                            name="txtEmail">
                    </div>

                    <div class="mb-3">

                        <select class="form-select" aria-label="Default select example" name="txtPerfil">
                            <option selected>Abrir seleção de categoria</option>
                            <option value="Iniciante">Iniciante</option>
                            <option value="Intermediario">Intermediário</option>
                            <option value="Avancado">Avançado</option>
                        </select>

                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Linguagem Principal</label>
                     <div class="form-check">
                            <input class="form-check-input" type="radio" name="txtLinguagem" value="Python" required>
                            <label class="form-check-label">Python</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="txtLinguagem" value="Java">
                            <label class="form-check-label">Java</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="txtLinguagem" value="PHP">
                            <label class="form-check-label">PHP</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="txtLinguagem" value="C">
                            <label class="form-check-label">C++</label>
                        </div>

                    </div>

                    <p>Selecione as áreas de interesse</p>

                    <div class="btn-group mb-3" role="group" aria-label="Basic checkbox toggle button group">

                        <input type="checkbox" class="btn-check" id="Desenvolvimento Web" autocomplete="off" name="areas[]" value="Desenvolvimento Web">
                        <label class="btn btn-outline-primary" for="Desenvolvimento Web">Desenvolvimento Web </label>

                        <input type="checkbox" class="btn-check" id="Inteligência Artificial" autocomplete="off" name="areas[]" value="Inteligência Artificial">
                        <label class="btn btn-outline-primary" for="Inteligência Artificial">Inteligência Artificial </label>

                        <input type="checkbox" class="btn-check" id="Banco de Dados" autocomplete="off" name="areas[]" value="Banco de Dados">
                        <label class="btn btn-outline-primary" for="Banco de Dados">Banco de Dados </label>

                         <input type="checkbox" class="btn-check" id="Segurança da Informação" autocomplete="off" name="areas[]" value="Segurança da Informação">
                        <label class="btn btn-outline-primary" for="Segurança da Informação">Segurança da Informação</label>

                    </div>

                    <button type="submit" class="btn btn-success">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar campos</button>

                </form>

            </div>

            <div class="col-md-6">
                <h1 class="text-center">Sistema de Consulta de Linguagens de Programação</h1>
                <form action="consulta.php" method="GET">

                    <div class="mb-3">

                        <label for="linguagem" class="form-label">Digite uma linguagem:</label>
                        <input type="text" class="form-control" id="linguagem" name="linguagem" step="any">

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