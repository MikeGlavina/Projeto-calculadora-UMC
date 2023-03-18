<?php
include "header.php";


$number1 = $_POST["Numero1"];
$number2 = $_POST["Numero2"];
$conta = $_POST["conta"];






if($conta == "Soma")
{

    echo "O resultado da sua soma é de : " .  $number2 + $number1;

}
elseif($conta == "Subtracao")
{
    echo "O resultado da sua subtração é de : " . $number1 - $number2;
}
elseif($conta == "multiplicacao")
{
    echo "O resultado da sua multiplicação é de : " . $number1 * $number2;
}
elseif($conta == "divisao")
{
    echo "O resultado da sua divisão é de : " . $number1 / $number2;
}


include "footer.php";
?>