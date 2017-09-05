<?php

$title = "User:";
$name = "William";
$last_name = "Aquino";
$age = 23;
$email = "william@email.com";
?>

<h1><?= $title; ?></h1>

<ul>
    <li>Name: <?= $name. " " . $last_name; ?></li>
    <li>Age: <?php echo $age; ?></li>
    <li>E-mal: <?php echo $email; ?></li>
</ul>