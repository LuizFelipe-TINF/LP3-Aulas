<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<?php

$custoFixo = 20;
$nome = $_POST['nomeCliente'];
$adicionais = $_POST['adicionais'] ?? [];

$valorLanche = $custoFixo;


    foreach ($adicionais as $item) {

        if ($item == "bacon") $valorLanche += 3;
        if ($item == "cheddar") $valorLanche += 2.5;
        if ($item == "cebola") $valorLanche += 2;
        if ($item == "hamburguer") $valorLanche += 5;
    }


?>





<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="card shadow-lg border-primary" style="width: 450px;">

        <div class="card-header bg-primary text-white text-center">
            <h4>Valor da conta</h4>
        </div>

        <div class="card-body text-center">

            <p class="fs-5">Nome do cliente:</p>
            
            <h1 class="display-6"><?php echo $nome; ?></h1>

            <hr>

            <p class="fs-5">Valor total a ser pago:</p>
            <h1 class="display-6 text-success">R$ <?php echo $valorLanche; ?></h1>

            <hr>

            <p class="fs-5">Lista de adicionais:</p>

            <?php 
                foreach ($adicionais as $item) {
                    echo "<div class='text-primary'>$item</div>";
                }
           
            ?>

            <hr>

        </div>

    </div>
</div>