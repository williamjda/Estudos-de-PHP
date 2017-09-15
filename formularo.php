<!DOCTYPE html>

<html lang="pt-br">
<?php
echo $_POST["nome"] . "<br/>";
echo $_POST["email"] . "<br/>";
echo $_POST["mensagem"] . "<br/>";

?>

<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <style>
        fieldset input, fieldset textarea{
            width: 100%;
            margin-bottom: 10px;
        }
        fieldset{
            width:400px;
        }
        legend{
            font-size: 26px;
        }
    </style>
</head>
<body>

<?php
echo $_GET['nome'];
?>
     <form action= "formularo.php" method="get">
         <fieldset>
             <legend>Formulario</legend>
             <label>Nome:</label>
             <input type="text" nome="nome" value="<?= $_GET['nome'] ?>">
             <label>E-mail:</label>
             <input type="text" nome="email" value="<?= $_GET['email'] ?>">
             <label>Mensagem</label>
             <textarea name="mensagem"><?= $_GET['mensagem']?></textarea>
             <input type="submit" value="submit">
         </fieldset>
     </form>
</body>
</html>
