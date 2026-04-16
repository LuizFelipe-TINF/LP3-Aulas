<?php ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maratona</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>

<?php

$nome = $_POST['nomeCliente'];
$email = $_POST['txtEmail'];
$perfil = $_POST['txtPerfil'];
$linguagem = $_POST['txtLinguagem'];

$areas = $_POST['areas'] ?? [];
$escolha = "";



foreach ($areas as $item) {

    if ($item == "Desenvolvimento Web")
        $escolha == "Desenvolvimento Web";
    if ($item == "Inteligência Artificial")
        $escolha == "Inteligência Artificial";
    if ($item == "Banco de Dados")
        $escolha == "Banco de Dados";
    if ($item == "Segurança da Informação")
        $escolha == "Segurança da Informação";
}



?>

<body>
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-lg border-primary" style="width: 450px;">

            <div class="card-header bg-primary text-white text-center">
                <h4>Valor da conta</h4>
            </div>

            <div class="card-body text-center">

                <p class="fs-5">BEM VINDO</p>

                <h1 class="display-6"><?php echo $nome; ?></h1>

                <hr>

                <p class="fs-5">Email:</p>

                <h1 class="display-6"><?php echo $email; ?></h1>

                <hr>

                <p class="fs-5">Seu perfil é:</p>
                <h1 class="display-6"><?php echo $perfil; ?></h1>

                <hr>

                <p class="fs-5">O tamanho da camiseta é:</p>
                <h1 class="display-6"><?php echo $linguagem; ?></h1>

                <hr>

                <p class="fs-5">Lista de workshops escolhidas:</p>

                <?php
                foreach ($areas as $item) {
                    echo "<div class='text-primary'>$item</div>";
                }

                ?>

                <hr>

            </div>

        </div>
    </div>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>