<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aprendendo PHP</title>
</head>
<body>
<div>
<?php

    $valor = $_GET["v"];
    $rq = sqrt($valor);//para fazer a raiz qualdrada da variavel $valor
    echo "A raiz de $valor é igual a " . number_format($rq,2);


?>
<a href="aula08.php">voltar</a>
</div>
</body>
</html>