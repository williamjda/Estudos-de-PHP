<?php
$name = "William";
$last_name = "Aquino";
//echo $name." " .$last_name;

$x= 10;
$y = 8;
$x++;
$y+=3;

$x= 10;
$y = 8;
$x--;
$y -=3;

$x= 10;
$y = 8;

$x= 10;
$y = 8;

$x= 2;
$y= 2;

//echo $x ** $y;
//echo $x * $y;
//echo 4%1;

// Calculo 1 com Pré-incremento
$a = 3;
$b = 5;

$resultado = ++$a * $b;

echo "A soma entre os valores é $resultado <br />";
echo "A = ".$a."<br />";
echo "B = ".$b."<br /><br />";

// Calculo 2 com Pós-inscremento
$a = 3;
$b = 5;

$resultado = $a++ * $b;

echo "A soma entre os valores é $resultado <br />";
echo "A = ".$a."<br />";
echo "B = ".$b."<br />";

?>