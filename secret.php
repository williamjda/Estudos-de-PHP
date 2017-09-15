<?php
session_start();

if($_SESSION['login']){
    echo "Area secreta!";
}else{
    echo "Login incorreto!";
}
unset($_SESSION['login']);
?>