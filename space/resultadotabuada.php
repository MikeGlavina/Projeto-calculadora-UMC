<?php
 include "header.php"

    ?>

<h1>Resultado</h1>

<?php

$numero = $_POST["Numero"];


    for($i = 0; $i <=10; $i++){
        echo $numero. " * " .$i. " = ". $calculo = $numero * $i. "<br>";
    }


?>
   <?php
 include "footer.php"

    ?>
