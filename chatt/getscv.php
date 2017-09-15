<?
session_start();
include("conn.php");
$user=$_POST['user'];
$id=$_POST['idcli'];
$qr=mysql_query("SELECT * FROM chats WHERE iduser='$user' AND idcli='$id' ");
while($rq=mysql_fetch_object($qr)){
	echo"$rq->conversa";
}
?>