<?php
include "header.php"
?>

<h1>Tabuada</h1>

<form action="resultadotabuada.php" method="post" >

        <label for="opcao">Insira qualquer número para ter sua tabuada do 1 ao 10<br></label>
            <input type="number" name="Numero" id="Numero">
        <label for=""></label><br><br>

        <input type="submit" value="Calcular">
</form>

<?php
include "footer.php"
?>