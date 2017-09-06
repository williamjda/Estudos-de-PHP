<?php

$value1 = 10;
$value2 = 10;
$operador = "-";

if($operador == "+"){
    echo "Soma = ".($value1 + $value2);
}elseif ($operador == "-"){
    echo "Subtração = ".($value1 - $value2);
}elseif ($operador == "/"){
    echo "Divisão = ".($value1 / $value2);
}elseif ($operador == "*"){
    echo "Multiplicação = ".($value1 * $value2);
}else{
    echo "Operador não existe!";
}

?>