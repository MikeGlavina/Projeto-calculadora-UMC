<?php
include "header.php"
?>

<h1>Cálculo da área</h1>

<form action="resultadoarea.php" method="post" >

    <label for="opcao">Selecione a opção desejada</label>
    <select name="Conta" id="">
        <option value="quadrado">Quadrado/Retângulo</option>
        <option value="circulo">Círculo</option>
        <option value="triangulo">Triângulo</option>
    </select>
    <label for=""></label>

    
    <p>Se for Quadrado/Retângulo ou triângulo</p>
    <label for="altura">Altura: </label>
    <input type="number" name="altura" id="">
    
    <label for="base">Base: </label>
    <input type="number" name="base" id="">
    
    <p>Se for Círculo</p>
    <label for="raio">Raio: </label>
    <input type="number" name="raio" id=""><br><br>
    
    <input type="submit" value="Calcular">
    

    




</form>
            




         







        




<?php
include "footer.php"
?>
