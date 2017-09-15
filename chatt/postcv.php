<?
session_start();
include("conn.php");
$user=$_SESSION['user'];
$id=$_POST['idcli'];
$cv=str_replace("'","",$_POST['cv']);
mysql_query("INSERT INTO chats(id,iduser,idcli,conversa) VALUES('','$user','$id','$cv')");
?>