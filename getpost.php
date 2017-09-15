<?php
#echo $_POST['nome']."<br/>";
#echo $_POST['email']."<br/>";
#echo $_POST['mensagem']."<br/>";

#echo $_GET['nome']."<br/>";
#echo $_GET['email']."<br/>";
#echo $_GET['mensagem']."<br/>";

echo $_REQUEST['nome']."<br/>";
echo $_REQUEST['email']."<br/>";
echo $_REQUEST['mensagem']."<br/>";

$_REQUEST

?>
<html>
<head>
    <title>GET e POST</title>
    <style>
        fieldset input, fieldset textarea{
            width: 100%;
            margin-bottom: 10px;
        }
        fieldset{
            width: 500px;
        }
        legend{
            font-size: 26px;
        }
    </style>
</head>
<body>
    <form action="getpost.php" method="post">
        <fieldset>
            <legend>Formulário</legend>
            <label>Nome:</label>
            <input type="text" nome="nome" value="<?= $_REQUEST['nome']?>">
            <label>E-mail:</label>
            <input type="text" nome="email" value="<?= $_REQUEST['email']?>">
            <label>Mensagem:</label>
            <textarea nome="mensagem"><?= $_REQUEST['mensagem']?></textarea>
        </fieldset>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>