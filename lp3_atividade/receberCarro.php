<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


<?php 

$Km = $_POST["txtKm"];
$Dias = $_POST["txtDias"];
$Carro = $_POST["txtCarro"];
$Total;

if($Carro == "Luxo"){
    $Carro = 150;
    $Total = $Carro * $Dias;

  if($Km > 200){
    $Km = $Km * 0.25;
    $Total = $Carro + $Km;
     echo "<div class='container mt-3'><div class='alert alert-primary'>O total é R$ " . $Total . "</div></div>";
  }
  else{
    $Km = $Km * 0.30;
    $Total = $Carro + $Km;
    echo "O total é R$ $Total";
  }

} else{
    $Carro = 90;
    $Total = $Carro * $Dias;

    if($Km < 100){
    $Km = $Km * 0.20;
    $Total = $Carro + $Km;
    echo"O total é R$ $Total";
  }
  else{
    $Km = $Km * 0.10;
    $Total = $Carro + $Km;
    echo "O total é R$ $Total";
  }

}






?>