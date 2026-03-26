<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<?php
$numeroTabuada = $_GET['numeroTabuad'] ?? "";
?>

<div class="container vh-100 d-flex justify-content-center align-items-center">

    <?php if ($numeroTabuada == "" || $numeroTabuada < 1 || $numeroTabuada > 50) { ?>

        <div class="alert alert-danger shadow border-danger text-center" style="width: 450px;">
            <hr>
            <p>Informe um número entre 1 e 50</p>
            <hr>
        </div>

    <?php } else { ?>

        <div class="card shadow-lg border-primary" style="width: 450px;">
            
            <div class="card-header bg-primary text-white text-center">
                <h4>Resultado da Tabuada</h4>
            </div>

            <div class="card-body p-3 text-center">

                <p class="fs-5 mb-0">Tabuada do número:</p>
                <h1 class="display-6"><?php echo $numeroTabuada; ?></h1>

                <hr>

                <table class="table table-striped table-hover table-bordered text-center mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Equação</th>
                            <th>Resultado</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                        for ($i = 1; $i <= 10; $i++) { 
                        ?>
                            <tr>
                                <td class="fs-5 text-secondary">
                                    <?php echo "$numeroTabuada x $i"; ?>
                                </td>
                                <td class="fs-5 fw-bold text-secondary">
                                    = <?php echo $numeroTabuada * $i; ?>
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>

            </div>

        </div>

    <?php } ?>

</div>