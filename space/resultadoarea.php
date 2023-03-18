<?php
include "header.php";


$op = $_POST["Conta"];
$base = $_POST["base"];
$altura = $_POST["altura"];
$raio = $_POST["raio"];





if($op == "quadrado")
{

    echo "A área de seu quadrado/retângulo é de: " .  $altura * $base. "m²";

}
elseif($op == "triangulo")
{
    $resultadotriangulo = ($base * $altura)/2;
    echo "A área de seu triângulo é de: " . $resultadotriangulo. "m²";
}
elseif($op == "circulo")
{
    $resultadocirculo = M_PI * ($raio * $raio);
    echo "A área de seu círculo é de: " . $resultadocirculo. "m²";
}


include "footer.php";
?>