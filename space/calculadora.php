<?php
include "header.php"
?>

<h1>Calculadora</h1>

<form action="resultadocalculadora.php" method= "post">

    <label for="Numero1">Número 1</label>
    <input type="number" name="Numero1" id="Numero1"> <br><br>
    <label for="Numero2">Número 2</label>
    <input type="number" name= "Numero2" id= "Numero2"> <br><br>
    <label for=""></label>
    
    
    <label for="conta">Selecione a opção desejada</label>
    <select name="conta" id="">
        <option value="Soma">Somar</option>
        <option value="Subtracao">Subtrair</option>
        <option value="multiplicacao">Multiplicar</option>
        <option value="divisao">Divivdir</option>
    </select>   <br><br>

    <input type="submit" value="Calcular">




</form>





<?php
include "footer.php"
?>