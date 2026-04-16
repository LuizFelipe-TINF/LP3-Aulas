<?php ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>

<?php

$linguagem = $_GET['linguagem'] ?? "";

?>

<div class="container vh-100 d-flex justify-content-center align-items-center">

    <?php if ($linguagem == "") { ?>

        <div class="alert alert-danger shadow border-danger text-center" style="width: 450px;">
            <hr>
            <p>Informe uma linguagem para realizar a busca</p>
            <hr>
        </div>

    <?php } else { ?>

        <div class="card shadow-lg border-primary" style="width: 450px;">

            <div class="card-header bg-primary text-white text-center">
                <h4>Linguagem digitada</h4>
            </div>

            <div class="card-body p-3 text-center">

                <p class="fs-5 mb-0">Você pesquisou por:</p>

                <h1 class="display-6">
                    <?php
                    if ($linguagem == "Python" || $linguagem == "JavaScript" || $linguagem == "PHP" || $linguagem == "Java") {
                        echo "$linguagem<br> Linguagem encontrada na base de dados!";
                    } else {
                        echo '<div class="alert alert-danger mt-3"> Linguagem não encontrada </div>';
                    }
                    ?>
                </h1>

                <hr>

            </div>

        </div>

    <?php } ?>

</div>

</html>