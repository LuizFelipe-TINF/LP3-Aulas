<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<?php

$peso = $_POST["campoPeso"];
$altura = $_POST["campoAltura"];
$IMC = $peso / ($altura * $altura);


switch ($IMC) {

    case $IMC < 18.6;
        $alert = "Abaixo do peso";
        $cor = "danger";
        break;

    case $IMC < 26;
        $alert = "Peso ideal";
        $cor = "success";
        break;

        case $IMC < 31;
        $alert = "Sobrepeso";
        $cor = "warning";
        break;

        case $IMC < 41;
        $alert = "Obesidade";
        $cor = "danger";
        break;

        case $IMC > 40;
        $alert = "Obesidade mórbida";
        $cor = "danger";
        break;

}

echo "<div class='container mt-3'>
    <div class='alert alert-$cor' role='alert'>
        O seu IMC é de " . $IMC . " — <strong>$alert</strong>
    </div>
</div>";

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>