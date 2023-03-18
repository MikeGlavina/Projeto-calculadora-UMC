<?php
include "header.php";
?>

<h1>Cálculo da média</h1>

<h3>Insira dois números para ter a média entre eles</h3>

<form action="resultadomedia.php" method = "post">
    
    <label for="number1">Número 1</label>
    <input type="number" name="arrayn[]" id="arrayn[]">

    <br><br>

    <label for="number2">Número 2</label>
    <input type="number" name="arrayn[]" id="arrayn[]">
    
    <label for=""></label>

    <br><br>

    <input type="submit" value="Calcular">

    <br><br>


</form>


<?php
$numero = $_POST['arrayn'];

echo "<font size='5'>";
echo "A média é: ". $resultado = ($numero[0] + $numero[1]) / 2;
echo "</font>";


include "footer.php";
?>