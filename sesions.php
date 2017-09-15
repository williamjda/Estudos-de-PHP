<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aula de Sessions</title>
</head>
<body>
<?php
session_start();
$login = "admin";
$senha = "1111";

if($login == "admin" && $senha == "1111"){
    $_SESSION['login'] = true;
    echo "Sucesso!<br/>";
}else{
    echo "Erro!";
}
?>
<a href="secret.php">Entrar</a>

</body>
</html>