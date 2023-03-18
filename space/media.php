<?php
include "header.php"
?>


<h1>Cálculo da média</h1>

<h5>Insira dois números para ter a média entre eles</h5>

<form action="resultadomedia.php" method = "post">
    <label for="number1">Número 1</label>
    <input type="number" name="arrayn[]" id="arrayn[]">
    <label for="number2">Número 2</label>
    <input type="number" name="arrayn[]" id="arrayn[]">
    
    <label for=""></label>

    <br><br>

    <input type="submit" value="Calcular">


</form>


<?php
include "footer.php"
?>