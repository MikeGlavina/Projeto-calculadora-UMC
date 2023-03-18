<?php
include "header.php";
$p = false;
?>


<h1>Cálculo da média</h1>

<h5>Insira dois números para ter a média entre eles</h5>

<form action="teste.php" method = "post">
    <label for="number1">Número 1</label>
    <input type="number" name="arrayn[]" id="arrayn[]">
    <label for="number2">Número 2</label>
    <input type="number" name="arrayn[]" id="arrayn[]">
    
    <label for=""></label>

    <br><br>

    <input type="submit" value="Calcular">
    
    <br><br>

    <?php

    $p = true

    ?>

</form>


<?php


if($p ) 
{
       
$numero = $_POST['arrayn'];


echo "A média é: ". $resultado = ($numero[0] + $numero[1]) / 2;

} 
else 
{

}



?>

<?php
include "footer.php"
?>