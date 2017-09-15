<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aprendendo php</title>
</head>
<body>
<?php

function nameFunction($p){

}

function calculadora($num1, $num2, $op){
    if($op == "+"){
        return $num1 + $num2;
    }
    elseif($op == "-"){
        return $num1 - $num2;
    }
    elseif ($op == "/"){
        return $num1 / $num2;
    }
    elseif ($op == "*"){
        return $num1 * $num2;
    }else{
        return "Operador não existe!";
    }
}

$var = calculadora (4,6,"¬");
echo $var;
?>
