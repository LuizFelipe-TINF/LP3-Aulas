<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<?php

$instalacao = $_POST["txtInstalacao"];
$kwh = $_POST["txtKwh"];

$valor = 0;

if ($instalacao == "Residencial") {
    if ($kwh <= 500) {
        $valor = $kwh * 0.40;
    } else {
        $valor = $kwh * 0.65;
    }
}

elseif ($instalacao == "Comercial") {
    if ($kwh <= 1000) {
        $valor = $kwh * 0.55;
    } else {
        $valor = $kwh * 0.60;
    }
}

elseif ($instalacao == "Industrial") {
    if ($kwh <= 5000) {
        $valor = $kwh * 0.55;
    } else {
        $valor = $kwh * 0.60;
    }
}

?>

<div class="container vh-100 d-flex justify-content-center align-items-center">

    <div class="card shadow-lg border-primary" style="width: 450px;">

        <div class="card-header bg-primary text-white text-center">
            <h4>Conta de Energia</h4>
        </div>

        <div class="card-body text-center">

            <p class="fs-5">Instalação:</p>
            <h5><?php echo $instalacao; ?></h5>

            <p class="fs-5">Consumo:</p>
            <h5><?php echo $kwh; ?> kWh</h5>

            <p class="fs-5 mt-3">Total a pagar:</p>

            <h2 class="text-success">
                R$ <?php echo $valor ?>
            </h2>

            <a href="index.php" class="btn btn-primary mt-3">Voltar</a>

        </div>

    </div>

</div>