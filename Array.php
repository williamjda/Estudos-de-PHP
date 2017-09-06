<?php
$x [0] = "red";
$x [1] = "blue";
//echo $x[1];
$y = array ("cat", "dog");

//echo $y [0];
$var1 = array(0=>"cat",1=>"dog",3=>"red",2=>"blue");
$var2 = array("color"=>"blue","value"=>43);

#print_r($var1);
#echo "<br/>";
#var_dump($var1);
//echo $var1[1];
for($i=0; $i <1; $i++){
    foreach ($var2 as $key => $value){
        echo $value."<br/>";
        echo $key." =>".$value."<br/>";
    }
    #echo $var1[$i]."<br/>";
}


?>