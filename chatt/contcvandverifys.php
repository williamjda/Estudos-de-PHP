<? session_start();
include("conn.php");
$user=$_POST['user'];
$id=$_POST['idcli'];
$cout=$_POST['vall1'];
$cont=0;
$qr=mysql_query("SELECT * FROM chats WHERE iduser='$user' && idcli='$id'");
while($rq=mysql_fetch_object($qr)){
	$cont++;
	if($cont > $cout){
		echo $rq->conversa;
	}
}
$eu=$_POST['eu'];
if($eu == 'cli'){
	$qrr=mysql_query("SELECT * FROM atendentes WHERE user='$user'");
	while($rrq= mysql_fetch_object($qrr)){
		if($rrq->sueresta != $id){
		echo"<script>location.href='goodbye.php?id=$id'</script>";
		}
	}
}elseif($eu == 'user'){
	$vary=0;
	$qrs=mysql_query("SELECT * FROM nafila WHERE id='$id'");
	while($rqs=mysql_fetch_object($qrs)){
		$time=time() - $rqs->tempo;
		if($time < 30){
		$vary=1;	
		}
	}
	if($vary == 0){
	$chat1="This chat is end";
	mysql_query("INSERT INTO chats(id,iduser,idcli,conversa) VALUES('','$user','$id','$chat1')");
	echo"<script>location.href='chatarea.php'</script>";
	}
}
?>