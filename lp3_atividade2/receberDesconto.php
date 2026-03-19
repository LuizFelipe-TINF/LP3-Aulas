<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<?php 

$conta = $_POST["valorTotal"];
$programa = $_POST["txtPrograma"];
$Total = $conta;
$TotalDesc;
$Desc;
$freteGratis = false;

if ( $programa == "Cliente Comum" && $conta > 500) {
    $Desc = $conta * 0.05;
    $TotalDesc = $conta - $Desc;
    if($conta > 1000) {
        $freteGratis = true;
    }
}

if ( $programa == "Cliente VIP") {
    $Desc = $conta * 0.1;
    $TotalDesc = $conta - $Desc;
    if($conta > 1000) {
        $freteGratis = true;
    }
}

if ( $programa == "Cliente Premium" && $conta > 1000) {
    $Desc = $conta * 0.15;
    $TotalDesc = $conta - $Desc;
    $freteGratis = true;
}

?>

<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="card shadow-lg border-primary" style="width: 450px;">

        <div class="card-header bg-primary text-white text-center">
            <h4>Valor da conta</h4>
        </div>

        <div class="card-body text-center">

            <p class="fs-5">Valor original da compra:</p>
            <h1 class="display-6">R$ <?php echo $Total; ?></h1>

            <hr>

            <p class="fs-5">Desconto aplicado:</p>
            <h1 class="display-6 text-success">R$ <?php echo $Desc; ?></h1>

            <hr>

            <p class="fs-5">Valor final a pagar:</p>
            <h1 class="display-5 text-primary">R$ <?php echo $TotalDesc; ?></h1>

            <hr>

            <?php if ($freteGratis) { ?>
                <span class="badge bg-success fs-6">Frete Grátis</span>
            <?php } ?>

            <br><br>

            <a href="index.php" class="btn btn-primary mt-2">Voltar</a>

        </div>

    </div>
</div>