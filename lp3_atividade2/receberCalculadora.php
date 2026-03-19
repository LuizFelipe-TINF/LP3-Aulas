<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<?php 

$Kwh = $_POST["txtKwh"];
$Instalacao = $_POST["txtInstalacao"];
$Total;

if ( $Instalacao == "Residencial" && $Kwh <= 500) {
    $Total = $Kwh * 0.40;
} else if ( $Instalacao == "Residencial" && $Kwh > 500) {
    $Total = $Kwh *.65;
}

elseif ( $Instalacao == "Comercial" && $Kwh <= 1000) {
    $Total = $Kwh * 0.55;
} elseif ( $Instalacao == "Comercial" && $Kwh > 1000) {
    $Total = $Kwh *.60;
}

elseif ( $Instalacao == "Industrial" && $Kwh <= 5000) {
    $Total = $Kwh * 0.55;
} elseif ( $Instalacao == "Industrial" && $Kwh > 5000) {
    $Total = $Kwh * 0.60;
}

?>

<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="card shadow-lg border-primary" style="width: 450px;">

        <div class="card-header bg-primary text-white text-center">
            <h4>Valor da conta</h4>
        </div>

        <div class="card-body text-center">

            <p class="fs-5">Valor total da conta a pagar:</p>

            <h1 class="display-5 mb-3">
                R$ <?php echo "$Total"; ?>
            </h1>

            <hr>

            <a href="index.php" class="btn btn-primary mt-2">Voltar</a>

        </div>

    </div>
</div>