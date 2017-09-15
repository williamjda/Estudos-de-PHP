<title>Aula de Cookie</title>


<?php

setcookie("color","red",time()+3600*24);
echo "Bom dia<br/>". $_COOKIE['nome']."!!!";

?>
<html>
<head>
    <body bgcolor="<?$_COOKIE['color']?>">

</body>
</head>
</html>
