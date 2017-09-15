<?php
session_start();
$login = "admin";
$senha = "1111";

if($login == "admin" && $senha == "1111"){
    $_SESSION['login'] = true;
    echo "<h1>Sucesso!<h1/>";

}else{
    echo "Erro!<br/>";
}
?>
<a href="session/secret.php">Entrar</a>