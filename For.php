<?php
/*
for($i = 0;$i<=100;$i++){
    echo "William => ".$i." - Deu Certo","<br/>";
}
*/
//for ($i = 0;$i<10;$i++)

?>

<h1>Repeat loop</h1>
<h3>Using For</h3>

<ul>
    <?php
        $i = 0;
        while($i<=15){
            ?>
    <li>William - <?php echo $i; ?></li>
    <?php
          $i++;
    }
    ?>

</ul>