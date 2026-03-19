<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<?php

$nota1 = $_POST["notaParcial1"];
$nota2 = $_POST["notaParcial2"];
$nota3 = $_POST["notaParcial3"];
$frequencia = $_POST["percentualFrequencia"];

$media = ($nota1 + $nota2 + $nota3) / 3;

$status = "";
$cor = "";

if ($media >= 7 && $frequencia >= 75) {
    $status = "Aprovado";
    $cor = "success";
}
else if ($media < 7 && $media >= 4 && $frequencia >= 75) {
    $status = "Recuperação";
    $cor = "warning";
}
else {
    $status = "Reprovado";
    $cor = "danger";
}

?>

<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="card shadow-lg border-<?php echo $cor; ?>" style="width: 450px;">

        <div class="card-header bg-<?php echo $cor; ?> text-white text-center">
            <h4>Resultado do Aluno</h4>
        </div>

        <div class="card-body text-center">

            <p class="fs-5">Média final:</p>
            <h2><?php echo number_format($media,2); ?></h2>

            <p class="fs-5">Frequência:</p>
            <h2><?php echo $frequencia; ?>%</h2>

            <p class="fs-5 mt-3">
                Situação: <strong><?php echo $status; ?></strong>
            </p>

            <a href="index.php" class="btn btn-<?php echo $cor; ?> mt-3">Voltar</a>

        </div>

    </div>
</div>