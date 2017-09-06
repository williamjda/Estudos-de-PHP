<?php

$value1 = 5;
$value2 = 5;
$operador = "=";

if ($operador == "+"){
    echo "soma = ".($value1 + $value2);
}elseif($operador == "-"){
    echo "Subtração = ".($value1 - $value2);
}elseif ($operador == "/"){
    echo "Divisão = ".($value1 / $value2);
}elseif ($operador == "*"){
    echo "Multiplicação = ".($value1 * $value2);
}else{
    echo "Operador não exite!";
}


?>