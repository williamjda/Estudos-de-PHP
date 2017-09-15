<?
session_start();
include("conn.php");
include("infosys.php");
include("dc/$lang.php");
$user=$_POST['user'];
$id=$_POST['idcli'];
$tp=$_POST['tp'];
$val=str_replace("'","",$_POST['val']);
if($tp == 1){
	$chat1="<div style=\'float:left;width:100%\'><div style=\'color:green;font-size:13px;width:100%\'>$user</div><div style=\'width:100%;font-size:13px;color;#666\'>$val</div></div>";
	mysql_query("INSERT INTO chats(id,iduser,idcli,conversa) VALUES('','$user','$id','$chat1')");
}elseif($tp == 2){
	$qr=mysql_query("SELECT * FROM nafila WHERE id='$id'");
	while($rq=mysql_fetch_object($qr)){
		$nc=$rq->nome;
	}
	$chat1="<div style=\'float:left;width:100%\'><div style=\'color:red;font-size:13px;width:100%\'>$nc</div><div style=\'width:100%;font-size:13px;color;#666\'>$val</div></div>";
	mysql_query("INSERT INTO chats(id,iduser,idcli,conversa) VALUES('','$user','$id','$chat1')");
}
?>